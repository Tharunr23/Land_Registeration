<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "land";

// Create connection
$conn = mysqli_connect($localhost, $root, $password, $land);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    header("location: selling.php");
    }
} else {
    header("location: invalid2.php");
}

mysqli_close($conn);
?>