<?php
include 'config.php';

if(isset($_POST['subscribe'])){
    $email = trim(filter_var($_POST['subscribe'], FILTER_SANITIZE_EMAIL));

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // Use INSERT IGNORE to prevent duplicates
        $stmt = $conn->prepare("INSERT IGNORE INTO subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if($stmt->execute()){
            if($stmt->affected_rows > 0){
                echo "Thank you for subscribing!";
            } else {
                echo "Thank you for subscribing!";
            }
        } else {
            echo "Subscription failed. Try again.";
        }

        $stmt->close();
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "No email provided.";
}

$conn->close();
?>
