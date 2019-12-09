<?php
    require_once 'connection.php';

    $sql = "SELECT * FROM student";

    $result = $conn->query($sql);
    //query ~~ execute or run... go button
    //$result will receive a mnulti dimensional associative array or aka MATRIX

    print_r($result);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            //$result->fetch_assoc() breaks downs the matrix into simple, single
            //array and save it to $row
            echo "First Name: " .$row["studFname"]. "<br>";
            echo "Last Name: " .$row["studLname"]. "<br>";
            echo "Address: " .$row["studAddress"]. "<br>";
            echo "Course: " .$row["studCourse"]. "<br>";
            echo "Year Level: " .$row["studYearLevel"]. "<br>";
        }
    }else{
        echo "No recod found in table";
    }

    $conn->close();
?>