<?php
    require_once 'includes/connection.php';
    $id = $_GET['id'];

    $selectedStd = "SELECT * FROM students WHERE id=$id";
    $res = mysqli_query($conn , $selectedStd);
    $std = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <!-- Navbar -->
    <?php include_once 'includes/navbar.php' ?>
    <section class="my-5 container w-50 mx-auto py-5">
        <div class="alert alert-success m-4 py-3
         text-center">
            <h2> Edit Student </h2>
        </div>
        <form action="update.php?id=<?php echo $std['id']?>" method="post">
            <div class="form-group my-2">
                <label for="name">Student Name</label>
                <input type="text" class="form-control py-2" id="name" 
                name="name" value="<?php echo $std['name'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="address">Student Address</label>
                <input type="text" class="form-control py-2" 
                id="address" name="address"
                value="<?php echo $std['address'] ?> ">
            </div>
            <div class="form-group my-2">
                <label for="grade">Student Grade</label>
                <input type="number" 
                class="form-control py-2" id="grade" 
                name="grade"
                value="<?php echo $std['grade'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="male">Male</label>
                <input type="radio" name="gender"
                 id="male" value="Male" 
                 <?php echo $std['gender'] == "Male" ? "checked" : "" ?>>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female"
                 value="Female"
                 <?php echo $std['gender'] == "Female" ? "checked" : "" ?>
                 >
            </div>
            <input type="submit" value="Edit Student" 
            class="btn btn-success my-2" name="edit_student">
        </form>
    </section>
    <!-- Footer -->
    <?php include_once 'includes/footer.php' ?>
</body>
</html>