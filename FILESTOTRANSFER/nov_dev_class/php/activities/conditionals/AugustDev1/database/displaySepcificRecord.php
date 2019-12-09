<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Choose the name of the student you want to display: <br>
    <form action="" method="post">
        <!-- populate dropdown list from table/database -->
        <select name="id" id="">
            <?php
                require_once 'connection.php';

                $sql = "SELECT * FROM student";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $val = $row["loginid"];
                        $fname = $row["studFname"];
                        $lname = $row["studLname"];

                        echo "<option value='" .$val. "'>" .$lname. " " .$fname. "</option>";
                    }
                }
            ?>
        </select>
        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>
<?php
    if(isset($_POST["search"])){
        function getID(){
            $loginid = $_POST["id"];

            queryDatabase($loginid);
        }

        function queryDatabase($loginid){
            include 'connection.php';

            $sql = "SELECT * FROM student WHERE loginid = '$loginid'";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                echo "<table>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>COURSE</th>
                        <th>YEAR LEVEL</th>
                    ";
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td> " .$row["studFname"]. "</td>
                            <td> " .$row["studLname"]. "</td>
                            <td> " .$row["studCourse"]. "</td>
                            <td> " .$row["studYearLevel"]. "</td>
                        </tr>";
                }
                echo "</table>";
            }else{
                echo "Student not found.";
            }

            $conn->close();
        }

        getID();
    }
?>