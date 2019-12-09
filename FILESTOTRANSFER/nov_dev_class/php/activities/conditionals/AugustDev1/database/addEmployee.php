<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
    <h2 class="mt-5 mb-3">R E G I S T E R</h2>
    <form action="" method="post">
        Name <input type="text" name="name" class="form-control w-50"><br>
        Address <input type="text" name="address" class="form-control w-50"><br>
        Gender
            <input type="radio" name="gender" value="M"> Male
            <input type="radio" name="gender" value="F"> Female<br>
        Birthdate <input type="date" name="bday" class="form-control w-50"><br>
        Username <input type="text" name="uname" class="form-control w-50"><br>
        Password <input type="text" name="pass" class="form-control w-50"><br>

        <input type="submit" name="save" value="Save" class="btn btn-primary w-50">
    </form>
</body>
</html>
<?php
    if(isset($_POST["save"])){
        function getValues(){
            $name = $_POST["name"];
            $address = $_POST["address"];
            $gender = $_POST["gender"];
            $bday = $_POST["bday"];
            $uname = $_POST["uname"];
            $pass = $_POST["pass"];

            insertIntoStudentTable($name, $address, $gender, $bday, $uname, $pass);
        }

        function insertIntoStudentTable($name, $address, $gender, $bday, $uname, $pass){
            require_once 'connection.php';

            $sql = "INSERT INTO login(username, password) VALUES('$uname', '$pass')";

            if($conn->query($sql)){

                $lastLoginID = $conn->insert_id;

                $sql2 = "INSERT INTO employee(empName, empAddress, empGender, empBday, loginid) 
                                    VALUES ('$name', '$address', '$gender', '$bday', '$lastLoginID')";
                if($conn->query($sql2) == TRUE){
                    echo "Record Inserted Successfully";
                }else{
                    echo "Error in inserting the record to the EMPLOYEE TABLE." .$conn->error;
                }
            }else{
                echo "Error in inserting to the LOGIN TABLE." .$conn->error;
            }

            $conn->close();
        }

        getValues();
    }
?>