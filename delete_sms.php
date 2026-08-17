<?php
require 'config/db.php';

    $id = $_GET['id'];

    mysqli_query($connection, "DELETE FROM message WHERE id='$id'") or die(mysqli_error());

    header("Location: sms.php");


?>