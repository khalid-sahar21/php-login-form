<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
</head>
<style>
        
        body{background-color: rgb(178, 205, 57);}
        h1{color: blue;}
        h2{color: chartreuse;}
        a{color: black;}

    </style>

<body>
    <h1>index page</h1>

    <?php
    session_start();
   echo $ses  = $_SESSION['user'];
    if ($ses == false) {
        header("Location: login.php");
    }
    ?>
    <br>
    <h2><a href="logout.php">Logout</a></h2>

</body>
</html>