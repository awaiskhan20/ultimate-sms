<?php

    require 'config/db.php';

    $member_id = 1;
    $date = $_POST['create_date'];
    $media_type = $_POST['media_type'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $embed_code = $_POST['embed_code'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $id = $_POST['id'];

    $old_image = $_POST['old_image'];
    $filename = $old_image;

    if($_FILES['media_img']['error'] == 0) {
        $name = uniqid(time());
        $extension = pathinfo($_FILES['media_img']['name'], PATHINFO_EXTENSION);
        $filename = $name . '.' . $extension;
    }
        
    $hasFileuploaded = move_uploaded_file($_FILES['media_img']['tmp_name'], 'upload/' . $filename);
    
    $affected = mysqli_query($connection, "UPDATE media SET member_id='$member_id', create_date='$date', media_type='$media_type', title='$title', slug='$slug', description='$description', embed_code='$embed_code', media_image='$filename', meta_description='$meta_description', meta_keyword='$meta_keyword' WHERE id='$id'") or die(mysqli_error());
    
    if($affected) {
        if($hasFileuploaded) 
            unlink("upload/" . $old_image);
        
        header("Location: media.php");
    }
        
?>