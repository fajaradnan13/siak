<?php
include "db_config.php";

	class Area{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}


    	public function Provinsi(){
	    	$sql1="SELECT * FROM provinsi ORDER BY nama_provinsi";
	        $result = mysqli_query($this->db,$sql1);
	        $rows=array();
	        while($row=mysqli_fetch_array($result)){
	        	$rows[]=$row;
	        }
	        return $rows;
	    }

	    public function Kota(){
	    	$sql4="SELECT * FROM kota INNER JOIN provinsi ON kota.id_provinsi_fk = provinsi.id_provinsi ORDER BY nama_kota";
	        $result = mysqli_query($this->db,$sql4);
	        $rows=array();
	        while($row=mysqli_fetch_array($result)){
	        	$rows[]=$row;
	        }
	        return $rows;
	    }

	    public function Kecamatan(){
	    	$sql="SELECT * FROM kecamatan INNER JOIN kota ON kecamatan.id_kota_fk = kota.id_kota ORDER BY nama_kecamatan";
	        $result = mysqli_query($this->db,$sql);
	        $rows=array();
	        while($row=mysqli_fetch_array($result)){
	        	$rows[]=$row;
	        }
	        return $rows;
	    }

	    public function Guru(){
	    	$sql="SELECT * FROM guru INNER JOIN kecamatan ON kecamatan.id_kecamatan= guru.id_kecamatan_fk ORDER BY nama_guru";
	        $result = mysqli_query($this->db,$sql);
	        $rows=array();
	        while($row=mysqli_fetch_array($result)){
	        	$rows[]=$row;
	        }
	        return $rows;
	    }

	    public function Matpel(){
	    	$sql="SELECT * FROM matpel INNER JOIN guru ON guru.id_guru= matpel.id_guru ORDER BY matpel";
	        $result = mysqli_query($this->db,$sql);
	        $rows=array();
	        while($row=mysqli_fetch_array($result)){
	        	$rows[]=$row;
	        }
	        return $rows;
	    }

    	
	  
	}
?>