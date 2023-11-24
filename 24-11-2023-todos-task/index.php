<?php

require_once 'includes/db.php';

$selctedStudent = "SELECT * FROM todos WHERE finished=1 ";
$result = mysqli_query($conn, $selctedStudent);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 'includes/head.php' ?>
</head>

<body>
    <div class="my-5 container text-center  float-left">

        <div class="alert alert-secondary m-4 py-3 text-center">
            <h2> laravel Todo </h2>
        </div>
        <a class="btn btn-primary" href="add-todo.php">Add new Todo</a>


        <ul class="list-group">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <li class="list-group-item">task : <?php echo $row['task'] ?>

                    <a type="button" class="btn btn-primary">delete</a>
                    <a type="button" class="btn btn-success">edit</a>
                </li>


            <?php } ?>
        </ul>
        <a href="index.php" class="mt-2">Return to home</a>
        </section>
    </div>
</body>

</html>