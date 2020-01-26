<?php 
include 'db_connect.php';

session_start();

function add_user($fname,$lname,$uname,$pword){
    $conn = db_connect();

    $sql = "insert into login(username,password)VALUES('$uname','$pword')";
    $insertIntoLogin = $conn->query($sql);

    if($insertIntoLogin==true){
        $login_id = $conn->insert_id;
            $query = "INSERT INTO customers(customer_fname,customer_lname,login_id)VALUES('$fname','$lname','$login_id') ";

            $insertIntoCustomer = $conn->query($query);
                if($insertIntoCustomer==false){
                    echo "fail to add into login table";
                }else{
                    echo "<div class = 'alert alert-success'>added successfully</div>";
                }
    }else{
        echo "error adding into login table";
    }

}

function login($uname,$pword){
    $conn = db_connect();
    $sql = "SELECT * FROM login INNER JOIN customers ON login.login_id = customers.login_id WHERE login.username = '$uname' AND login.password = '$pword'";

    $result = $conn->query($sql);

    if($result->num_rows==1){
        $row = $result->fetch_assoc();
            $_SESSION['login_id'] = $row['login_id'];

            return TRUE;
    }else{
        return FALSE;
    }



}




function getOneUser($id){
    $conn = db_connect();
    $sql = "SELECT * FROM customers INNER JOIN login ON customers.customer_id = login.login_id WHERE customers.customer_id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        die('cannot retrieve the data'.$conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }
}

function getItems(){
    $conn = db_connect();
    $sql = "SELECT * FROM product";

    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }return $row;
    }else{
        return false;
    }

}

function set_order($order_name,$order_price,$id){
    $conn = db_connect();
    $sql = "INSERT INTO orders(item_name,item_price,customer_id)VALUES('$order_name','$order_price',$id)";
    $result = $conn->query($sql);
    if($result == false){
        echo "<div class = 'alert alert-warning'>cannot place order</div>";
    }else{
        echo "<div class = 'alert alert-danger'>Order Successful
            
                <a href = '#' class = 'alert-link float-right'>My Orders</a>
        <a></div>";
        header('location: index.php');
    }


}
function getUserOrders($id){
    $conn = db_connect();
    $sql = "SELECT * FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id WHERE customers.customer_id='$id'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[]= $rows;
        }return $row;
    }else{
        return false;
    }
}



function getAllOrders(){
    $conn = db_connect();
    $sql = "SELECT * FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id ORDER BY orders.order_id DESC";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $rows = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }return $row;
    }else{
        return FALSE;
    }
}


function searchUserOrders($input){
    $conn = db_connect();
    $sql = "SELECT * FROM orders INNER JOIN customers ON customers.customer_id = orders.customer_id WHERE customers.customer_lname = '$input'
    ";

    $result = $conn->query($sql);


    if($result->num_rows>0){
        $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }return $row;
    }else{
        return false;

}
}

function getAllUsers(){
    $conn = db_connect();
    $sql = "SELECT * FROM customers";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }return $row;
    }else{
        return false;
    }
}

function addItem($name,$price){
    $conn = db_connect();
    $sql = "INSERT INTO product(product_name,product_price)VALUES('$name','$price')";
    $result = $conn->query($sql);

    if($result == false){
        echo "error adding item";
    }else{
        echo "<div class = 'alert alert-success'>Item Added Successfully</div>";
    }
}


?> 