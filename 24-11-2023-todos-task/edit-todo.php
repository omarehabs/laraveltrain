<?php
require_once 'includes/db.php';
$id = $_GET['id'];

$selectedStd = "SELECT * FROM todos WHERE id=$id";
$res = mysqli_query($conn, $selectedStd);
$std = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.php' ?>
</head>

<body>
    <section class="my-5 container w-50 mx-auto py-5">
        <div class="alert alert-success m-4 py-3
         text-center">
            <h2> Edit todo </h2>
        </div>
        <form action="update-todo.php?id=<?php echo $std['id'] ?>" method="post">
            <div class="form-group my-2">
                <label for="todo">Task todo</label>
                <input type="text" class="form-control py-2" id="todo" name="todo" value="<?php echo $std['task'] ?>">
            </div>
            <div class="form-group my-2">
                <label for="finished">finished</label>

                <input type="checkbox" id="finished" name="finished" value= "finished" 
                <?php echo $std['finished']  == 1  ? "checked" : '' ?> >
            </div>
            <input type="submit" value="Edit Todo" class="btn btn-success my-2" name="edit_todo">
        </form>
    </section>
</body>

</html>