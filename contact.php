<?php
include 'templates/header.php';
?>

<main>
    <h2>Contact Us</h2>
    <form action="contact.php" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Send</button>
    </form>
</main>

<?php include 'templates/footer.php'; ?>
