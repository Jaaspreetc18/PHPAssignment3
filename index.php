<?php
global $db;
session_start();
require 'config/dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query to check user credentials
    $stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['first_name'];
        header('Location: member.php');
        exit;
    } else {
        $error = 'Invalid email or password';
    }
}

include 'templates/header.php';
?>

<main>
    <h2>Welcome to My Website</h2>
    <p>This is a  website with user authentication.</p>
    <?php if (!isset($_SESSION['email'])): ?>
        <form action="index.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
        <?php endif; ?>
    <?php endif; ?>
</main>

<?php include 'templates/footer.php'; ?>
