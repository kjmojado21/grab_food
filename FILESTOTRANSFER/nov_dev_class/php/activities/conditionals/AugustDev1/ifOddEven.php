<?php 
function checkNumber($num){
    if($num % 2 == 0){
        echo "The number entered is EVEN";
    }else{
        echo "The number entered is ODD";
    }
}




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
    <form action="" method="post">
        <input type="text" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="Check number">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $num = $_POST['num'];

      
        checkNumber($num);
    }
?>