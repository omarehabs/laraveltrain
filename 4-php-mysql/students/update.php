<?php

    require_once 'includes/connection.php';
    $id = $_GET['id'];

    if(isset($_POST['edit_student'])) {
        $name = mysqli_real_escape_string($conn , $_POST['name']);
        $address  = mysqli_real_escape_string($conn , $_POST['address']);
        $grade = mysqli_real_escape_string($conn , $_POST['grade']);
        $gender = mysqli_real_escape_string($conn , $_POST['gender']);

        $sql = "UPDATE students SET name='$name',address='$address',grade='$grade',gender='$gender'
        WHERE id=$id";

        if(mysqli_query($conn , $sql)){
            header('location:index.php');
        }else {
            header('location:edit.php');
        }
    }