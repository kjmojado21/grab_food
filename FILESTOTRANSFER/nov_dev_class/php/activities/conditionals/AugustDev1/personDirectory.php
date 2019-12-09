<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <form action=" " method="post">
        <input type="text" name="fname" placeholder = "First Name"> <br>
        <input type="text" name="lname" placeholder = "Last Name"> <br>
        <!-- <input type="text" name="country" placeholder = "Country"> <br>
        <input type="text" name="gender" placeholder = "Gender"> <br> -->

        Country <select name="country">
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Australia">Australia</option>
                    <option value="Japan">Japan</option>
                </select><br>

        Gender
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female <br>
       

        <input type="submit" name="submit" value="Submit"> <br>
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];

        //gourp form element ~~ use the name of the tag
        $country = $_POST["country"];
        $gender = $_POST["gender"];


        echo "First Name: " .$fname. "<br>";
        echo "Last Name: " .$lname. "<br>";
        echo "Country: " .$country. "<br>";
        echo "Gender: " .$gender. "<br>";
    }
?>