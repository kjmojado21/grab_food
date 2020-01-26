<?php 
include 'functions.php';



$product_name = $_POST['product_name'];


$price = $_POST['price'];

$current = $_SESSION['login_id'];

$row = getOneUser($current);






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
    <div class="alert alert-success mt-5">
      Welcome back <strong> <?php echo $row['customer_fname'] ?>!</strong>
    </div>
    <div class="row mt-5">
      <div class="col-md-3">
        <div class="card w-75">
          <div class="card-header ">
            <h4 class="text-center">Lorem ipsum dolor s</h4>

          </div>
          <div class="card-body text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At delectus sit temporibus blanditiis optio. Assumenda vero error atque, officiis hic consequatur qui, ea doloribus tempora quasi quidem, eius explicabo id.
            <br> <br>
            <a href="logout.php" class="card-link float-right">Log out</a>
            <a href="#" class="card-link float-left">Update</a>

          </div>
        </div>

      </div>
      <div class="col-md-9">
          <h2>Receipt</h2>
          <br>
          <form method="post">
          <table class = 'table table-bordered table-striped'>
              <thead>
                  <th>Customer Name</th>
                  <th>Product Name</th>
                  <th>Total Price</th>
              </thead>
              <tbody>
                  <tr>
                        <td><?php 
                            echo $row['customer_fname'];
                            echo "<input type = 'hidden' name = 'customer_name' value = '".$row['customer_fname']."'>";

                            ?>

                                   
                        </td>
                        <td>
                            <?php 
                            echo $product_name;
                            echo "<input type = 'hidden' name = 'product_name' value = '".$product_name."'>";
                        
                            ?>
                        </td>
                        <td><?php 
                        
                        
                        echo $price;
                        echo "<input type = 'hidden' name = 'price' value = '$price'>";
                        
                        
                        
                        ?></td>


                  </tr>

              </tbody>

          </table>
          <button type="submit" name="save_order"class="btn btn-primary float-right">Submit Order</button>
          </form>
          <?php
          if(isset($_POST['save_order'])){
              $customer_id = $_SESSION['login_id'];
              $customer_name = $_POST['customer_name'];
              $customer_order = $_POST['product_name'];
              $price = $_POST['price'];

              set_order($customer_order,$price,$customer_id);

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