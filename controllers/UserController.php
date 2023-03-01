<?php

class UserController {

	public static function authLogin($data)
	{
		$table = "users";
		$userLogin = NULL;
		$response = UserModel::auth($table, "user_login", $data['user_login']);
		
		if ($response === FALSE) {
			
			$createUser = UserModel::create($table, $data);

			if ($response == "ok") {
				$userLogin = $data['user_login'];
			}

		}else{

			if ($response['user_login'] == $data['user_login'] && 
				$response['password'] == $data['password']) {
				
				$userLogin = $response['user_login'];
			}
		}

		session_start();
		$_SESSION['authority'] = "ok";
		$_SESSION['userLogin'] = $userLogin;

		echo "ok";

		
	}
}