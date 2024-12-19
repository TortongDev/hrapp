<?php
date_default_timezone_set("Asia/Bangkok");
require_once dirname(dirname(__DIR__)).'/config/Connection.php';
class UserControllers {
	public $username,$password,$is_active,$created_at,$csrf_token;
	public $sql = null;
	public $db = null;
	public function __construct(){
		$db = Connection::getInstance();
		$this->db = $db->db;
	}
	public function validation_login(){
		$this->csrf_token = isset($_POST['csrf_token']) ? trim($_POST['csrf_token']) : '';
		$this->username = !empty($_POST['username']) ? addslashes(trim($_POST['username'])) : '';
		$this->password = !empty($_POST['password']) ? addslashes(trim($_POST['password'])) : '';
		$this->is_active = !empty($_POST['is_active']) ? addslashes(trim($_POST['is_active'])) : 'Y';
		$this->created_at = date('Y-m-d H:i:s');
		if($this->csrf_token == @$_SESSION['CSRF_TOKEN']){
			$this->login();
		}else{
			echo $this->response(array('code' => 400, 'message' => 'you not csrf'));
		}
	}
	public function login(){
		$sql = "select username , is_active from users where username = ? and is_active = 'Y' ";
		$login = $this->db->prepare($sql);
		$username = $this->username;
		$password = $this->password;
		$login->execute([$username]);
		while($row = $login->fetch(PDO::FETCH_ASSOC)):
			if(password_verify($password, $row['password'])){
				echo 'success login = '.$row['password'];
			}
		endwhile;
	}
	public function validation_register(){
		$this->csrf_token = isset($_POST['csrf_token']) ? trim($_POST['csrf_token']) : '';
		$this->username = !empty($_POST['username']) ? addslashes(trim($_POST['username'])) : '';
		$this->password = !empty($_POST['password']) ? password_hash(addslashes(trim($_POST['password'])), PASSWORD_BCRYPT) : '';
		$this->is_active = !empty($_POST['is_active']) ? addslashes(trim($_POST['is_active'])) : 'Y';
		$this->created_at = date('Y-m-d H:i:s');
		if($this->csrf_token == @$_SESSION['CSRF_TOKEN']){
			$this->insert_data();
		}else{
			echo $this->response(array('code' => 400, 'message' => 'you not csrf'));
		}
	}
	public function prepare_data(){
		return array(
			$this->username,$this->password, $this->is_active, $this->created_at
		);
	}
	public function insert_data(){
		$sql = "insert into users (username, password, is_active, created_at) values (?, ?, ?, ?)";
		$insert = $this->db->prepare($sql);
		$insert->execute($this->prepare_data());
		if($insert){
			echo $this->response(
				array('code' => 200,
				'message' => 'add user is successfully.')
			);
		}
		$this->db = null;
	}
	public function register_page(){
		require_once dirname(dirname(dirname(__DIR__)))."/views/users/register/index.php";
		return;
	}
	public function response(array $res) 
	{
		return json_encode($res);
	}
}
?>
