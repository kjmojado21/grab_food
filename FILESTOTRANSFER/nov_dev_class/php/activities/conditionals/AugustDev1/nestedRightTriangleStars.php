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
        <input type="text" name="rows" placeholder="Enter number of rows">
        <input type="submit" name="display" value="Display">
    </form>
</body>
</html>
<?php
    if(isset($_POST["display"])){
        function getRows(){
            $a = $_POST["rows"];
            return $a;
        }

        function displayRightTriangle($rows){
            for($outer = 1; $outer <= $rows; $outer++){
                for($inner = 1; $inner <= $outer; $inner++){
                    echo "* ";
                }
                echo "<br>";
            }
        }

        $rows = getRows();
        displayRightTriangle($rows);
    }
?>