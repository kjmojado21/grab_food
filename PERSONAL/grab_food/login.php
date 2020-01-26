<?php
include 'functions.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<link rel="stylesheet" href="login.css">

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="post">
                <input type="text" id="login" class="fadeIn second" name="uname" placeholder="Username" autofocus>
                <input type="password" id="password" class="fadeIn third" name="pword" placeholder="Password">
                <input type="submit" name="login" class="fadeIn fourth" value="Log In">
            </form>
            <?php

            if (isset($_POST['login'])) {
                $uname = $_POST['uname'];
                $pword = $_POST['pword'];


                if ($uname == 'admin' and $pword == 'admin') {
                    header('location:admin.php');
                } else {
                        $id = login($uname, $pword);

                        if ($id == true) {
                            header('location:index.php');
                        } else {
                            echo "<div class ='alert alert-danger'>User Doesn't Exist!</div>";
                        }
                }
            }






            ?>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="register.php">Register</a>
            </div>

        </div>
    </div>

</body>

</html>