<?php 

class Conexion
{
	public static function conn()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=game_2d","root","",
			
					array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		return $pdo;
	}
}