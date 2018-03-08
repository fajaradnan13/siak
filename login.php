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
            <h1 class="text-center login-title">Sign in</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="" method="post" name="login">
                <input type="text" name="emailusername" class="form-control" placeholder="Username" required autofocus required="" />
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
                <button class="btn btn-lg btn-primary btn-block" onclick="return(submitlogin());" type="submit" name="submit" value="Login">
                    Login</button>
                </form>
            </div>
            <a href="registration.php" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>


<?php
    session_start();
    include_once 'class_user.php';
    $user = new user();

    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $login = $user->check_login($emailusername, $password);
        if ($login) {
            // Registration Success
           header("location:home.php");
        } else {
            // Registration Failed
            echo 'Wrong username or password';
        }
    }
?>

<script type="text/javascript" language="javascript">

            function submitlogin() {
                var form = document.login;
                if(form.emailusername.value == ""){
                    alert( "Enter email or username." );
                    return false;
                }
                else if(form.password.value == ""){
                    alert( "Enter password." );
                    return false;
                }
            }
</script>

</body>
</html>


