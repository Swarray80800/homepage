<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Swarray web platform</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>
<body>

<?php include "header.php"; ?> <!-- Consistent header inclusion -->

<section class="about-us">
    <h1>About Us</h1>
    <p>Welcome to <strong>Swarray web platform</strong>! Our website is a one-stop destination for [briefly describe the purpose of your platform, such as offering educational content, entertainment, ecommerce, etc.]. We are dedicated to delivering [specific value or service] to our users.</p>

    <h2>Our Mission</h2>
    <p>At <strong>Your Swarray web platform</strong>, our mission is to [describe your mission, e.g., provide high-quality, accessible content/services to users around the world].</p>

    <h2>Our Vision</h2>
    <p>We envision a world where [describe your vision, e.g., knowledge and resources are available to everyone, creating an inclusive digital environment].</p>

    <h2>Our Story</h2>
    <p><strong>Swarray web platform</strong> was founded in [year] with the goal of [describe the initial inspiration behind the platform, such as solving a problem, providing a service, or connecting people]. Since then, we have grown into a trusted platform with [specific details, like the number of users, geographical reach, or success stories].</p>

    <h2>What We Offer</h2>
    <ul>
        <li><strong>Feature 1:</strong> [we develop website].</li>
        <li><strong>Feature 2:</strong> [project managenment].</li>
        <li><strong>Feature 3:</strong> [].</li>
    </ul>

    <h2>Meet the Team</h2>
    <div class="team">
        <?php
        // Example team members
        $teamMembers = [
            ["name" => "Emmanuel Sekou Swarray", "position" => "Founder & CEO", "bio" => "John is the visionary behind [Your Web Platform Name], leading with passion and innovation."],
            ["name" => "Shiloh Swarray", "position" => "CTO", "bio" => "Jane oversees the technology that powers our platform, ensuring a seamless user experience."],
            ["name" => "Sarah Sarray", "position" => "Head of Marketing", "bio" => "Emily drives our brand forward by connecting us with users and expanding our reach."],
        ];

        foreach ($teamMembers as $member) {
            echo "<div class='team-member'>";
            echo "<h3>{$member['name']}</h3>";
            echo "<p>Position: {$member['position']}</p>";
            echo "<p>{$member['bio']}</p>";
            echo "</div>";
        }
        ?>
    </div>

    <h2>Our Values</h2>
    <p>We believe in:</p>
    <ul>
        <li><strong>Innovation:</strong> Continuously evolving to meet the needs of our users.</li>
        <li><strong>Integrity:</strong> Providing reliable and trustworthy content/services.</li>
        <li><strong>Accessibility:</strong> Ensuring that everyone can benefit from our platform.</li>
        <li><strong>Community:</strong> Building connections and fostering collaboration.</li>
    </ul>

    <h2>Contact Us</h2>
    <p>If you’d like to learn more or have any questions, feel free to <a href="contact.php">contact us</a>.</p>
</section>

<?php include "footer.php"; ?> <!-- Consistent footer inclusion -->

</body>
</html>
