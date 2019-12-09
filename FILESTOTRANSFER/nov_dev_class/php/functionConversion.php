<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="inch" placeholder="Inches">
		<input type="submit" name="submit" value="Calculate">
	</form>
</body>
</html>
<?php
	if(isset($_POST["submit"])){
		function getInches(){
			$inches = $_POST["inch"];

			return $inches;
		}

		function funcCentimeters($inches){
			$cm = $inches * 2.54;

			//return $inches * 2.54;
			return $cm;
		}

		function funcMeters($inches){
			$mtrs = $inches * 0.0254;

			// return $inches * 0.0254;
			return $mtrs;
		}

		function funcFeet($inches){
			$ft = $inches * 0833333333;

			// return $inches * 0833333333;
			return $ft;
		}

		function displayConvertedValues( $cm, $mtr, $ft){
			echo "
					Centimeters: " .$cm. "<br>
					Meters: " .$mtr. "<br>
					Feet: " .$ft. "<br>
				";
		}

		$inches = getInches();
		$cm = funcCentimeters($inches);
		$mtr = funcMeters($inches);
		$ft = funcFeet($inches);

		displayConvertedValues($cm, $mtr, $ft);
	}

?>