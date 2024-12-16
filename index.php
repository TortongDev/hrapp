<?php
require_once "./vendor/autoload.php";
$router = new AltoRouter();
//$router->setBasePath('/tortongdevbus/');
$router->map( 'GET', '/', function() {
	require __DIR__."/views/home/index.php";
});
$router->map( 'GET', '/login', function() {
	require __DIR__."/views/login/index.php";
});
$match = $router->match();
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
