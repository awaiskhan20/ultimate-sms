<?php
session_start();
require 'config/db.php';


$fullname = $_GET['fullname'];
$password = md5($_GET['password']);

$sql = mysqli_query($connection, "SELECT * FROM member WHERE fullname='$fullname' AND password='$password'") or die(mysqli_error());

if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['member_id'] = $row['id'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['isValid'] = true;

    header("Location: member.php");

} else {
    header("Location: index.php?error=1");
}


?>