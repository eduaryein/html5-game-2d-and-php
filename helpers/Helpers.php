<?php 

define('URL', 'http://localhost/game-corredor/');

/*=============================================
LIMPIAR TEXTO A FORMATO URL
=============================================*/
function limpiar($url) {
  // Tranformamos todo a minusculas
  $url = strtolower($url);
  //Rememplazamos caracteres especiales latinos
  $find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
  $repl = array('a', 'e', 'i', 'o', 'u', 'n');
  $url = str_replace ($find, $repl, $url);
  // Añadimos los guiones
  $find = array(' ', '&', '\r\n', '\n', '+'); 
  $url = str_replace ($find, '-', $url);
  // Eliminamos y Reemplazamos demás caracteres especiales
  $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
  $repl = array('', '-', '');
  $url = preg_replace ($find, $repl, $url);
  
  return $url;
}

function getGravatar($username): string
{
    return 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($username))).'?s=80&d=retro';
}

function authValidate($username, $sessionValidate)
{
    require_once ('models/Conexion.php');

    if (isset($username)        &&
        isset($sessionValidate) && 
        $sessionValidate == "ok") {

        return TRUE;
        
      }else{

        echo '<script>
            
                window.location = "login";

            </script>';
        exit();
      }
}

function authData($username)
{
    $stmt = Conexion::conn()->prepare("SELECT * FROM users WHERE user_login = :user_login");

    $stmt -> bindParam(":user_login", $username, PDO::PARAM_STR);

    $stmt -> execute();

    return $stmt -> fetch(PDO::FETCH_ASSOC);

    $stmt = null;
}