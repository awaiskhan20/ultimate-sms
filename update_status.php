<?php

require 'config/db.php';
$table_name = $_GET['type'];
$id = $_GET['id'];

if($table_name == 'med') {
    $query = mysqli_query($connection, "SELECT status FROM media WHERE id = $id") or die(mysqli_error());
    $row = mysqli_fetch_array($query);

    $update_status = ($row['status'] == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
    mysqli_query($connection, "UPDATE media SET status = '$update_status' WHERE id = $id") or die(mysqli_error());
    header("Location: media.php");

} else {
    $query = mysqli_query($connection, "SELECT status FROM category WHERE id = $id") or die(mysqli_error());
    $row = mysqli_fetch_array($query);

    $update_status = ($row['status'] == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
    mysqli_query($connection, "UPDATE category SET status = '$update_status' WHERE id = $id") or die(mysqli_error());
    header("Location: category.php");
}


?>