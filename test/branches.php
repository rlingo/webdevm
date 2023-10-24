<?php

include "db_connection.php";

$sql = "SELECT * FROM branches";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Branches</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <h1>Branch List</h1>
    <button type="button" onclick="window.location.href='branch_add.php'">Add Branch</button>

    <table>
        <tr>
            <th>ID</th>
            <th>Branch Name</th>
            <th>Sold Cars</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["branchname"]; ?></td>
                <td><?php echo $row["soldcars"]; ?></td>
                <td>
                    <form action="branch_delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this branch?');">Delete</button>
                    </form>
                    <form action="branch_edit.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                        <button type="submit">Edit</button>
                    </form>
                </td>>
            </tr>
        <?php } ?>

    </table>



</body>

</html>