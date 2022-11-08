<?php
    $servername = "localhost";
    $username = "root";
    $password = "rootroot";
    $dbname = "forum";
    $port = 3306;
    $user = $_POST["username"];
    $pass = $_POST["password"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port); 

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    // ToSolve: Strange way, password won't save after registration. Only username and creation date. 2 and 4 IDs are missing.
    $sql = "INSERT INTO users (username, password, created_at)
    VALUES ( '$user', '$pass', '" . date('Y-m-d H:i:s') . "' );";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>