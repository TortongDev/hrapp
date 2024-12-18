<?php
$random_csrf = bin2hex(random_bytes(32));
if(empty($_SESSION['CSRF_TOKEN'])){

	$_SESSION['CSRF_TOKEN'] = $random_csrf;
}
?>
