<?php
    require_once 'connection.php';

    $loginid = $_GET["id"];

    $sql = "SELECT * FROM student INNER JOIN login ON student.loginid = login.loginid
            WHERE student.loginid = '$loginid'";
        
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $fname = $row["studFname"];
            $lname = $row["studLname"];
            $address = $row["studAddress"];
            $course = $row["studCourse"];
            $year = $row["studYearLevel"];
            $uname = $row["username"];
            $pass = $row["password"];

            echo " <form method='post' action=''>
                        First Name <input type='text' name='fname' value='$fname'><br>
                        Last Name <input type='text' name='lname' value='$lname'><br>
                        Address <input type='text' name='address' value='$address'><br>
                        Course <input type='text' name='course' value='$course'><br>
                        Year Level <input type='text' name='year' value='$year'><br>
                        Username <input type='text' name='uname' value='$uname'><br>
                        Password <input type='text' name='pass' value='$pass'><br>

                        <input type='hidden' name='loginid' value='$loginid'><br>
                        <input type='submit' name='update' value='Update'>
                </form>";
        }

        if(isset($_POST["update"])){
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $address = $_POST["address"];
            $course = $_POST["course"];
            $year = $_POST["year"];
            $uname = $_POST["uname"];
            $pass = $_POST["pass"];
            $loginid = $_POST["loginid"];

            $sql = "UPDATE student INNER JOIN login ON student.loginid = login.loginid 
                        SET student.studFname = '$fname',
                            student.studLname = '$lname',
                            student.studAddress = '$address',
                            student.studCourse = '$course',
                            student.studYearLevel = '$year',
                            login.username = '$uname',
                            login.password = '$pass' WHERE student.loginid = '$loginid'";
            
            if($conn->query($sql) == TRUE){
                header("Location: displayAllUsingTable.php");
            }else{
                echo "Error in updating. " .$conn->error;
            }
            $conn->close();
        }
    }
?>