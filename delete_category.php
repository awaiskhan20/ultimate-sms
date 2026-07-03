<?php

require 'config/db.php';

$id = $_GET['id'];

mysqli_query($connection, "DELETE FROM category WHERE id = $id");

header("Location: category.php");

?>