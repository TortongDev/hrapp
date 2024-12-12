<?php
	require_once "./Connection.php";
	$db = Connection::getInstance();

	$newdate = date('Y-m-d H:i:s');
	
	$random =  bin2hex(random_bytes(16));
	$secret_key = base64_encode($random);
	
	$sql = "insert into secret_key (secret_key, is_active, create_at) values (?, ?, ?)";
		$insert = $db->db->prepare($sql);
		
		$insert->execute([$secret_key, 'Y', $newdate]);
	
?>
