<?php

    require_once "includes/connection.php";

    if(isset($_POST['add_student'])) {
        $name = mysqli_real_escape_string($conn , $_POST['name']);
        $address  = mysqli_real_escape_string($conn , $_POST['address']);
        $grade = mysqli_real_escape_string($conn , $_POST['grade']);
        $gender = mysqli_real_escape_string($conn , $_POST['gender']);

        $insertStd = "INSERT INTO students(name , address , grade , gender)
        VALUES('$name' , '$address' , '$grade' , '$gender')";

        if(mysqli_query($conn , $insertStd)) {
            header('location:index.php');
        }else{
            header('location:create.php');
        }
    }