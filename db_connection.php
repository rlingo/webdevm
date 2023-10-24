    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "midterms";

    // Create a database connection
    $conn = new mysqli($server, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
