<?php 
namespace DB\MySQL;
use DB\MySQL as MySQL;

class Query extends MySQL{
	private $resource_id;
	private $record_set;

	function __construct( $sql ){

		global $DB_SETTINGS;
		$this->record_set = Array();

		$this->resource_id = parent::__construct($DB_SETTINGS);	
		$this->query($sql);
	}


	public function query($sql) {
			$this->resource_id = mysql_query($sql,$this->connection);
			if(!$this->resource_id){
				echo (mysql_error());
				return null;
			}
			return $this;
	}

	public function fetch() {
			$record_set = Array();
			while($row = mysql_fetch_assoc($this->resource_id)) {
				$record_set[] = $row;
			}
			return $record_set;
	}


	/** other utility functions **/

	public function first() {
			mysql_data_seek($this->resource_id, 0); 
			$record_set = Array();
			$row = mysql_fetch_assoc($this->resource_id);
			
			if($row){
				$record_set = $row;
			}

			return $record_set;
	}

	public function last() {
			mysql_data_seek($this->resource_id, 0); 
			$record_set = Array();
			while($row = mysql_fetch_assoc($this->resource_id)) {
				$record_set = $row;
			}
			
			return $record_set;
	}
}
?>