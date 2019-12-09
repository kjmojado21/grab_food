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
      <div class="container">
            <form action="" method="post">
                <div class="form-group w-50 mx-auto">
                    <label for="">First Name</label>
                    <input type="text" name = 'fname' class="form-control">
                    <label for="">Last Name</label>
                    <input type="text" name = 'lname' class="form-control">
                    <label for="">Username</label>
                    <input type="text" name = 'uname' class="form-control">
                    <label for="">Password</label>
                    <input type="password" name = 'pword' class="form-control">
                    <br>
                    <button type="submit" name="save" class="btn btn-primary">Save</button>

                </div>



            </form>

            <?php 
                include 'functions.php';


                if(isset($_POST['save'])){
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $uname = $_POST['uname'];
                    $pword = $_POST['pword'];

                    insertIntoUserAndLoginTable($fname,$lname,$uname,$pword);


                }
            
            
            
            
            
            ?>

            <table class = 'table table-striped table-bordered table-hover'>
                <thead>
                    <th>username</th>
                    <th>password</th>
                    <th>first name</th>
                    <th>last name</th>




                </thead>

                <tbody>
                        <?php 
                            $rows = displayBothTable();

                            foreach($rows as $key => $row){
                                echo "<tr>";
                                    echo "<td>".$row['username']."</td>";
                                    echo "<td>".$row['password']."</td>";
                                    echo "<td>".$row['first_name']."</td>";
                                    echo "<td>".$row['last_name']."</td>";





                                echo "</tr>";
                            }
                        
                        
                        
                        
                        
                        ?>
                </tbody>



            </table>
      </div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>