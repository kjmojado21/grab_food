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
        <input type="text" name="age" placeholder="Please enter your age">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        function getAge(){
            $age = $_POST["age"];

            return $age;
        }

        function checkAge($age){
            if($age < 18){
                echo "You are a minor.";
            }else{
                echo "You are an adult";
            }
        }

        $age = getAge();
        checkAge($age);
    }
?>