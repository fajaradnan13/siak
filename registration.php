<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="js/bootstrap.js"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Registrasi Accountn</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="" method="post" name="login">
                	<input type="text" name="fullname" class="form-control" placeholder="fullname" required autofocus required=""/>
	                <input type="text" name="uname" class="form-control" placeholder="Username" required=""/>
	                <input type="text" name="uemail" class="form-control" placeholder="email" required=""/>
	                <input type="password" name="upass" class="form-control" placeholder="Password" required=""/>
	                <button class="btn btn-lg btn-primary btn-block" onclick="return(submitreg());" type="submit" name="submit" value="Register">Register</button>
                    <a href= "login.php" class="btn btn-success btn-block" rel="tooltip" title="Login"><i class="glyphicon glyphicon-home"></i>Already registered! Click Here!</a>
	               
                </form>
                <?php
include_once 'class_user.php';  $user = new user(); // Checking for user logged in or not

 if (isset($_REQUEST['submit'])){
 extract($_REQUEST);
 $register = $user->reg_user($fullname, $uname,$upass, $uemail);
 if ($register) {
 // Registration Success
 echo "<div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert'
        aria-hidden='true'>
        &times;
        </button>
        Data Berhasil Di Simpan
        </div>";
 } else {
 // Registration Failed
 echo 'Registration failed. Email or Username already exits please try again';
 }
 }
?>
            </div>
        </div>
    </div>
</div>
</body>




<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<style><!--
 #container{width:400px; margin: 0 auto;}
--></style>

<script type="text/javascript" language="javascript">
 function submitreg() {
 var form = document.reg;
 if(form.name.value == ""){
 alert( "Enter name." );
 return false;
 }
 else if(form.uname.value == ""){
 alert( "Enter username." );
 return false;
 }
 else if(form.upass.value == ""){
 alert( "Enter password." );
 return false;
 }
 else if(form.uemail.value == ""){
 alert( "Enter email." );
 return false;
 }
 }
</script>
<script src="plugin/jquery/jquery.min.js"></script>