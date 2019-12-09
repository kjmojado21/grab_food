<?php
const BR = "<br>";

function user_Details($firstname, $lastname, $username, $password, $email)
{
    echo "My first name is " . $firstname;
    echo BR;
    echo "My last Name is " . $lastname;
    echo  BR;
    echo "My Username is " . $username . " and Password is " . $password;
    echo  BR;
    echo "You can Email me at " . $email;
}

function addDetails()
{
    echo BR;
    echo "<form method = 'post'>";
    echo "<div class ='form-group'>";
    echo "<label for = ''>Additional Details about you </div>";
    echo "<input type ='text' name ='additional_details' class ='form-control'>";
    echo "</div>";
    echo "<button type = 'submit' class ='btn btn-outline-success mb-5' name = 'additional_info'>ADD DETAILS</button>";
    echo "</form>";

    $info = $_POST['additional_details'];
    echo "<div class = 'alert alert-danger'><strong>".$info."<strong></div>";
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="card w-75 mx-auto">
        <div class="card-header">
            <h1 class="display-2">User Details using functions</h1>
        </div>

        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" name="fname" class="form-control">
                    <label for="">Last Name</label>
                    <input type="text" name="lname" class="form-control">
                    <label for="">Username</label>
                    <input type="text" name="uname" class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control">
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
                    <button type="submit" name="additional_info" class="btn btn-primary btn-md">Add Info</button>
                </div>
            </form>

            <?php
            if(isset($_POST["submit"])){
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $uname = $_POST["uname"];
                $password = $_POST["password"];
                $email = $_POST["email"];

               user_Details($fname,$lname,$uname,$password,$email);
            
            }
            ?>

            <?php
            if(isset($_POST["additional_info"])){
              addDetails();
            }
            ?>
        </div>
    </div>
    
</body>
</html>