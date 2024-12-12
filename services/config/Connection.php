<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once dirname(__DIR__)."/config/env.php";

class Connection{
	private $hostname,$username,$password,$dbname;
	private $appcode;
	public $db;
	public static $instance = null;
	public function __construct(){
		$this->hostname = $_ENV['HOST'];
		$this->username = $_ENV['DB_USER'];
		$this->password = $_ENV['DB_PASS'];
		$this->dbname = $_ENV['DB_NAME'];
			$this->db = $this->openConnection();
	}
	public function openConnection(){
		try {
			$option = array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			   	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
		   	);
			$connection = new PDO("mysql:host=$this->hostname;dbname=$this->dbname;charset=utf8;",$this->username,$this->password,$option);
			return $connection;

		}catch(Exception $err){
			echo $err->getMessage();
		}
	}
	public static function getInstance()
	{
		if(self::$instance === null){
			self::$instance = new self;
		}
		return self::$instance;
	}
	
}
$con = Connection::getInstance();
?>
