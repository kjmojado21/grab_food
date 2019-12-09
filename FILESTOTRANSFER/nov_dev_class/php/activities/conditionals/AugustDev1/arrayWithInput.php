<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<form method="post" action="">
		How many elements you want to enter into the array? <br />
		<input type="text" name="len"><br />
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
    if (isset($_POST['submit'])){
        $arrLen = $_POST['len'];

        echo "<form method='post' action=''>";
            for($a = 0; $a < $arrLen; $a++){
                echo "Enter a number 
                        <input type='text' name='num[]'><br />";
            }
            echo "<input type='hidden' name='len' value='$arrLen'> <br>";
            
            echo "<input type='submit' name='save' value='Save'>";
        echo "</form>";
    }

    if (isset($_POST['save'])){
        $num = $_POST["num"];
        $arrLen = $_POST["len"];
 
        print_r($num);

        echo "<br>";
        for($a = 0; $a < $arrLen; $a++){
            echo " " .$num[$a];
        }
    }
?>