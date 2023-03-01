<?php 
if (isset($_SESSION['userLogin']) && isset($_SESSION['authority'])) {
	echo '<script>
            
            window.location = "home";

        </script>';
    exit();
}
 ?>
<!--=====================================
INGRESO
======================================-->

<div id="login">
	
	<div class="content-login">
		
		<form onsubmit="return false;">

			<input type="text" id="username" name="username" placeholder="Usuario">
			<input type="password" id="password" name="password" placeholder="Contraseña">

			<button type="submit" class="btn-login" onclick="home.login()">Ingresar</button>

		</form>

	</div>

</div>