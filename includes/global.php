<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

if (isset($_REQUEST['debug']) && $_REQUEST['debug'] == 1) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}else{
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
}


include(__DIR__ . "/web.php");

require_once(__DIR__ . '/DB/Db.Class.php');
include(__DIR__ . "/functions.php");
include(__DIR__ . "/library/widget.php");
include(__DIR__ . "/library/functions.php");

global $disable;
$disable = false;

global $GDB;
$GDB = new DB();

/* super admin */
function admin_authenticated()
{
	if (!isset($_SESSION['admin_user'])) {
		if (strpos($_SERVER['PHP_SELF'], "/login.php") === false && strpos($_SERVER['PHP_SELF'], "/login_db.php") === false) {
			if (isset($_SESSION['admin_user'])) {
				unset($_SESSION['admin_user']);
			}
			header("Location: login.php");
			exit;
		}
	}
}


$allowedFiles = array(
	'/login.php',
	'/logout.php',
);
if (strpos($_SERVER['PHP_SELF'], BFNAME) != false && !in_array($_SERVER['PHP_SELF'], $allowedFiles)) {
	admin_authenticated();
}

// include config/libs
if (!isset($root_dir)) {
	$root_dir = './';
}

require("{$root_dir}includes/factory.php");
require("{$root_dir}includes/class.Notification.php");
require("{$root_dir}includes/class.CountryState.php");
require_once("{$root_dir}includes/class.Base.php");

require "{$root_dir}vendor/autoload.php";
function my_autoloader($class_name)
{
	global $root_dir;
	$moduleFolder = lcfirst($class_name);
	if (file_exists("{$root_dir}modules/{$moduleFolder}/class.{$class_name}.php")) {
		require_once("{$root_dir}modules/{$moduleFolder}/class.{$class_name}.php");
	}

	if (file_exists("{$root_dir}includes/class.{$class_name}.php")) {
		require_once("{$root_dir}includes/class.{$class_name}.php");
	}
}
spl_autoload_register('my_autoloader');
?>