<?php
    session_start();
    require 'config/db.php';

    $member_id = $_SESSION['member_id'];
    $date = $_POST['create_date'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $id = $_POST['id'];

    $sql = mysqli_query($connection, "UPDATE category SET create_date='$date', title='$title', slug='$slug', meta_description='$meta_description', meta_keyword='$meta_keyword' WHERE id=$id") or die(mysqli_error());
    
    header("Location: category.php");

?>