<?php
session_start();

$valid_username = "admin";
$valid_password = "password123";


if (!isset($_SESSION["loggedin"]) && isset($_COOKIE["remembered_user"])) {
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $_COOKIE["remembered_user"];
    header("Location: welcome.php");
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $remember_me = isset($_POST["remember_me"]);

    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;

        
        if ($remember_me) {
            setcookie("remembered_user", $username, time() + (86400 * 30), "/"); // 30 days
        }

        header("Location: welcome.php");
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php if (!empty($error_message)) : ?>
        <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <label for="remember_me">
            <input type="checkbox" id="remember_me" name="remember_me">
            Remember Me
        </label>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>