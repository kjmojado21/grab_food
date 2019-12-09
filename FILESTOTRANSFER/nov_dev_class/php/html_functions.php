<?php 

function display_user($x,$c){

    echo "Your Name is: ".$x;
    echo "<br>";
    echo "Your Last name is: ".$c;

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
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="">Enter First Name</label>
                <input type="text" name="fname" class="form-control">
                <label for="">Enter Last Name</label>
                <input type="text" class="form-control" name="lname"> 
                <br>
                <button type="submit" name="submit" class="btn btn-outline-secondary btn-block">Submit</button>
            </div>
        </form>

        <?php 

        if(isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];


            display_user($fname,$lname);
        }    
        ?>
    </div>
</body>
</html>