<?php
include 'functions.php';
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
      Welcome back <strong> <a href = 'profile.php' class = 'alert-link'><?php echo $row['customer_fname'] ?></a>!</strong>
    </div>
    <div class="row mt-5">
      <div class="col-md-3">
        <div class="card w-75">
          <div class="card-header ">
            <h4 class="text-center">User Cart</h4>

          </div>
          <div class="card-body text-center">
            <?php 
              $cart = getUserOrders($row['customer_id']);
              
              if(empty($cart)){
                echo "Cart Empty";

              }else{
                foreach($cart as $key =>$row){
                  echo $row['item_name']." : ".$row['item_price'];
                  echo "<br>";
                }
              
              }
             
            
            ?>
           
            <br> <br>
            <a href="logout.php" class="card-link float-right">Log out</a>
            <a href="#" class="card-link float-left">Update</a>

          </div>
        </div>

      </div>
      <div class="col-md-9">
        <form method="post">
          <div class="row">
            <div class="col-md-8">
              <label for="">Order a Product</label>
              <select name="order" class="form-control" id="">
                <?php
                $items = getItems();
                foreach ($items as $key => $row) {
                  echo "<option value = ".$row['product_price'].">".$row['product_name']."</option>";
               
                }


                ?>
              </select>
              </div>

              <div class="col-md-4">
                <label for="">Quantity</label>
                  <input type="number" class="form-control" name="quantity" id="">
              </div>
            
          </div>
          <br>
          <button type="submit" name="total" class="btn btn-outline-secondary btn-block">Proceed to Check Out</button>

        </form>
                <br>
        <?php 
          if(isset($_POST['total'])){

            $product_price = $_POST['order'];
            $quantity = $_POST['quantity'];
            $total = $product_price*$quantity;

              $conn = db_connect();

              $sql = "SELECT * FROM product WHERE product_price = '$product_price'";

              $result = $conn->query($sql);
              
            if($result->num_rows == 1){
              $row = $result->fetch_assoc();

                echo "<div class = 'alert alert-success'>Product Name: ".$row['product_name']."<br>
                The Product Total is: ".$total."</div>";
                echo "<form method = 'post' action = 'final.php'>";
                      echo "<input type = 'hidden' name= 'product_name' value = '".$row['product_name']."'>";
                      echo "<input type = 'hidden' name  = 'price' value = '".$total."'>";

                      echo "<button type = 'submit' class = 'btn btn-primary float-right'>Finalize order</button>";
                echo "</form>";
                
            }

          
           

            
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