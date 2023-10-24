<?php

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM branches WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: branches.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>

<script>
    var result = confirm("Are you sure you want to delete this branch?");

    if (result) {
        window.location = "branch_delete.php";
    } else {
        window.location = "branches.php";
    }
</script>