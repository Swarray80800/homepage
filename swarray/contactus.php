<?php
// Contact form processing logic
$success_message = "";
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate form inputs
    if (!empty($name) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Here you can either save the data to a database or send an email
            // For example, sending an email (You'd need a mail server configured)
            $to = "your_email@domain.com";  // Change this to your email address
            $subject = "Contact Us Form Submission";
            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";

            // Try to send the email
            if (mail($to, $subject, $body, $headers)) {
                $success_message = "Thank you for contacting us! We will get back to you shortly.";
            } else {
                $error_message = "Sorry, something went wrong. Please try again later.";
            }
        } else {
            $error_message = "Please enter a valid email address.";
        }
    } else {
        $error_message = "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Your Web Platform Name</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</center>
<?php include "header.php"; ?> <!-- Include header for consistent navigation -->

<section class="contact-us">
    <h1>Contact Us</h1>
    <p>If you have any questions, feedback, or concerns, please reach out to us using the form below. We'd love to hear from you!</p>

    <!-- Display success or error messages -->
    <?php if (!empty($success_message)) : ?>
        <div class="success-message"><?php echo $success_message; ?></div>
    <?php endif; ?>

    <?php if (!empty($error_message)) : ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form action="contact.php" method="POST">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        
        <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        
        <div class="form-group">
            <label for="message">Your Message:</label>
            <textarea name="message" id="message" rows="5" required></textarea>
        </div>
        
        <button type="submit">Send Message</button>
    </form>

    <h2>Contact Information</h2>
    <p>If you'd prefer to reach us directly, you can contact us at:</p>
    <ul>
        <li><strong>Email:</strong> eswarray85@gmail.com</li>
        <li><strong>Phone:</strong> +250794394593</li>
        <li><strong>Address:</strong>kicukro</li>
    </ul>
</section>
</center>
<?php include "footer.php"; ?> <!-- Include footer for consistency -->

</body>
</html>
