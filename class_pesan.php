
<?php

include "db_config.php";
class Pesan{

		public $db;
		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

		//proses insert process pesan
		public function InsertPesan($username, $nama, $tanggal, $desa, $id_provinsi, $id_kota, $id_kecamatan, $id_guru, $id_matpel, $jam, $handphone, $kelas, $pembayaran)
		{

		$sql = "INSERT INTO `pesan` (`id_pesan`, `username`, `nama`, `tanggal`, `desa`, `id_provinsi`, `id_kota`, `id_kecamatan`, `id_guru`, `id_matpel`, `jam`, `handphone`, `kelas`, `pembayaran`) VALUES (NULL, '$username', '$nama', '$tanggal', '$desa', '$id_provinsi', '$id_kota', '$id_kecamatan', '$id_guru', '$id_matpel', '$jam', '$handphone', '$kelas', '$pembayaran')";
		$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
        return $result;
        redirect('home.php','reset');
	    }

	    
	    




		}
		?>