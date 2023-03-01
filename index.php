<?php 
require_once ('helpers/Helpers.php');
/*=================================
INCLUDE CONTROLLERS
==================================*/
require_once ('controllers/HomeController.php');
require_once ('controllers/UserController.php');
/*=================================
INCLUDE MODELS
==================================*/
require_once ('models/UserModel.php');
/*=================================
LOAD APP
==================================*/
$app = new HomeController();
$app -> index();