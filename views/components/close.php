<?php 

$_SESSION['userLogin'] = null; 
$_SESSION['authority'] = null;

unset($_SESSION['userLogin']);
unset($_SESSION['authority']);

session_destroy();

echo '<script>
	window.location = "login";
</script>';