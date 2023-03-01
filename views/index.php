<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="public/img/icon.png" sizes="192x192">
	<title>Juego de plataforma (2D)</title>

	<link rel="stylesheet" href="public/css/main.css">
</head>
<body>

	<!--=====================================
	PANTALLA VERTICAL
	======================================-->

	<div id="vertical"></div>

	<!--=====================================
	MARCO
	======================================-->

	<div id="frame"></div>
	<!--=====================================
	CONTENEDOR
	======================================-->
	<div id="container">

		<?php if (isset($_GET['url'])): 

			switch ($_GET['url']) {
				case 'home':
					include ('components/home.php');
					break;
				case 'close':
					include ('components/close.php');
					break;
				default:
					include ('components/login.php');
					break;
			}

			?>


		<?php else: 

			include ('components/login.php');
			?>
			
		<?php endif; ?>
		
	</div>

	<!--=====================================
	CREDITOS
	======================================-->

	<footer>
		
		<center>
		<p>Juego desarrollado por Eduardo Nava winxer | <a href="https://winxer.org" target="_blank">www.winxer.org</a></p>
		</center>

	</footer>
	

	<script src="public/js/jquery.js"></script>
	<script src="public/js/properties.js"></script>
	<script src="public/js/app.js"></script>
</body>
</html>