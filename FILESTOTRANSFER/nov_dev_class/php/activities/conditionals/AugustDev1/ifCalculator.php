<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="num1" placeholder="First number"><br>
		<input type="text" name="num2" placeholder="Second number"><br>
		Operators
			<input type="radio" name="operators" value="add"> +
			<input type="radio" name="operators" value="sub"> -
			<input type="radio" name="operators" value="prod"> *
			<input type="radio" name="operators" value="quo"> /
			<input type="radio" name="operators" value="rem"> % <br>

		<input type="submit" name="calculate" value="Calculate">
	</form>
</body>
</html>
<?php
	if(isset($_POST["calculate"])){
		function getValues(){
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			$op = $_POST["operators"];

			$ans = calculateAnswer($num1, $num2, $op);
			displayAns($ans);
		}

		function calculateAnswer($num1, $num2, $op){
			if($op == "add"){
				return $num1 + $num2;
			}else if($op == "sub"){
				return $num1 - $num2;
			}else if($op == "prod"){
				return $num1 * $num2;
			}else if($op == "quo"){
				return $num1 / $num2;
			}else if($op == "rem"){
				return $num1 % $num2;
			}
		}

		function displayAns($ans){
			echo "Result is " .$ans;
		}

		getValues();
	}
?>