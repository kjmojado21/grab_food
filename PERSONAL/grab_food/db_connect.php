<?php 


function db_connect(){
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'grab_food';

    $conn = new mysqli($servername,$username,$password,$db);

    if($conn->connect_error){
        die($conn->connect_error);
    }else{
        return $conn;
    }
}






?>