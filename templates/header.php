<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Assignment 3</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<header>
    <h1>Welcome to My Website</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php if(isset($_SESSION['email'])): ?>
                <li><a href="member.php">Member</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="index.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
