<?php

//This PHP Script's resets a password - It recieves email, validates it, checks its presence in the database, and so on


// require('./connect.php');

// // Function to sanitize user inputs
// function sanitize_input($input) {
//     // Implement your sanitization logic here
//     return htmlspecialchars(trim($input));
// }


// //Validating email format
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<div><p>Invalid email format.</p></div>";
//         exit; // Stop execution if email format is invalid
//     }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = isset($_POST['emailpass']) ? sanitize_input($_POST['emailpass']) : '';

//     if ($email) {
//         // Check if the email exists in the database
//         $stmt = $connect->prepare("SELECT * FROM users WHERE emailpass = ?");
//         $stmt->bind_param('s', $email);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         if ($result->num_rows > 0) {
//             // Generate a unique token for password reset
//             $token = bin2hex(random_bytes(32));

//             // Store the token in the database for the user
//             $update_stmt = $connect->prepare("UPDATE users SET reset_token = ? WHERE emailpass = ?");
//             $update_stmt->bind_param('ss', $token, $email);
//             $update_stmt->execute();


//             //===========================================================

//             // Send the password reset link via email
//             $clientEmail = 'denismytin@gmail.com';
//             $reset_link = "https://yourwebsite.com/reset_password.php?email=$email&token=$token";
//             $to = $email;
//             $subject = "Password Reset Request";
//             $message = "Dear User,\n\nPlease click the link below to reset your password:\n$reset_link\n\nIf you did not request this, please ignore this email.\n\nRegards,\nYourWebsite Team";

//             // Assuming mail() function is enabled on your server
//             $headers = "From: ".$clientEmail . "\r\n" .
//                 'Reply-To: dmytin@ymail.com' . "\r\n" .
//                 'X-Mailer: PHP/' . phpversion();

//             if ($email != NULL) {
//                 mail($to, $subject, $message, $headers);
//                 echo "<div><p>A password reset link has been sent to your email.</p></div>";
//                 header("Location:thankyou.html");
                
//             } else {
//                 echo "<div><p>Failed to send the reset link. Please try again later.</p></div>";
//             }
//         } else {
//             echo "<div><p>Email not found in our records.</p></div>";
//         }

//         //==================================

//         /* Prepare autoresponder subject */
// $respond_subject = "Thank you for contacting us!";

// /* Prepare autoresponder message */
// $respond_message = "Hello! 

// Thank you for contacting us! We will get back to you
// as soon as possible!

// Yours sincerely,

// Support Team.
// www.xxx.co.ke
// ";

// /* Send the message using mail() function */
// $headers = "From: denismytin@gmail.com";
// mail($clientEmail, $respond_subject, $respond_message, $headers);


//         // Close the statements and connection
//         $stmt->close();
//         $update_stmt->close();
//         $connect->close();
//     } else {
//         echo 'Email is required';
//     }
// }


//=========================================================||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||




// require('./connect.php');

// // Function to sanitize user inputs
// function sanitize_input($input) {
//     return htmlspecialchars(trim($input));
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = isset($_POST['emailpass']) ? sanitize_input($_POST['emailpass']) : '';

//     // Validating email format
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<div><p>Invalid email format.</p></div>";
//         exit; // Stop execution if email format is invalid
//     }

//     if ($email) {
//         $stmt = $connect->prepare("SELECT * FROM users WHERE emailpass = ?");
//         $stmt->bind_param('s', $email);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         if ($result->num_rows > 0) {
//             $token = bin2hex(random_bytes(32));

//             $update_stmt = $connect->prepare("UPDATE users SET reset_token = ? WHERE emailpass = ?");
//             $update_stmt->bind_param('ss', $token, $email);
//             $update_stmt->execute();

//             // Send the password reset link via email
//             $reset_link = "https://yourwebsite.com/reset_password.php?email=$email&token=$token";
//             $to = $email;
//             $subject = "Password Reset Request";
//             $message = "Dear User,\n\nPlease click the link below to reset your password:\n$reset_link\n\nIf you did not request this, please ignore this email.\n\nRegards,\nYourWebsite Team";

//             $clientEmail = 'denismytin@gmail.com';
//             $headers = "From: ".$clientEmail . "\r\n" .
//                 'Reply-To: dmytin@ymail.com' . "\r\n" .
//                 'X-Mailer: PHP/' . phpversion();

//             if (mail($to, $subject, $message, $headers)) {
//                 echo "<div><p>A password reset link has been sent to your email.</p></div>";
//                 header("Location: thankyou.html");
//                 exit; // Stop execution after redirection
//             } else {
//                 echo "<div><p>Failed to send the reset link. Please try again later.</p></div>";
//             }
//         } else {
//             echo "<div><p>Email not found in our records.</p></div>";
//         }

