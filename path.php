<?php 

//Start the Session
//session_start(); 

// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'app/');

// Includes
require(APP_DIR  .'config/config.php');
require(ROOT_DIR .'core/model.class.php');
require(ROOT_DIR .'core/view.class.php');
require(ROOT_DIR .'core/controller.class.php');
require(ROOT_DIR .'core/bootstrap.php');

// Define base URL
global $config;
define('BASE_URL', $config['base_url']);

bootstrap();

