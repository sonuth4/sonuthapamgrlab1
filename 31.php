<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Validate Username
    $username = trim($_POST['username']);
    if (strlen($username) < 8) {
        $errors[] = "Username must be at least 8 characters long.";
    }

    // Validate Email
    $email = trim($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    // Validate Date of Birth
    $dob = $_POST['dob'];
    if (empty($dob) || !strtotime($dob)) {
        $errors[] = "Invalid date of birth.";
    }

    // Validate Phone Number
    $phone = trim($_POST['phone']);
    if (!preg_match('/^\d{10}$/', $phone)) {
        $errors[] = "Phone number must be 10 digits.";
    }

    // If no errors, save data
    if (empty($errors)) {
        // Store user data (simple file-based storage for demo)
        $userData = "Username: $username, Email: $email, DOB: $dob, Phone: $phone\n";
        file_put_contents("users.txt", $userData, FILE_APPEND);
        echo "User registered successfully!";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Email: <input type="email" name="email"><br>
    Date of Birth: <input type="date" name="dob"><br>
    Phone: <input type="text" name="phone"><br>
    <button type="submit">Register</button>
</form>