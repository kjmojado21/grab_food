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
        <input type="text" name="start" placeholder="Starting Value"><br>
        <input type="text" name="end" placeholder="Ending Value"><br>
        <input type="submit" name="display" value="Show Numbers">
    </form>
</body>
</html>
<?php
    if(isset($_POST["display"])){
        function getInputs(){
            $num1 = $_POST["start"];
            $num2 = $_POST["end"];

            displayNumbers($num1, $num2);
        }

        function displayNumbers($num1, $num2){
            // if($num1 <= $num2){
                $a = $num1;
                do{
                    echo " " .$a;
                    $a++;
                }while($a <= $num2);
            // }
            // else{
            //     $a = $num1;
            //     do{
            //         echo " " .$a;
            //         $a--;
            //     }while($a >= $num2);
            // }
        }
        getInputs();
    }

?>