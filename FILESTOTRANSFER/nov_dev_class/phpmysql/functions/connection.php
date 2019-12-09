<?php 

function database_connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'nov_crud';


    $conn =  new mysqli($servername,$username,$password,$db_name);

    if($conn->connect_error){
        die('cannot find database'.$conn->connect_error);

    }else{
        // echo "connection is successful";
        return $conn;

    }
}










?>