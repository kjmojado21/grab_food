<?php
    require_once 'connection.php';

    //getting the id from the browser. value is stored in the variable id
    $loginid = $_GET["id"];

    $sql = "DELETE student, login FROM student INNER JOIN login 
            ON student.loginid = login.loginid
            WHERE student.loginid = '$loginid'";
    
    if($conn->query($sql)){
        //automatic redirection
        header("Location: displayAllUsingTable.php");
    }else{
        echo "Error in deleting the record." .$conn->error;
    }

    $conn->close();
?>