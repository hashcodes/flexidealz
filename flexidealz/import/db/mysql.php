<?php 
namespace DB;

class MySQL{
	
	protected $host;
	protected $database;
	protected $username;
	protected $password;
	private $resource_id;
	public $connection = NULL;

	function __construct($settings = array()){
		$this->host 		= $settings['host'];
		$this->database 	= $settings['database'];
		$this->username 	= $settings['username'];
		$this->password 	= $settings['password'];

		if( is_null($this->connection) ){
			$this->getConnection()->connectDB();
		}

		return $this->connection;

	}

	
	function __destruct() {
		@mysql_close($this->connection);
	}

	public function getConnection(){
		$this->connection = @mysql_connect(
				$this->host,
				$this->username,
				$this->password
		);

		if(!$this->connection) {
			die("Unable to create connection, Server might be too busy or check your credentials!");			
		}

		return $this;
	}

	public function connectDB() {
		if(mysql_select_db($this->database,$this->connection)){
			return $this;
		} else {
			die("Unable to connect to database");
		}
	}

	




}






 ?>