<?php

    require_once "includes/db.php";

    if(isset($_POST['add_todo'])) {
        $todo = mysqli_real_escape_string($conn , $_POST['todo']);
        $finished  = mysqli_real_escape_string($conn , $_POST['finished']);
        $finished_checked = (isset($_POST['finished'])) ? 1 : 0;

        
        $insertStd = "INSERT INTO todos(task , finished)
        VALUES('$todo' , '$finished_checked' )";

        if(mysqli_query($conn , $insertStd)) {
            header('location:index.php');
        }else{
            header('location:add-todo.php');
        }
    }