//         $stmt->close();
//         $update_stmt->close();
//     } else {
//         echo 'Email is required';
//     }
// }

// // Thank-you autoresponder email
// $respond_subject = "Thank you for contacting us!";
// $respond_message = "Hello!\n\nThank you for contacting us! We will get back to you as soon as possible!\n\nYours sincerely,\nSupport Team.\nwww.xxx.co.ke\n";

// $headers = "From: denismytin@gmail.com";
// mail($clientEmail, $respond_subject, $respond_message, $headers);
// $connect->close();


//=================================================||||||||||||||||||||||||||||||||||||||





//PHP MAIL FUNCTION REMOVED

// require('./connect.php');

// // Function to sanitize user inputs
// function sanitize_input($input) {
//     return htmlspecialchars(trim($input));
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = isset($_POST['emailpass']) ? sanitize_input($_POST['emailpass']) : '';

//     // Validating email format
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo "<div><p>Invalid email format.</p></div>";
//         exit; // Stop execution if email format is invalid
//     }

//     if ($email) {
//         $stmt = $connect->prepare("SELECT * FROM users WHERE emailpass = ?");
//         $stmt->bind_param('s', $email);
//         $stmt->execute();
//         $result = $stmt->get_result();

//         if ($result->num_rows > 0) {
//             $token = bin2hex(random_bytes(32));

//             $update_stmt = $connect->prepare("UPDATE users SET reset_token = ? WHERE emailpass = ?");
//             $update_stmt->bind_param('ss', $token, $email);
//             $update_stmt->execute();

//             // Display the password reset link on the screen for the user
//             $reset_link = "https://yourwebsite.com/reset_password.php?email=$email&token=$token";
//             echo "<div><p>A password reset link has been generated:</p>";
//             echo "<p><a href='$reset_link'>$reset_link</a></p></div>";
//         } else {
//             echo "<div><p>Email not found in our records.</p></div>";
//         }

//         $stmt->close();
//         $update_stmt->close();
//     } else {
//         echo 'Email is required';
//     }
// }

// $connect->close();

//===============================|||||||||||||||||||||||||||||||||||
require('./connect.php');

// Function to sanitize user inputs
function sanitize_input($input) {
    return htmlspecialchars(trim($input));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['emailpass']) ? sanitize_input($_POST['emailpass']) : '';

    // Validating email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div><p>Invalid email format.</p></div>";
        exit; // Stop execution if email format is invalid
    }

    if ($email) {
        $stmt = $connect->prepare("SELECT * FROM users WHERE emailpass = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $token = bin2hex(random_bytes(32));

            $update_stmt = $connect->prepare("UPDATE users SET reset_token = ? WHERE emailpass = ?");
            $update_stmt->bind_param('ss', $token, $email);
            $update_stmt->execute();

            // Display the password reset link on the screen for the user
            $reset_link = "http://localhost/users/reset_password.php?email=$email&token=$token";
            echo "<div><p>A password reset link has been generated:</p>";
            echo "<p><a href='$reset_link'>$reset_link</a></p></div>";
        } else {
            echo "<div><p>Email not found in our records.</p></div>";
        }

        $stmt->close();
        $update_stmt->close();
    } else {
        echo 'Email is required';
    }
}

$connect->close();



?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESET: TEACHER SYSTEM</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <form id="studentRegbox" class="stdmainbx hbox" method="post" action="#" >
        <p class="studentRegTitle stdmaintitle">Reset Page</p>
        <hr>
        <div class="studentRegIn stdmainin">
            <p class="studentInTitle stdmainintitle">Reset password</p>
            <div class="studentDetails stdgdatabx">
                <aside class="stda stdaside">
                    
                    <div class="firsttnamebx sflex">
                        <p class="studentNamenm">Email:</p>
                        <input type="text" id="firsttnameinput" name="emailpass" class="sflexinp" placeholder="">
                    </div>
                    
                </aside>
                <aside class="stdb stdaside">
                    <div class="studentProfile">
                        <img src=" ./../../abst1_slash.jpg" class="stdImg" width="50" alt="Student Profile">
                        <button id="changeProfile" onclick="changeProfile()">Change Profile</button>
                    </div>
                  
            </div>
                <p class="notif" id="regNotif"></p>

            <hr color="lightgray">
            <div class="stdActbtns">
                <div class="stdActbtnsIn">
                    <button id="saveStudent" type="submit" class="stdinfobtn">Reset</button>
                </div>                
            </div>
        </div>
    </form>
</body>
</html>