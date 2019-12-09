<?php 

function connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'join';

    $conn = new mysqli($servername,$username,$password,$db_name);

    if($conn->connect_error){
        die('connection faied'.$conn->connect_error);
    }else{
        return $conn;
    }
}










?>