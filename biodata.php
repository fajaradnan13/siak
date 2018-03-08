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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/carousel.js">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Sedgwick+Ave+Display" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="font awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script>    
        $(function(){
            $("#tanggal").datepicker({
                format:'yyyy-mm-dd'
                    });
                })
    </script>
    <script type="text/javascript">
        $(function() {
            $('#gurumtk a').lightBox();
        });
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


<section class="guru">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <hr><span style="font-family: 'Open Sans', sans-serif; font-size: 25px;">Guru ialah .. ?</span></p> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-8" style="text-align: center;">
                <b>Menurut UU no.14 Tahun 2005</b> <br>Guru ialah seorang pendidik profesional dengan tugas utamanya mendidik, mengajar, membimbing, mengarahkan, melatih, menilai dan mengevaluasi peserta didik pada pendidikan anak usia dini melalui jalur formal dan no-formal pendidikan dasar dan pendidikan menengah.
            </div>
        </div>
    </div>
</section>
<section id="slide1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="height:50px;">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
               <div data-toggle="collapse" data-target="#gurumtk"><span style="font-family:'Open Sans', sans-serif; font-size: 20px; text-align: center;"><button type="button" class="btn btn-info" >Guru Matematika</button> </span></div><br>
            </div>
        </div>
        <div  id="gurumtk" class="row" class="collapse">
            <div class="row">
                <div class="col-sm-3">
                    <a href="images/guru/Deni.jpg" title="satu"><img src="images/guru/Deni.jpg" class="img-responsive"  width="150" height="160" class="img-rounded" ></a>
                </div>
                <div class="col-sm-3">
                    <a href=""><img src="images/guru/Gunanjar.jpg" class="img-responsive"  width="150" height="160" class="img-rounded"></a>
                </div>
                <div class="col-sm-3">
                    <a href=""><img src="images/guru/Malika.jpg" class="img-responsive"  width="150" height="160" class="img-rounded" style="margin-left: 40px;"></a>
                </div>
                <div class="col-sm-3">
                    <a href=""><img src="images/guru/donita .jpg" class="img-responsive"  width="150" height="160" class="img-rounded" style="margin-left: 55px;"></a>
            </div>
        </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                &nbsp;
            </div>
        </div>
    </div>
</section>


<section id="slide2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
               <div data-toggle="collapse" data-target="#guruindonesia"><span style="font-family:'Open Sans', sans-serif; font-size: 20px; text-align: center;"><button type="button" class="btn btn-info" >Guru Bahasa Indonesia</button> </span></div><br>
            </div>
        </div>
    </div>
</section>


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
