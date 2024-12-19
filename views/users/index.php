<?php
//postUser
require_once dirname(dirname(__DIR__))."/router.php";
$path = require_once dirname(dirname(__DIR__))."/services/config/path.php";

?>
<form action="<?=$path['post']['user']?>" method="post">

	<input type="text" name="username" class="form-control">
	<input type="text" name="password" class="form-control">
	<input type="text" name="is_active" value="Y" class="form-control">

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
