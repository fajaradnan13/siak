<?php
session_start();
require_once 'class_user.php';
$user = new User(); $uid = $_SESSION['uid'];
if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }

require_once('class_transaksi.php');
$transaksi= new Transaksi();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/carousel.js">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="font awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
     <script>
                    
                    $(function(){
                        $("#tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>
</head>

<body>
<div class="container">
    <div class="header">
        <div class="row">
             <nav id="mainNav" class="navbar navbar-inverse navbar-fixed-top navbar-custom">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i></button>
                        <a class="navbar-brand" href="home.php" style="color: #c8e6c9; font-family: 'Open Sans', sans-serif;">GURU PRIVATE.com</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="hidden">
                                <a href="#page-top"></a>
                            </li>
                            <li class="page-scroll">
                                <a href="home.php"  style="color: #c8e6c9; font-family: 'open sans' sans-serif;">
                                <?php
                                $data=$user->get_data($uid); 
                               echo $data['fullname'];
                                ?></a>
                            </li>
                            <li class="page-scroll">
                                <a href="biodata.php" style="color: #c8e6c9; font-family: 'open sans' sans-serif;">Biodata Guru</a>
                            </li>
                            <li class="page-scroll">
                                <a href="biodata.php" style="color: #c8e6c9; font-family: 'open sans' sans-serif;">Transaksi</a>
                            </li>
                            <li class="page-scroll">
                                <a href="home.php?q=logout"  style="color: #c8e6c9; font-family: 'open sans' sans-serif;">Signout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="container">
  <h2>Transaksi</h2>
  <div class="table-responsive">          
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>nama</th>
                <th>tanggal</th>
                <th>desa</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Matpel</th>
                <th>Guru</th>
                <th>Jam</th>
                <th>Handphone</th>
                <th>Kelas</th>
                <th>Pembayaran</th>
            </tr>
        </thead>
        <tbody>
		<?php
		 $pes=$transaksi->show();
		 foreach($pes as $row): ?>
            <tr>
                <td><?php echo $row['id_pesan']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['desa']; ?></td>
				<td><?php echo $row['nama_provinsi']; ?></td>
				<td><?php echo $row['nama_kota']; ?></td>
				<td><?php echo $row['nama_kecamatan']; ?></td>
				<td><?php echo $row['matpel']; ?></td>
				<td><?php echo $row['nama_guru']; ?></td>
				<td><?php echo $row['jam']; ?></td>
				<td><?php echo $row['handphone']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				<td><?php echo $row['pembayaran']; ?></td>
            </tr>
			<?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>


</body>