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

require_once('class_area.php');
$area= new Area();

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
                                <a href="Transaksi.php" style="color: #c8e6c9; font-family: 'open sans' sans-serif;">Transaksi</a>
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

<section id="home"> 
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="images/slider/GAMBAR 1.jpg" alt="slider">                      
            </div>
            <div class="item">
                <img class="img-responsive" src="images/slider/GAMBAR 3.jpg" alt="slider">  
            </div>              
        </div>
    </div>      
</section>

 <!-- home Section -->

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Pesan disini</h2>
                    <hr class="star-primary">
                </div>     
            </div>
        <form class="row" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" name="pesan">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                     <div class="row control-group">
                        <div class="form-group col-md-12 floating-label-form-group controls">
                           <label>Username</label>
                            <input type="text" id="username" class="form-control"  value=" <?php echo $data['uname']; ?>" name="username"  readonly="readonly" required/>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-md-12 floating-label-form-group controls">
                            </i> <label>Nama</label>
                            <input type="text" id="nama" class="form-control" value=" <?php echo $data['fullname']; ?>" name="nama"  readonly="readonly" required/>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-md-12 floating-label-form-group controls">
                           <label> Alamat</label>
                           <textarea name="desa" class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row control-group">
                        <!-- Combo Provinsi -->
                        <div class="form-group col-md-4 floating-label-form-group controls">
                            <i class="fa fa-clock-o" style="margin-left: 5px;"></i>
                            <label>Pilih Provinsi</label>
                                <select class="form-control" id="provinsi" name="id_provinsi"/>
                                <option value="">Please Select</option>
                                    <?php
                                    $prov=$area->Provinsi();
                                    foreach($prov as $row):
                                    ?>
                                <option value="<?php echo $row['id_provinsi']; ?>" id="provinsi"><?php echo $row['nama_provinsi']; ?></option>
                            <?php endforeach; ?>
                                </select>
                        </div>
                        <!-- Combo Kota -->
                        <div class="form-group col-md-4 floating-label-form-group controls">
                            <i class="fa fa-mobile" style="margin-left: 5px;"></i>
                            <label>Pilih Kota</label>
                                <select class="form-control" id="kota" name="id_kota">
                                <option value="">Please Select</option>
                                    <?php
                                    $kota=$area->Kota();
                                    foreach($kota as $row):
                                    ?>
                                <option value="<?php echo $row['id_kota']; ?>" id="kota" class="<?php echo $row['id_provinsi']; ?>" ><?php echo $row['nama_kota']; ?></option>
                            <?php endforeach; ?>
                                </select>
                        </div>
                        <!-- Combo Kecamatan -->
                        <div class="form-group col-md-4 floating-label-form-group controls">
                            <i class="fa fa-mobile" style="margin-left: 5px;"></i>
                            <label>Pilih Kecamatan</label>
                                <select class="form-control" id="kecamatan" name="id_kecamatan">
                                <option value="">Please Select</option>
                                    <?php
                                    $kecamat=$area->Kecamatan();
                                    foreach($kecamat as $row):
                                    ?>
                                <option value="<?php echo $row['id_kecamatan']; ?>" id="kecamatan" class="<?php echo $row['id_kota']; ?>"  ><?php echo $row['nama_kecamatan']; ?></option>
                            <?php endforeach; ?>
                                </select>
                        </div>

                    </div>

                        <div class="row control-group">
                        <div class="form-group col-xs-6 floating-label-form-group controls">
                            <label>Pilih Guru</label>
                                <select class="form-control" id="guru" name="id_guru">
                                <option value="">Please Select</option>
                                    <?php
                                    $guru=$area->Guru();
                                    foreach($guru as $row):
                                    ?>
                                <option value="<?php echo $row['id_guru']; ?>" id="guru" class="<?php echo $row['id_kecamatan']; ?>"  ><b><?php echo $row['nama_guru'].' -- Reputasi: '.$row['reputasi']; ?></b></option>
                            <?php endforeach; ?>
                                </select>
                        </div>

                        <div class="form-group col-xs-6 floating-label-form-group controls">
                            <label>Pilih Matpel</label>
                                <select class="form-control" id="matpel" name="id_matpel">
                                <option value="">Please Select</option>
                                    <?php
                                    $matpel=$area->Matpel();
                                    foreach($matpel as $row):
                                    ?>
                                <option value="<?php echo $row['id_matpel']; ?>" id="matpel" class="<?php echo $row['id_guru']; ?>"  ><?php echo $row['matpel'];?></option>
                            <?php endforeach; ?>
                                </select>
                        </div>

                        </div>
                    


                    <div class="row control-group">
                        <div class="form-group col-md-3 floating-label-form-group controls">
                            <i class="fa fa-clock-o" style="margin-left: 5px;"></i> <label>Pilih Jam</label>
                            <input type="jam" id="jam" class="form-control" placeholder="00:00" name="jam" required />
                        </div>
                        <div class="form-group col-md-9 floating-label-form-group controls">
                            <i class="fa fa-mobile" style="margin-left: 5px;"></i> <label>No Handphone</label>
                            <input type="handphone" id="handphone" class="form-control" placeholder="0812XXX" name="handphone" required />
                        </div>
                    </div>


                     <div class="row control-group">
                        <div class="form-group col-md-12 floating-label-form-group controls">
                            <label>Kelas</label>
                                <select class="form-control" id="kelas" name="kelas" required/>
                                   <?php for($i=1; $i<=12; $i++){ ?>
                                   <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                   <?php }?>
                                </select>
                        </div>
                    </div>
    
                    <div class="row control-group">
                        <div class="form-group col-md-12 floating-label-form-group controls">
                        <i class="fa fa-credit-card" style="margin-left: 5px;"></i> <label>Pembayaran</label>
                            <select class="form-control" id="pembayaran" name="pembayaran" required/>
                                <option value="Cash">Cash</option>
                                <option value="Via Transfer MANDIRI Cabang Kisamaun : 08125974">Via Transfer MANDIRI Cabang Kisamaun : 08125974</option>
                                <option value="Via Transfer BNI Cabang Kisamaun : 10852668">Via Transfer BNI Cabang Kisamaun : 10852668</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" name="submit1" class="btn btn-info" value="Submit">
                    </div>
                </form>
            </div>
        </form>
    </div>
