<?php

require 'config/db.php';
$id = $_GET['id'];

$query = mysqli_query($connection, "SELECT status FROM category WHERE id = $id") or die(mysqli_error());
$row = mysqli_fetch_array($query);

$update_status = ($row['status'] == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
mysqli_query($connection, "UPDATE category SET status = '$update_status' WHERE id = $id") or die(mysqli_error());
header("Location: category.php");


?>