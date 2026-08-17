<?php
    session_start();
    $isValidSession = $_SESSION['isValid'];

    if(!$isValidSession){
        header("Location: index.php");
        exit();
    }

?>