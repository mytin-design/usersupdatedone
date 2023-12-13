<?php
// session_start();

// // Check if the user is logged in
// if (!isset($_SESSION['username'])) {
//     // Redirect to the login page if not logged in
//     header("Location: login.php");
//     exit();
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     require('./connect.php'); // Include your database connection script

//     $username = $_SESSION['username'];
//     $color = isset($_POST['color']) ? $_POST['color'] : '';
//     $layout = isset($_POST['layout']) ? $_POST['layout'] : '';

//     // Validate and sanitize user input as needed

//     // Insert/update preferences into the database
//     $stmt = $connect->prepare("INSERT INTO user_preferences (username, color, layout) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE color = VALUES(color), layout = VALUES(layout)");
//     $stmt->bind_param('sss', $username, $color, $layout);
//     $stmt->execute();
//     $stmt->close();
//     $connect->close();

//     // Redirect to the dashboard after saving preferences
//     header("Location: dashboard.php");
//     exit();
// }

//========================================|||||||||||||||||||||||||||||||||||||||||||||||||||||||
/* */

// session_start();

// // Check if the user is logged in
// if (!isset($_SESSION['username'])) {
//     // Redirect to the login page if not logged in
//     header("Location: login.php");
//     exit();
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Include your database connection script
//     require('./connect.php');

//     $username = $_SESSION['username'];
//     $color = isset($_POST['color']) ? $_POST['color'] : '';
//     $layout = isset($_POST['layout']) ? $_POST['layout'] : '';

//     // Prepare and execute SQL statement to save/update preferences
//     $stmt = $connect->prepare("INSERT INTO user_preferences (username, color, layout) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE color = VALUES(color), layout = VALUES(layout)");
//     $stmt->bind_param('sss', $username, $color, $layout);
//     $stmt->execute();

//     // Check for successful execution and handle errors if needed
//     if ($stmt->affected_rows > 0 || $stmt->errno == 1062) { // 1062: Duplicate entry error
//         // Preferences saved successfully or updated
//         header("Location: dashboard.php");
//         exit();
//     } else {
//         // Error occurred while saving preferences
//         echo "Error: Unable to save preferences. Please try again.";
//     }

//     $stmt->close();
//     $connect->close();
// }


//=======================================================|||||||||||||||||||||||||||||||||||||
/* Explanation of changes:

    The code first checks if user preferences exist in the database for the logged-in user.
    Based on whether preferences exist or not, it uses either an UPDATE or INSERT statement to update or insert preferences accordingly.
    The script then checks if the operation (insertion or update) was successful and redirects to the dashboard upon success, or displays an error message otherwise.

This updated code should appropriately handle both updating existing preferences and inserting new preferences for subsequent user interactions in save_preferences.php. Adjust the table structure and column names as needed based on your database setup.*/

// session_start();

// // Check if the user is logged in
// if (!isset($_SESSION['username'])) {
//     // Redirect to the login page if not logged in
//     header("Location: login.php");
//     exit();
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Include your database connection script
//     require('./connect.php');

//     $username = $_SESSION['username'];
//     $color = isset($_POST['color']) ? $_POST['color'] : '';
//     $layout = isset($_POST['layout']) ? $_POST['layout'] : '';

//     // Check if the user preferences already exist in the database
//     $stmt = $connect->prepare("SELECT COUNT(*) FROM user_preferences WHERE username = ?");
//     $stmt->bind_param('s', $username);
//     $stmt->execute();
//     $stmt->bind_result($count);
//     $stmt->fetch();
//     $stmt->close();

//     // If preferences exist, update them; otherwise, insert new preferences
//     if ($count > 0) {
//         // Preferences exist, perform an update
//         $stmt = $connect->prepare("UPDATE user_preferences SET color = ?, layout = ? WHERE username = ?");
//         $stmt->bind_param('sss', $color, $layout, $username);
//         $stmt->execute();
//     } else {
//         // Preferences don't exist, perform an insert
//         $stmt = $connect->prepare("INSERT INTO user_preferences (username, color, layout) VALUES (?, ?, ?)");
//         $stmt->bind_param('sss', $username, $color, $layout);
//         $stmt->execute();
//     }

//     // Check for successful execution and handle errors if needed
//     if ($stmt->affected_rows > 0) {
//         // Preferences saved successfully or updated
//         header("Location: dashboard.php");
//         exit();
//     } else {
//         // Error occurred while saving preferences
//         echo "Error: Unable to save preferences. Please try again.";
//     }

//     $stmt->close();
//     $connect->close();
// }


//=============================================||||||||||||||||||||||||||||||||||||||||||||||||||

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include your database connection script
    require('./connect.php');

    $username = $_SESSION['username'];
    $color = isset($_POST['color']) ? $_POST['color'] : '';
    $layout = isset($_POST['layout']) ? $_POST['layout'] : '';

    // Check if preferences exist for the current user
    $stmt = $connect->prepare("SELECT COUNT(*) FROM user_preferences WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    // If preferences exist, update them; otherwise, insert new preferences
    if ($count > 0) {
        // Preferences exist, perform an update
        $stmt = $connect->prepare("UPDATE user_preferences SET color = ?, layout = ? WHERE username = ?");
        $stmt->bind_param('sss', $color, $layout, $username);
        $stmt->execute();
    } else {
        // Preferences don't exist, perform an insert
        $stmt = $connect->prepare("INSERT INTO user_preferences (username, color, layout) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $username, $color, $layout);
        $stmt->execute();
    }

    // Check for successful execution and handle errors if needed
    if ($stmt->affected_rows > 0) {
        // Preferences saved successfully or updated
        header("Location: dashboard.php");
        exit();
    } else {
        // Error occurred while saving preferences
        echo "Error: Unable to save preferences. Please try again.";
    }

    $connect->close();
}



?>



