<?php 
    require_once 'includes/connection.php';

    $id = $_GET['id'];

    $selctedStudent = "SELECT * FROM students WHERE id=$id";
    $result = mysqli_query($conn , $selctedStudent);
    $std = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/head.php' ?>
</head>
<body>
<?php include_once 'includes/navbar.php' ?>

    <section class="my-5 contaier w-50 mx-auto text-center py-5 rounded shadow text-dark bg-light border">
        <h2>Student Name : <?php echo $std['name'] ?></h2>
        <h3>Student Grade : <?php echo $std['grade'] ?> </h3>
        <h3>Student Address : <?php echo $std['address'] ?> </h3>
        <a href="index.php" class="mt-2">Return to home</a>
    </section>

<?php include_once 'includes/footer.php' ?>

</body>
</html>