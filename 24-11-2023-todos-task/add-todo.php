<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <!-- Navbar -->
    <section class="my-5 container w-50 mx-auto py-5">
        <div class="alert alert-secondary m-4 py-3 text-center">
            <h2> Create New Todo </h2>
        </div>
        <form action="store-todo.php" method="post">
            <div class="form-group my-2">
                <label for="todo">Todo Task</label>
                <input type="text" class="form-control py-2" id="todo" 
                name="todo">
            </div>
           
            <div class="form-group my-2">
                <label for="finished">finished</label>
                <input type="checkbox" name="finished" id="finished">
            </div>
            <input type="submit" value="Add Todo" 
            class="btn btn-primary my-2" name="add_todo">
        </form>
    </section>
</body>
</html>