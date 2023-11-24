<?php

    require_once 'includes/db.php';
    $id = $_GET['id'];

    if(isset($_POST['edit_todo'])) {
        $todo = mysqli_real_escape_string($conn , $_POST['todo']);
        $finished  = mysqli_real_escape_string($conn , $_POST['finished']);

        $sql = "UPDATE todos SET task='$todo',finished='$finished'
        WHERE id=$id";

        if(mysqli_query($conn , $sql)){
            header('location:index.php');
        }else {
            header('location:edit-todo.php');
        }
    }