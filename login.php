<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "loginyt") or die("Con Error");



if (isset($_POST['btn'])) {
    $un = $_POST['uname'];
    $ps = $_POST['pass'];

    $sql = "SELECT * FROM user WHERE uname = '$un'";
    $q = mysqli_query($con, $sql);
    $num = mysqli_num_rows($q);

    if ($num == 1) {

        $data = mysqli_fetch_assoc($q);

        $upass = $data['password'];

        if (md5($ps) == "$upass") {
            $_SESSION['user'] = $un;
            header("Location: index.php");
        } else {
            echo "Invalid Username Or Password";
        }
    } else {
        echo "Invalid Username Or Password";
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
        body{background-color: darkcyan;}
        
    </style>

<body>

    <form action="" method="post">
        <input type="text" name="uname" placeholder="username">
        <br><br>
        <input type="password" name="pass" placeholder="password">
        <br><br>
        <input type="submit" value="Login" name="btn">

    </form>


</body>