<?php

// Database Connection
$hostname = "sql100.infinityfree.com";
$username = "if0_40426068";
$password = "Nq2p9aERFxXrur";
$database = "if0_40426068_charaniya_db";

$conn = new mysqli($hostname, $username, $password, $database);

// Check Connection
if ($conn->connect_error) {
    die("Error: Unable to connect to the database!");
}

// Process Form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Collect Form Data
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $service  = $_POST['service'] ?? '';
    $subject  = $_POST['subject'] ?? '';
    $message  = $_POST['message'] ?? '';

    // Prepare Insert Query (Safe)
    $stmt = $conn->prepare("
        INSERT INTO contact_page (name, email, phone, service, subject, message)
        VALUES (?, ?, ?, ?, ?, ?)
    ");

    if ($stmt) {
        $stmt->bind_param("ssssss", $name, $email, $phone, $service, $subject, $message);
        
        if ($stmt->execute()) {
            echo "Thank you! Your message has been successfully submitted. ✔️";
        } else {
            echo "❌ Something went wrong while saving your message.";
        }

        $stmt->close();
    } else {
        echo "❌ Failed to prepare database query.";
    }
}

$conn->close();
?>
