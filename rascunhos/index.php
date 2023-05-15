<!DOCTYPE html>
<html>
<head>
    <title>ZeroCostGaming - Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="imagens/logo/logorosa.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet"  href="indexphp.css">
</head>
<body class="gradient">
    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid" style="margin-left: 5%;margin-right: 5%;">
        <a class="navbar-brand" href="index.html">
            <img src="imagens/logo/logorosa.png" alt="" width="me-auto" height="40">
        </a>
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active margemleft" aria-current="page" href="index.html" margin-left>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link margemleft" href="wishlist.html">Wishlist</a>
                </li>
                </ul>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
            
            </ul>

            <?php
            session_start(); // Start the session

            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
                echo '<form action="logout.php" method="POST">';
                echo '<input type="submit" value="Logout" class="btn btn-outline-light margemleft">';
                echo '</form>';
            } else {
                echo '<ul class="navbar-nav">';
                echo '<li class="nav-item">';
                echo '<a class="nav-link margemleft" href="index.php">login</a>';
                echo '</li>';
                echo '</ul>';
            }
            ?>

        </div>
    </div>
</nav>
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
 <!-- FOOTER -->

 <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid" style="display:flex;justify-content: center;">
        <img src="imagens/logo/logonome.png" alt="" width="me-auto" height="35">
    </div>  
  </nav>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" >
</script>
<script src="index.js"></script>

</body>
</html>
