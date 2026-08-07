<?php

    require 'config/db.php';

    $member_id = 1;
    $date = $_POST['create_date'];
    $dropdown_category = $_POST['dropdown_category'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $id = $_POST['id'];

    mysqli_query($connection, "UPDATE message SET member_id='$member_id', category_id='$dropdown_category', title='$title', slug='$slug', content='$content', meta_description='$meta_description', meta_keyword='$meta_keyword', create_date='$date' WHERE id='$id'") or die(mysqli_error());

    header("Location: sms.php");

?>