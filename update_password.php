<?php
require('./connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['token']) && isset($_POST['new_password'])) {
    $email = $_POST['email'];
    $token = $_POST['token'];
    $new_password = $_POST['new_password'];

    // Validate the email and token
    $stmt = $connect->prepare("SELECT * FROM users WHERE emailpass = ? AND reset_token = ?");
    $stmt->bind_param('ss', $email, $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Valid email and token, update the password
        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $update_stmt = $connect->prepare("UPDATE users SET password = ?, reset_token = NULL WHERE emailpass = ?");
        $update_stmt->bind_param('ss', $hashed_password, $email);
        $update_result = $update_stmt->execute();

        if ($update_result) {
            // Password updated successfully
            echo "Password updated successfully. You can now <a href='login.php'>login</a> with your new password.";
        } else {
            echo "Failed to update password. Please try again.";
        }
    } else {
        echo "Invalid email or token.";
    }

    $stmt->close();
    $update_stmt->close();
    $connect->close();
} else {
    echo "Invalid request.";
}
?>
