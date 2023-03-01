<?php
require_once ('Conexion.php');

class UserModel {

	public static function auth($table, $item, $value)
	{
		$stmt = Conexion::conn()->prepare("SELECT * FROM $table WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $value, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		// $stmt-> close();

		$stmt = null;
	}

	public static function create($table, $data)
	{
		$stmt = Conexion::conn()->prepare("INSERT INTO $table (id, username, user_login, password) VALUES (NULL, :username, :user_login, :password)");

		$stmt -> bindParam(":username", $data['username'], PDO::PARAM_STR);
		$stmt -> bindParam(":user_login", $data['user_login'], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $data['password'], PDO::PARAM_STR);

		if ($stmt -> execute()) {

			echo "ok";
		}else{
			echo "error";
		}

		// $stmt->close();

		$stmt = null;
	}
}