<?php

    require 'config/db.php';

    $member_id = 1;
    $date = $_POST['create_date'];
    $dropdown_category = $_POST['dropdown_category'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $status = 'DEACTIVE';
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    mysqli_query($connection, "INSERT INTO message (member_id, category_id, title, slug, content, status, meta_description, meta_keyword, create_date)
    VALUES ('$member_id', '$dropdown_category', '$title', '$slug', '$content', '$status', '$meta_description', '$meta_keyword', '$date')") or die(mysqli_error());
    
    header("Location: sms.php");

?>