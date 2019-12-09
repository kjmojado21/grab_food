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
    <table class="table table-hover">
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>ADDRESS</th>
        <th>COURSE</th>
        <th>YEAR LEVEL</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th></th>
        <th></th>

        <?php
            require_once 'connection.php';

            $sql = "SELECT * FROM student INNER JOIN login ON student.loginid = login.loginid";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $loginid = $row["loginid"];
                    echo "<tr>
                                <td> " .$row["studFname"]. "</td>
                                <td> " .$row["studLname"]. "</td>
                                <td> " .$row["studAddress"]. "</td>
                                <td> " .$row["studCourse"]. "</td>
                                <td> " .$row["studYearLevel"]. "</td>
                                <td> " .$row["username"]. "</td>
                                <td> " .md5($row["password"]). "</td>
                                <td> <a href='update.php?id=$loginid'>Update</a> </td>
                                <td> <a href='delete.php?id=$loginid'>Delete</a> </td>
                        </tr>";
                        // ?id ~~ variable in the address bar
                }
            }else{
                echo "No record found in the table. ";
            }
            $conn->close();
        ?>
    </table>
</body>
</html>