<?php
include 'functions/functions.php';

$current = $_SESSION['user_id'];

$currentUser = getOneUser($current);






?>

<!doctype html>
<html lang="en">




<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        img {
            height: 250px;
            width: 300px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php

        echo "Hello " . $currentUser['username'];

        ?>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Username</th>
                <th>Password</th>
                <th>Image</th>
                <th colspan="3" class='text-center'>Options</th>

            </thead>
            <tbody>
                <?php


                $user = displayUsers();

                // print_r($user);
                foreach ($user as $key => $row) {
                    echo "<tr>";
                    $userID = $row['id'];
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";

                    if(!empty($row['image'])){
                        $image = $row['image'];     

                        echo "<td><img src = 'uploads/$image' class = 'img-thumbnail'></td>";

                    }
                    else{
                        echo "<td><div class = 'alert alert-warning'>Upload a photo</div></td>";
                    }

                    echo "<td><a href = 'edit.php?user_id=$userID' role = 'button' class = 'btn btn-outline-warning'>Edit User</a></td>";
                    echo "<td><a href = 'delete.php?user_id=$userID' role = 'button' class = 'btn btn-outline-danger'>Delete User</a></td>";
                    echo "<td><a href = 'upload_photo.php?user_id=$userID' role = 'button' class = 'btn btn-outline-danger'>Upload User Photo</a></td>";

                    echo "</tr>";
                }






                ?>
            </tbody>
        </table>
        <a href="add.php" role="button" class=" btn btn-block btn-outline-secondary">Add User</a>
        <a href="logout.php" role="button" class=" btn btn-block btn-outline-danger">Logout</a>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>