<?php

require 'config/db.php';

$id = $_GET['id'];

$query = mysqli_query($connection, "SELECT media_image FROM media WHERE id = $id") or die(mysqli_error());
$row = mysqli_fetch_array($query);
$current_image = $row['media_image'];

$affected_image = mysqli_query($connection, "DELETE FROM media WHERE id = $id") or die(mysqli_error());

if($affected_image) {
	unlink("upload/" . $current_image);
    header("Location: media.php");
}

?>