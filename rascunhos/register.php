<?php
// register.php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $newUsername = $_POST["new_username"];
    $newPassword = $_POST["new_password"];

    // Validate the username and password
    if (registerUser($newUsername, $newPassword)) {
        header("Location: welcome.php");
        exit;
    } else {
        echo "Failed to register the user";
    }
}

// Function to register the user
function registerUser($newUsername, $newPassword) {
    // File path to store user credentials
    $filePath = 'users.txt';

    // Generate a hashed password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Format the new user's credentials
    $newUserCredentials = $newUsername . ':' . $hashedPassword . PHP_EOL;

    // Append the new user credentials to the file
    if (file_put_contents($filePath, $newUserCredentials, FILE_APPEND | LOCK_EX) !== false) {
        return true; // User registration successful
    } else {
        return false; // Failed to register the user
    }
}
?>
