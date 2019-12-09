<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <h2 class="mt-5 mb-3">R E G I S T E R</h2>
    <form action="" method="post">
        Last name <input type="text" name="lname" class="form-control w-50"><br>
        First name <input type="text" name="fname" class="form-control w-50"><br>
        Address <input type="text" name="address" class="form-control w-50"><br>
        Course <input type="text" name="course" class="form-control w-50"><br>
        Year Level 
            <select name="year" id="" class="form-control w-50">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select> <br>
        Username <input type="text" name="uname" class="form-control w-50"><br>
        Password <input type="password" name="pass" class="form-control w-50"><br>
        <input type="submit" name="save" value="Save" class="btn btn-primary w-50">
    </form>
</body>
</html>
<?php
    if(isset($_POST["save"])){
        function getValues(){
            $lname = $_POST["lname"];
            $fname = $_POST["fname"];
            $address = $_POST["address"];
            $course = $_POST["course"];
            $year = $_POST["year"];
            $uname = $_POST["uname"];
            $pass = md5($_POST["pass"]);

            insertIntoStudentTable($lname, $fname, $address, $course, $year, $uname, $pass);
        }

        function insertIntoStudentTable($lname, $fname, $address, $course, $year, $uname, $pass){
            require_once 'connection.php';

            $sql = "INSERT INTO login(username, password) VALUES('$uname', '$pass')";

            if($conn->query($sql)){

                $lastLoginID = $conn->insert_id;

                $sql2 = "INSERT INTO student(studFname, studLname, studAddress, studCourse, studYearLevel, loginid) VALUES ('$fname', '$lname', '$address', '$course', '$year', '$lastLoginID')";

                if($conn->query($sql2)){
                    echo "Record inserted successfully";
                }else{
                    echo "Error in inserting the record to the STUDENT TABLE. " .$conn->error;
                }
            }else{
                echo "Error in inserting to the LOGIN TABLE." .$conn->error;
            }

            $conn->close();

        }

        getValues();
    }
?>






















