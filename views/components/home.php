<?php 
authValidate($_SESSION['userLogin'], $_SESSION['authority']);
$authData = authData($_SESSION['userLogin']);
?>
<!--=====================================
INICIO
======================================-->

<div class="home">
	<div id="cerrarSesion"><a href="close">Cerrar Sesión</a></div>

	<h2 id="saludo">¡Hola <?php echo $authData['username'];
								echo '<img style="border-radius:50%; margin:0 10px;" width="30px" src="'.getGravatar($authData['username']).'">'	 
									 ?>  bienvenid@!</h2>
</div>
