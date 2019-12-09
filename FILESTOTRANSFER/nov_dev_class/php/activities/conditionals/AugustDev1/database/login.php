<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
		<input type="text" name="uname" placeholder="Username"><br>
		<input type="password" name="pass" placeholder="Password"><br>
		<input type="submit" name="login" value="Log-in">
	</form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        function getValues(){
            $uname = $_POST["uname"];
            $pass = md5($_POST["pass"]);

            checkUserLogIn($uname, $pass);
        }

        function checkUserLogIn($uname, $pass){
            require_once 'connection.php';

            $sql = "SELECT * FROM login WHERE username = '$uname' AND password = '$pass'";
            $result= $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    //$_SESSION ~~ save the loginid into the computer
                    // loginid ~~ the name of the variable in the computer
                    $_SESSION['loginid'] = $row["loginid"];

                    if($row["status"] == 'A'){
                        //REDIRECTION ~~ transfer automatic to the website indicated
                        header("Location: admin.php");
                    }else{
                        header("Location: user.php");
                    }
                }
            }else{
                echo "Username and password error.";
            }
        }

        getValues();
    }
?>