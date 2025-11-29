<?php
$server = "sql100.infinityfree.com";
$username = "if0_40426068";
$password = "Nq2p9aERFxXrur";
$database = "if0_40426068_charaniya_db";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
