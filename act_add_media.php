<?php

    require 'config/db.php';

    $member_id = 1;
    $date = $_POST['create_date'];
    $media_type = $_POST['media_type'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $embed_code = $_POST['embed_code'];
    $media_image = "No Image Found";
    $status = 'DEACTIVE';
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    if(isset($_FILES['media_img'])) {
        $name = uniqid(time());
        $extension = pathinfo($_FILES['media_img']['name'], PATHINFO_EXTENSION);
        $filename = $name . '.' . $extension;
        $hasFileuploaded = move_uploaded_file($_FILES['media_img']['tmp_name'], 'upload/' . $filename);
    }

    if($hasFileuploaded) {
        mysqli_query($connection, "INSERT INTO media (member_id, create_date, media_type, title, slug, description, embed_code, media_image, status, meta_description, meta_keyword) 
        VALUES ('$member_id', '$date', '$media_type', '$title', '$slug', '$description', '$embed_code', '$filename', '$status', '$meta_description', '$meta_keyword')") or die(mysqli_error());
    
        header("Location: media.php");
    }

?>