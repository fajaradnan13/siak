<?php
include "db_config.php";

	class Matpel{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

    	public function get_data(){
    		$sql3="SELECT * FROM  matpel";
	        $result = mysqli_query($this->db,$sql3);
	        $rows=array();
	        while($row=mysqli_fetch_array($result)){
	        	$rows[]=$row;
	        }
	        return $rows;
    	}
	  
	}
?>