</section>

<?php
    require_once ('class_pesan.php'); 
    $pesan = new Pesan();
    if (isset ($_POST['submit1'])) 
    {
     $username = $_POST ['username'];
     $nama = $_POST['nama'];
     $tanggal = date('Y-m-d');
     $desa = $_POST ['desa'];
     $id_provinsi = $_POST ['id_provinsi'];
     $id_kota = $_POST ['id_kota'];
     $id_kecamatan = $_POST ['id_kecamatan'];
     $id_matpel = $_POST ['id_matpel'];
     $id_guru = $_POST ['id_guru'];
     $jam = $_POST ['jam'];
     $handphone = $_POST ['handphone'];
     $kelas = $_POST ['kelas'];
     $pembayaran = $_POST ['pembayaran'];
     $pesan->InsertPesan($username, $nama, $tanggal, $desa, $id_provinsi, $id_kota, $id_kecamatan, $id_guru, $id_matpel, $jam, $handphone, $kelas, $pembayaran);
    }
?>


<section id="twitter">
        <div id="twitter-feed" class="carousel slide" data-interval="false">
            <div class="twit">
                <img class="img-responsive" src="images/twit.png" alt="twit">
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="text-center carousel-inner center-block">
                        <div class="item active">
                            <span style="font-family: 'Open Sans', sans-serif;">Cari dan taklukkanlah dunia hanya untuk beribadah kepada Allah SWT</span><br>
                            <a>Imam Al-Ghazali</a>
                        </div>
                        <div class="item">
                            <span style="font-family:'Open Sans', sans-serif; "> Berangkat pada pagi hari atau sore hari di jalan Allah (berjihad) adalah lebih baik dari dunia dan semua isinya.</span><br>
                            <a>HR Imam Bukhari</a>
                        </div>
                        <div class="item">
                            <span style="font-family:'Open Sans', sans-serif; "> Pergilah kalian kepada lelaki salih dan berilmu ini, supaya kalian bisa mendengar ilmu darinya.”</span><br>
                            <a>HR Imam Bukhari</a>
                        </div>
                        <div class="item">
                            <span style="font-family:'Open Sans', sans-serif; "> Dengan kecerdasan jiwalah manusia menuju arah kesejahteraan</span><br>
                            <a>Ki Hajar Dewanatara</a>
                        </div>
                        <div class="item">
                            <span style="font-family:'Open Sans', sans-serif; "> “Menuntut ilmu bisa dimana saja, kapan saja. Tak terbatas tempat, tak terkekang usia.” </span><br>
                            <a>Anak anak kolong langit</a>
                        </div>
                        <div class="item">
                            <span style="font-family:'Open Sans', sans-serif; "> Ilmu pengetahuan tanpa agama lumpuh, agama tanpa ilmu pengetahuan buta</span><br>
                            <a>Albert Einstein</a>
                        </div>
                    </div>
                <a class="twitter-control-left" href="#twitter-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="twitter-control-right" href="#twitter-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>      
</section><!--/#twitter-feed-->
<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-12" style="margin-top: 60px;">
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Guru Private.com | 2016
                    </div>
                </div>
            </div>
        </div>
</footer>




   <!-- jQuery -->
    <script src="plugin/jquery/jquery.min.js"></script>
     <script src="js/bootstrap-datepicker.js"></script>
     <script src="js/jquery-1.10.2.min.js"></script>
     <script src="js/jquery.chained.min.js"></script>
        <script>
            $("#kota").chained("#provinsi");
            $("#kecamatan").chained("#kota");
            $("#guru").chained("#kecamatan");
            $("#matpel").chained("#guru");
        </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="plugin/bootstrap/js/bootstrap.min.js"></script>
	<!-- Plugin JavaScript -->
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    <script src="js/jquery.min.2.0.2.js"></script>

</body>
</html>
