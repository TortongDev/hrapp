<?php
	session_start();
	require_once dirname(dirname(__DIR__))."/config/Connection.php";
	$db = Connection::getInstance();
	$username = isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : '';
	$password = isset($_POST['password']) ? filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : '';
	$is_active = isset($_POST['is_active']) ? filter_var($_POST['is_active'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : 'N';
	$created_at = date('Y-m-d H:i:s');
	//isset($_POST['username']) ? filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS) : '';
	
	$sql = "insert into users (username, password, is_active, created_at) values (?,?,?,?)";
	$stmt = $db->db->prepare($sql);
	$stmt->execute([$username, $password, $is_active, $created_at]);
?>
