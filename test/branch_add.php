<?php

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $branchname = $_POST["branchname"];
    $soldcars = $_POST["soldcars"];

    $sql = "INSERT INTO branches (branchname, soldcars) VALUES ('$branchname', '$soldcars')";

    if (mysqli_query($conn, $sql)) {
        header("Location: branches.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Branch</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <h1>Add Branch</h1>

    <button type="button" onclick="window.location.href='branches.php'">Back</button>

    <form action="branch_add.php" method="post">
        Branch Name: <input type="text" name="branchname"><br>
        Sold Cars: <input type="number" name="soldcars"><br>
        <input type="submit" value="Add">
    </form>

</body>

</html>