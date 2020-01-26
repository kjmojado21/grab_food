<?php

include 'functions.php';








?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="header mt-5">
            <h2 class="display-2 text-center">
                Register
            </h2>
        </div>
        <form method="post">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="form-group mt-5">
                        <label for="" class="lead">Enter First Name *</label>
                        <input type="text" name="fname" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mt-5">
                        <label for="" class="lead">Enter Last Name *</label>
                        <input type="text" name="lname" class="form-control " required>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="" class="lead">Enter Username *</label>
                        <input type="text" name="uname" class="form-control" required>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="" class="lead">Enter Password *</label>
                        <input type="password" name="pword" class="form-control" required>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" name="register" class="btn btn-outline-success btn-block">Register</button>
                </div>
            </div>



        </form>
        <br> <br>
        <div class="row">
            <div class="col-md-9">
                <?php
                if (isset($_POST['register'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $uname = $_POST['uname'];
                    $pword = $_POST['pword'];

                    add_user($fname, $lname, $uname, $pword);
                } else {
                    echo "<div class = 'alert alert-warning'>We Recommend you to take note of the your user details before submitting the registration. <strong>Thank You</strong></div>";
                 }



                ?>

            </div>
            <div class="col-md-3">
                <div class="alert alert-secondary text-center"><a href="login.php" class="alert-link">Login Here</a></div>

            </div>

        </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>