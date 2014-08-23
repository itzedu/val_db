<?php
include("include/connection.php");
session_start();


if (isset($_POST['email'])) {
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$_SESSION['error'] = "The email address you entered: " . $_POST['email'] . " is NOT a valid email address";
		header('Location: index.php');
	}
	else {
		$_SESSION['success'] = "The email address you entered: " . $_POST['email'] . " is a valid email address";
		$sql = "INSERT INTO users (email, created_at) VALUES ('{$_POST['email']}', now());";
		run_mysql_query($sql);
		header('Location: success.php');
	}
}

if (isset($_POST['action']) && $_POST['action'] == 'delete') {
	$sql = "DELETE FROM users WHERE email= '{$_POST['e_mail']}';";
	run_mysql_query($sql);
	header('Location: index.php');

}

?>