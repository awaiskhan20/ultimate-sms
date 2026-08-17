<?php
    session_start();
    require 'config/db.php';

    $member_id = $_SESSION['member_id'];
    $date = $_POST['create_date'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $status = 'DEACTIVE';
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $sql = mysqli_query($connection, "INSERT INTO category (member_id, create_date, title, slug, status, meta_description, meta_keyword) 
    VALUES ('$member_id', '$date', '$title', '$slug', '$status', '$meta_description', '$meta_keyword')") or die(mysqli_error());
    
    header("Location: category.php");

?>