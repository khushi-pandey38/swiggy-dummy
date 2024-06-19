<?php
    ob_start();
    include 'config.php';
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = md5($_POST['name']);

    $sql = "INSERT INTO user(name, number, email, password) VALUES('{$name}','{$number}','{$email}','{$password}')";
    //echo $sql;
    mysqli_query($conn, $sql) or die("Connection Failed");

    setcookie("email",$email,time()+60*60*24*10);
    setcookie("number",$number,time()+60*60*24*10);

    header("Location: http://localhost/PHP/swiggy/index.php");
    ob_end_flush();
?>