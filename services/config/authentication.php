<?php
//require_once __DIR__."/Connection.php";
//$db = Connection::getInstance();
$redirect_to = "";
if(!empty($_SERVER['DOCUMENT_URI']) && $_SERVER['DOCUMENT_URI'] == '/services/config/login.php'){


}
if(empty($_SESSION['TEST_USER_ID'])){
if($_SERVER['DOCUMENT_URI'] != '/services/config/login.php'){
$redirect_to = "/login";
}
}else{

}
header("Location: ".$redirect_to);

