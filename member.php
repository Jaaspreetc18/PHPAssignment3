<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit;
}
include 'templates/header.php';
?>

<main>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</h2>
    <p>Your email is <?php echo htmlspecialchars($_SESSION['email']); ?>.</p>
    <p>Here is some exclusive content for members.</p>
</main>

<?php include 'templates/footer.php'; ?>
