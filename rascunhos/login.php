<?php
// login.php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password
    if (validateUser($username, $password)) {
        header("Location: welcome.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}

// Function to validate the user
// Function to validate the user
function validateUser($username, $password) {
    // File path where user credentials are stored
    $filePath = 'users.txt';

    // Check if the file exists
    if (file_exists($filePath)) {
        // Open the file in read mode
        $file = fopen($filePath, 'r');

        // Check if the username and password match
        while (($line = fgets($file)) !== false) {
            $credentials = explode(':', trim($line));
            $storedUsername = $credentials[0];
            $storedPassword = $credentials[1];
            if ($storedUsername === $username && password_verify($password, $storedPassword)) {
                fclose($file);
                return true; // Username and password match
            }
        }

        // Close the file
        fclose($file);
    }

    return false; // Invalid username or password
}

?>
