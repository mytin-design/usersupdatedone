<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

require('./connect.php'); // Include your database connection script

// Retrieve updated user preferences from the database
$username = $_SESSION['username'];
$stmt = $connect->prepare("SELECT color, layout FROM user_preferences WHERE username = ?");
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();

$userPreferences = $result->fetch_assoc(); // Fetch user preferences

$stmt->close();
$connect->close();

// Use retrieved preferences to customize the dashboard
// Example usage of retrieved preferences to style the dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <style>
        /* Example styles based on user preferences */
        body {
            background-color: <?php echo $userPreferences['color']; ?>;
        }
        /* Add more CSS styles based on preferences... */
    </style>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <!-- Example dashboard elements based on user preferences -->
    <div class="<?php echo $userPreferences['layout']; ?>">
        <!-- Add customized dashboard content based on preferences -->
        <!-- This is just an example; customize this based on user preferences -->
        <div class="widget">Widget 1</div>
        <div class="widget">Widget 2</div>
        <!-- Add more widgets/content based on preferences... -->
    </div>
    
    <!-- Add additional content, scripts, etc. as needed for the dashboard -->
    <a href="./settings.php" class="">Settings</a>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>

</body>
</html>
