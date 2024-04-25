<?php
session_start();

require_once("./db-con.php");


if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);


    if(mysqli_num_rows($result) == 1){
        $_SESSION['email'] = $email;
        header('location:index.php');
    }else{
        echo 'Invalid username or password';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>