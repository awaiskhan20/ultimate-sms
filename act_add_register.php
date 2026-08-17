<?php

    require 'config/db.php';

    $create_date = date('Y-m-d H:i:s');
    $fullname = $_POST['fullname'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $member_status = 'ACTIVE';

    $sql = mysqli_query($connection, "INSERT INTO member (create_date, fullname, city, email, password, status) VALUES ('$create_date', '$fullname', '$city', '$email', '$password', '$member_status')") or die(mysqli_error());

     header("Location: index.php");

    
?>