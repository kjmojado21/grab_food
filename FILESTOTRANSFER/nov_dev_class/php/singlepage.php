<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card w-50 mx-auto mt-5">
            <div class="card-header">
                <h2 class="display-4">
                    Calculator
                </h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Enter First Number</label>
                        <input type="number" autofocus name="num1" class="form-control" required>
                        <label for="">Enter Second Number</label>
                        <input type="number" name="num2" class="form-control" required> <br>
                        <button type="submit" name="calculate" class="btn btn-outline-primary btn-block">Submit</button>
                    </div>
                </form>

            </div>
        </div>
        <?php 
        if(isset($_POST['calculate'])){
            $num1 = $_POST['num1'] ;
            $num2 = $_POST['num2'] ;
     
           
                echo $num1+$num2;

        }       
        
        ?>
    </div>

</body>

</html>