<?php

    require_once 'includes/db.php';

    $id = $_GET['id'];
    $deleteStd = "DELETE FROM todos WHERE id=$id";

    if(mysqli_query($conn , $deleteStd)) {
        header('location:index.php');
    }