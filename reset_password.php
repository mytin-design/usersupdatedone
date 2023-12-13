<?php
require('./connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    // Check if the email and token exist in the database
    $stmt = $connect->prepare("SELECT * FROM users WHERE emailpass = ? AND reset_token = ?");
    $stmt->bind_param('ss', $email, $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Valid token and email
        // Display a form to set a new password
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Reset Password</title>
        </head>
        <body>
            <h2>Reset Your Password</h2>
            <form action="update_password.php" method="post">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="token" value="<?php echo $token; ?>">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>
                <input type="submit" value="Reset Password">
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Invalid email or token.";
    }

    $stmt->close();
    $connect->close();
} else {
    echo "Invalid request.";
}
?>
