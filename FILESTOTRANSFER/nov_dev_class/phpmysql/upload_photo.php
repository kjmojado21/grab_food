<?php 
include 'functions/functions.php';

$userID = $_GET['user_id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="picture" id="">
        <button type="submit" name="upload" class="btn btn-primary">upload</button>
        </form>

        <?php 
        if(isset($_POST['upload'])){
            $name = $_FILES['picture']['name'];



            upload_photo($userID,$name);
        }
        
        
        ?>
    
</body>
</html>