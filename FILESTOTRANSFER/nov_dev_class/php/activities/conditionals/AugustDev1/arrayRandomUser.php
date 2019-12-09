<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
		How many random numbers you want to generate? <br />
		<input type="text" name="len"><br />
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $len = $_POST["len"];

       for($a = 0; $a < $len; $a++){
           $num1[$a] = rand(1, 100);
           $num2[$a] = rand(1, 100);
       }

      $total = 0;
      for($a = 0; $a < $len; $a++){
        $total += $num1[$a];
      }
      echo "The sum of the elements in the first array is " .$total. "<br>";

      $total = 0;
      for($a = 0; $a < $len; $a++){
        $total += $num2[$a];
      }
      echo "The sum of the elements in the second array is " .$total. "<br>";

      echo "<br>Adding the elements of the same index...<br>";
      for($a = 0; $a < $len; $a++){
        $sum = $num1[$a] + $num2[$a];
        echo "Index " .$a. " Sum is " .$sum. "<br>";

        $sum = 0;
      }
    }
?>