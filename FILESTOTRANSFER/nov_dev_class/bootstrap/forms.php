<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <form action="" method="get">
            <div class="form-group mt-5">
                <label for="">Enter Username</label>
                <input type="text" name="username" class="form-control">
                <label for="">Enter Password</label>
                <input type="password" name="password" class="form-control">

                <label for="">User Roles</label>
                <select name="roles" class="form-control" id="">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>                      
                        <option value="super_admin">Super Admin</option>
                </select>

                <label for="">Multiple Select</label>
                <select multiple name="multiple" class="form-control" id="">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="super_admin">Super Admin</option>
                </select>
            </div>
        </form>
    </div>

</body>

</html>