<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];

        header("Location: dashboard.php"); // or dashboard.html
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="page">
    <div class="container">
        <h1>Welcome to Our Eco Friendly website</h1>
        <p class="subtitle">Login to continue to your account</p>

        <form method="POST" class="form">
            <h2>Login</h2>

            <input type="email" name="email" placeholder="Email address" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

            <p class="bottom-text">
                Don't have an account?
                <a href="register.php">Create one</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>