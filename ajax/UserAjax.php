<?php 

require_once ('../controllers/UserController.php');
require_once ('../models/UserModel.php');
require_once ('../helpers/Helpers.php');

class UserAjax {

	public $username;
	public $userLogin;
	public $password;

	public function authLogin()
	{
		$data = array();
		$data['username']   = $this->username;
		$data['user_login'] = $this->userLogin;
		$data['password']   = $this->password;

		$response = UserController::authLogin($data);

		return $response;
	}
}

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
	/*=================================
	LOGIN POST AREA
	==================================*/
	if (isset($_POST['loginForm'])) {
		## VALIDAR USUARIO=======================
		if (isset($_POST['username'])) {

			if (empty($_POST['username'])) {
				echo "El campo usuario se encuntra vacio..";
				exit();
			}else if(!preg_match('/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]+$/', $_POST['username'])){
				echo "Por favor ingre solo letras y números en le camo (Usuario)..";
				exit();
			}
					
		}
		## VALIDAR PASSWORD=======================
		if (isset($_POST['password'])) {

			if (empty($_POST['password'])) {
				echo "El campo contraseña se encuntra vacio..";
				exit();
			}else if(!preg_match('/^[a-zA-Z0-9]+$/', $_POST['password'])){
				echo "Por favor ingre solo letras y números en le camo (Contraseña)..";
				exit();
			}
					
		}
		#======= ALAMCENAR VALORES POST EN VARIABLES ================
		$username  = trim(strip_tags($_POST['username']));
		$userLogin = limpiar($_POST['username']);
		$password  = crypt($_POST['password'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

		$set = new UserAjax();
		$set -> username  = $username;
		$set -> userLogin = $userLogin;
		$set -> password  = $password;
		$set -> authLogin();
		
		
	}


}