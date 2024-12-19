<?php require_once (dirname(dirname(__DIR__)))."/templates/header-template.php"; ?>
<?php 
	$path = require_once dirname(dirname(dirname((__DIR__))))."/services/config/path.php"; 
	require_once  dirname(dirname(dirname((__DIR__))))."/services/config/csrf_form.php";
?>
<form action="<?=$path['post']['register']?>" method="post">
<div class="container bg-light">
	<input type="hidden" name="csrf_token" id="csrf_token" value="<?=$_SESSION['CSRF_TOKEN']?>" class="form-control">
	<div class="row">
		<div class="col-12 col-md-8">
			<label for="username">Username</label><br />
			<input type="text" name="username" id="username" class="form-control">
		</div>
		<div class="col-12 col-md-8">
			<label for="password">Password</label><br />
			<input type="password" name="password" id="password" class="form-control">
		</div>
		<div class="col-12 col-md-8">
			<label for="is_active">is active</label><br />
			<input type"radio" name="is_y" id="is_y" value="Y" ><label for="is_y">Y</label><br>
			<input type"radio" name="is_n" id="is_n" value="N" ><label for="is_n">N</label><br>
		</div>
		<div class="col-12 col-md-8">
			<button type="submit" class="btn btn-primary">Add User</button>
		</div>
	</div>
</div>
</form>
<?php require_once (dirname(dirname(__DIR__)))."/templates/footer-template.php"; ?>
