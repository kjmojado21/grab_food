<?php
function getHeight()
{
    $height = $_POST["height"];

    return $height;
}

function computeArea($height)
{
    $area = $height * $height;

    return $area;
}

function displayArea($area)
{
    echo "<div class = 'alert alert-success'><strong>Area of Square is " . $area."<strong></div>";
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <form action="" method="post">
                <label for="">Enter height</label>
                <input type="text" name="height">
                <input type="submit" name="calculate" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST["calculate"])) {

    //main PHP body
    $a = getHeight();

    echo "<div class = 'alert alert-success'><strong>".$b = computeArea($a)."<strong></div>";

    displayArea($b);
}
?>