<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        footer {
            text-align: center;
            padding: 50px 30px;
            background: #007bff;
            color: #fff;
            width: 100%;
            position: relative;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
            margin: 10px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }
        .contact-us a{
            color:black;
            list-style: none;

        }
        .company a{
            color:black;

        }
        

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .social-icons a {
            margin: 0 10px;
            color: #fff;
            font-size: 20px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #ffd700;
        }

        .footer-bottom {
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 10px;
            font-size: 14px;
        }

    </style>
</head>
<body>

    <footer>
        <div class="footer-container">

            <!-- Contact Us Section -->
            <div class="contact-us">
                <h3>Contact Us</h3>
                <p><a href="mailto:eswarray85@gmail.com"><i class="fas fa-envelope"></i> eswarray85@gmail.com</a></p>
                <p><a href="tel:0794394593"><i class="fas fa-phone-volume"></i> +250794394593</a></p>
                <p><a href="https://wa.me/+250794394593"><i class="fab fa-whatsapp"></i> Chat with us</a></p>
            </div>

            <!-- Solutions Section -->
            <div class="footer-section">
                

            <!-- Company Section -->
            <div class="company">
                <h3>Company</h3>
                <ul>
                    <li><a href="Aboutus.php">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>


        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Swarray web Development. All Rights Reserved.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>
