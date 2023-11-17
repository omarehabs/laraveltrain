<?php

require_once 'includes/connection.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 'includes/head.php' ?>
</head>

<body>
    <?php include_once 'includes/navbar.php' ?>
    <section class="my-5 container text-center">
        <table class="table tabe-bordered">

            <thead>

                <tr>
                    <th> Id </th>
                    <th> Student Name </th>
                    <th> Student Address </th>
                    <th> Student Grade </th>
                    <th> Student Gender </th>
                    <th> Actions</th>
                </tr>


            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM students";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                <?php
                }
                ?>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['grade'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td>

                    <a>show</a>
                    <a>edit</a>
                    <a>delete</a>
                </td>
            </tbody>
        </table>
    </section>
    <?php include_once 'includes/footer.php' ?>
</body>

</html>