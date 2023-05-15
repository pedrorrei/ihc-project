<!DOCTYPE html>
<html>
<head>
    <title>Log in/Sign up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            animation: fade-in 0.5s;
        }
        
        h2 {
            margin-top: 0;
        }
        
        form {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        a {
            display: block;
            text-align: right;
            margin-bottom: 10px;
            color: #666;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        a:hover {
            color: #000;
        }
        
        @keyframes fade-in {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Add this style for highlighting the invalid input fields */
        .invalid-input {
            border: 1px solid red;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            if ($username === "admin" && $password === "password") {
                // Successful login
                echo '<span class="success-message">Login successful</span>';
                // Perform any additional actions or redirection here
            } else {
                // Invalid login
                echo '<span class="error-message">Invalid username or password</span>';
            }
        } ?>
        <input type="submit" value="Login">
    </form>
        <a href="forgot_password.php">Forgot your password?</a>
        <h2>Create Account</h2>
        <form action="register.php" method="POST">
            <label for="new_username">Username:</label>
            <input type="text" id="new_username" name="new_username" required><br><br>
            <label for="new_password">Password:</label>
            <input type="password" id="new_password" name="new_password" required><br><br>
            <input type="submit" value="Register">
        </form>
    </div>

    <script>
        // Optional: You can add client-side validations or additional JavaScript logic here.
    </script>
</body>
</html>
