<?php 

function checkNumber($num){
    if($num == 0){
        echo "NEUTRAL";
    }else if($num > 0){
        echo "POSITIVE";
    }else{
        echo "NEGATIVE";
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
        
            $num = $_POST["num"];

        checkNumber($num);
    }
?>