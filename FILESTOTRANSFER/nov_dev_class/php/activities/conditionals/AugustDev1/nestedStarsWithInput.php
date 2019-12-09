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
        <input type="text" name="rows" placeholder="Enter number of rows"><br>
        <input type="text" name="cols" placeholder="Enter the number of stars to print per row"><br>
        <input type="submit" name="display" value = "Display">
    </form>
</body>
</html>
<?php
    if(isset($_POST["display"])){
        function getInputs(){
            $rows = $_POST["rows"];
            $cols = $_POST["cols"];

            displayStars($rows, $cols);
        }

        function displayStars($rows, $cols){
            for($a = 1; $a <= $rows; $a++){
                for($b = 1; $b <= $cols; $b++){
                    echo "* ";
                }

                echo "<br>";
            }
        }

        getInputs();
    }
?>