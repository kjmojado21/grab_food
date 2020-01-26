<?php
include 'functions.php';


?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="alert alert-primary mt-5">
            <p>Welcome Back <strong>Admin!</strong>
                <a href='logout.php' class="float-right alert-link">Logout</a></p>
        </div>
        <!-- Search form -->
        <form action="" method="post">
            <label for="">Select A User</label>
            <select name="userlist" class="form-control">
                <?php
                $users = getAllUsers();

                foreach ($users as $key => $row) {
                    echo "<option value = '" . $row['customer_id'] . "'>" . $row['customer_fname'] . " " . $row['customer_lname'] . "</option>";
                }



                ?>
                
            </select>
            <br>
            <button type="submit" name='search' class="btn btn-outline-primary w-25 float-right">Search Orders</button>

        </form>


        <div class="row mt-5">

            <div class="col-md-3">
                <?php
                if (isset($_POST['search'])) {
                    $userID = $_POST['userlist'];
                    $orders = getUserOrders($userID);

                    echo "<table class = 'table table-bordered table-striped table-hover'>";
                    echo "<thead>";
                    echo "<th>Customer Name</th>";
                    echo "<th>Items</th>";
                    echo "<th>Price</th>";
                    echo "</thead>";
                    echo "<tbody>";
                    if (empty($orders)) {
                        echo "<div class = 'alert alert-warning'>No order is set</div>";
                    } else {
                        foreach ($orders as $key => $row) {
                            echo "<tr>";
                            echo "<td>" . $row['customer_fname'] . " " . $row['customer_lname'] . "</td>";
                            echo "<td>" . $row['item_name'] . "</td>";
                            echo "<td>" . $row['item_price'] . "</td>";
                            echo "<tr>";
                        }
                    }
                    echo "</tbody>";

                    echo "</table>";
                }


                ?>



            </div>
            <div class="col-md-9">
                <div class="alert alert-warning">
                    USER ORDERS
                </div>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Order ID</th>
                        <th>Customer First Name</th>
                        <th>Customer Last Name</th>
                        <th>Item Name</th>
                        <th>Total Price</th>

                    </thead>

                    <tbody>
                        <?php
                        $orders = getAllOrders();
                        foreach ($orders as $_COOKIE => $row) {
                            echo "<tr>";
                            echo "<td>" . $row['order_id'] . "</td>";
                            echo "<td>" . $row['customer_fname'] . "</td>";
                            echo "<td>" . $row['customer_lname'] . "</td>";
                            echo "<td>" . $row['item_name'] . "</td>";
                            echo "<td>" . $row['item_price'] . "</td>";




                            echo "<tr>";
                        }





                        ?>


                    </tbody>
                </table>

                <form action="" method="post">
                    <div class="alert alert-secondary">
                        Add New Item

                    </div>
                    <div class="form-group mt-3">
                        <div class="row">
                            <div class="col-md-6">

                                <input type="text" name="item_name" class="form-control" placeholder="Item Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name = 'item_price' class="form-control" placeholder="Item Price">

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-9">
                               <div class="alert alert-primary">Please Make Sure that the Details You filled here are accurate </div>

                            </div>
                            <div class="col-md-3">
                                <button type="submit" name="save_item" class="btn w-100 btn-outline-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php 
                    if(isset($_POST['save_item'])){
                        $itemName = $_POST['item_name'];
                        $itemPrice = $_POST['item_price'];

                        addItem($itemName,$itemPrice);

                    }
                
                
                ?>

            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>