<?php

    require_once 'includes/db.php';

    $selctedStudent = "SELECT * FROM todos WHERE finished=1 ";
    $result = mysqli_query($conn, $selctedStudent);

    

    $done = "SELECT * FROM todos WHERE finished=0 ";
    $done_todos = mysqli_query($conn, $done);



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

                    <a href="delete-todo.php?id=<?php echo $row["id"] ?>" class="btn btn-primary" type="button">delete</a>
                    <a href="edit-todo.php?id=<?php echo $row["id"] ?>" type="button" class="btn btn-success">edit</a>
                </li>


            <?php } ?>
        </ul>
        </section>
    </div>
</body>

</html>