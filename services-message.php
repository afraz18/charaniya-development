<?php
// services-message.php
header('Content-Type: application/json'); // Important for fetch

$conn = mysqli_connect("sql100.infinityfree.com", "if0_40426068", "Nq2p9aERFxXrur", "if0_40426068_charaniya_db");
if (!$conn) {
    echo json_encode(['status' => 'error', 'message' => 'Database connection failed']);
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $service = mysqli_real_escape_string($conn, $_POST['service']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO services_messages (name, email, mobile, service, message)
            VALUES ('$name', '$email', '$mobile', '$service', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(['status' => 'success', 'message' => 'Message Sent Successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Something went wrong!']);
    }
    exit();
}
?>
