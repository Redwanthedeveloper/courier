<?php
ob_start();
date_default_timezone_set("Asia/Dhaka");

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}

if($action == 'save_branch'){
	$save = $crud->save_branch();
	if($save)
		echo $save;
}
if($action == 'delete_branch'){
	$save = $crud->delete_branch();
	if($save)
		echo $save;
}
ob_end_flush();
?>
