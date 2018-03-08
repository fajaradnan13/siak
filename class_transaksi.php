<?php
include "db_config.php";
class Transaksi{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		public function show(){
	    	$sql1="SELECT id_pesan, username, nama, tanggal, desa, nama_provinsi, nama_kota, nama_kecamatan, matpel.matpel, nama_guru, jam, handphone, kelas, pembayaran FROM pesan
			LEFT JOIN provinsi ON pesan.id_provinsi=provinsi.id_provinsi 
			LEFT JOIN kota ON pesan.id_kota=kota.id_kota LEFT join kecamatan ON pesan.id_kecamatan=kecamatan.id_kecamatan 
			LEFT JOIN matpel ON pesan.id_matpel=matpel.id_matpel LEFT join guru ON pesan.id_guru=guru.id_guru";
	        $result = mysqli_query($this->db,$sql1);
	        $rows=array();
	        while($row=mysqli_fetch_assoc($result)){
	        	$rows[]=$row;
	        }
	        return $rows;
	    }

		}
		
?>