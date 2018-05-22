<?php


//write a logic if log in
$message="";

if (isset($_POST{"email"}))
{
    require "connect.php";
    extract($_POST);
    $query="select * from users where email='$email' and password='$password' and type!=3";
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    $count=mysqli_num_rows($result);

    if ($count==1)
    {
        //success
        $row=mysqli_fetch_assoc($result);
        extract($row);
        session_start();
        $_SESSION["names"]=$names;
        $_SESSION["type"]=$type;
        header("location:issue.php");


    }else
    {
        $message="<p class='text-danger'>Wrong email or password. <p/>";
    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body{
            width: 100%;
            height: 100%;
        }
        .container{
            height: 100vh;
            background: #6e6e6e;
            display: flex;
            align-content: center;
            align-items: center;
        }
        .glyphicon{
            font-size: 80px;
            color: #10100f;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
<p class="text-center">
    <span class="glyphicon glyphicon-user"></span>

</p>
        <p class="text-center">Sign In Here</p>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" name="email" required class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input type="password"  name="password" required class="form-control" id="pwd">
            </div>

            <button type="submit" class="btn btn-info btn-block">Login</button>
        </form>
        <?=$message?>
    </div>
</div>


</body>
</html>