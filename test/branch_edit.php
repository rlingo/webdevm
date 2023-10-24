<?php

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $branchname = $_POST["branchname"];

    $sql = "UPDATE branches SET branchname = '$branchname' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: branches.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$id = $_POST["id"];

$sql = "SELECT * FROM branches WHERE id = $id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Branch</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <h1>Edit Branch</h1>

    <button type="button" onclick="window.location.href='branches.php'">Back</button>

    <form action="branch_edit.php?id=<?php echo "$id"; ?>" method="post">
        Branch Name: <input type="text" name="branchname" value="<?php echo $row["branchname"]; ?>"><br>
        <input type="submit" value="Update">
    </form>

</body>

</html>