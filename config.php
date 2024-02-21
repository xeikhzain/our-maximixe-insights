<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'db_maximize-insights'; // Corrected database name

    $conn = mysqli_connect($host, $username, $password, $db_name);

    if (!$conn) {
        die('Error: Unable to connect to the database. ' . mysqli_connect_error());
    } else {
        echo '';
    }
?>