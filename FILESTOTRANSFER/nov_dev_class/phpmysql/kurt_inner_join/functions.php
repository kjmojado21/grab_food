<?php 
include 'db_connect.php';

function insertIntoUserAndLoginTable($firstName,$lastName,$username,$password){

    $conn = connect();

    $insertIntoLoginTable = "INSERT INTO login(username,password)VALUES('$username','$password')";

    $logInResult = $conn->query($insertIntoLoginTable);

    if($logInResult == true){
        $loginID = $conn->insert_id;

            $insertIntoUsers  = "INSERT INTO users (first_name,last_name,login_id)VALUES('$firstName','$lastName','$loginID')";

            $userResult  = $conn->query($insertIntoUsers);

            if($userResult == true){
                header('location: UI.php');
            }else{
                echo "error adding in users table";
            }

    }else{
        echo "error adding in login table";
    }


}


function displayBothTable(){
    $conn = connect();
    $sql = "SELECT * FROM login INNER JOIN users ON login.id = users.login_id";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while ($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }return $row;
    }else{
        return $msg = "ERROR BRUH!";
    }
}



?>