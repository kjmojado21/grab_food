<?php 
include 'connection.php';
session_start();

function add_user($uname,$pword){
    // variable holding the database coect
    $conn = database_connect();
    // query
    $sql = "INSERT INTO users(username,password)VALUES('$uname','$pword')";
    //a string variable that will execute a query 
    $result = $conn->query($sql);
// validation if adding is not successfull
    if($result == false){
        die('cannot add user'.$conn->connect_error);

    }else{

        // echo "<div class = 'alert alert-success'>User added successfully</div>";
        
        header('location:userlist.php');
    }



}
function displayUsers(){
    // database variable
    $conn = database_connect();
    // query 
    $sql ="SELECT * FROM users";
    // a variable that executes your query
    $result = $conn->query($sql);

    // if there are data inside result 
    if($result->num_rows>0){
        // initialization of an array variable
        $row =  array();
        // a loop breaking down the database table
            while($rows  = $result->fetch_assoc()){
                // passing the data from the database to the array $row
                $row[] = $rows;

            }
            // returning row to the function itself
        return $row;
    }else{
        // if there are no data inside $result then he wil return false
        return false;
    }

}
function delete_user($id){
    $conn = database_connect();
    $sql = "DELETE FROM users WHERE id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        die('cannot delete user'.$conn->connect_error);
    }else{
        header('location: userlist.php');
    }

}
function getOneUser($id){
    $conn = database_connect();
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        die('cannot retrieve user'.$conn->connect_error);

    }else{
        return $result->fetch_assoc();
    }

}

function editUser($id,$username,$password){
    $conn = database_connect();
    $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        die('cannot edit user'.$conn->connect_error);
    }else{
        header('location: userlist.php');
    }
}

function login($username,$password){
    $conn = database_connect();
    $sql =  "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows==1){
        $row = $result->fetch_assoc();

        $_SESSION['user_id'] = $row['id'];

        return TRUE;
    }else{
        return FALSE;
    }


}
function upload_photo($userID,$name){
    $conn = database_connect();

    $name = $_FILES['picture']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES['picture']['name']);
    $sql = "UPDATE users SET image = '$name' WHERE id = '$userID'";
    $result = $conn->query($sql);

    if($result == false){
        die('unable to upload photo'.$conn->connect_error);
    }else{
        move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
        header('location:userlist.php');
    }

    
}













?>