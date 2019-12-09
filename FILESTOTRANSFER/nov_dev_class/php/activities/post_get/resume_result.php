<?php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$address = $_POST['address'];
$number = $_POST['phone_number'];
$email = $_POST['email'];
$citizenship = $_POST['citizenship'];
$country = $_POST['country'];
$exp = $_POST['exp'];
$education = $_POST['education'];
$skills = $_POST['skills'];



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
    <style>
    img{
        height:300px;
        width: 150px;
    }
    
    </style>
  </head>
  <body>
    <div class="card w-50 mx-auto">
        <div class="card-header">
        <img src="pic.jpg" class="card-img-top rounded-circle" alt="">

        </div>
        <div class="card-body">
            <?php 
            echo "Name: ";
            echo "<div class= 'alert alert-success'>";
            echo $fname;
            echo "</div>";

            echo "Last Name: ";
             echo "<div class= 'alert alert-warning'>".$lname."</div>";
            echo "Age: ";
            echo "<div class= 'alert alert-danger'>".$age."</div>";
            echo "Address: ";
            echo "<div class= 'alert alert-info'>".$address."</div>";
            echo "Number: ";
            echo "<div class= 'alert alert-primary'>".$number."</div>";
            echo "Email: ";
            echo "<div class= 'alert alert-secondary'>".$email."</div>";
            echo "Citizenship: ";
            echo "<div class= 'alert alert-success'>".$citizenship."</div>";
            echo "Country: ";
            echo "<div class= 'alert alert-dark'>".$country."</div>";
            echo "Experiences: ";
            echo "<div class= 'alert alert-warning'>".$exp."</div>";
            echo "Education: ";
            echo "<div class= 'alert alert-danger'>".$education."</div>";
            echo "skills: ";
            echo "<div class= 'alert alert-info'>".$skills."</div>";




            
            
            
            
            
            
            ?>


        </div>
    </div>  
    
  </body>
</html>