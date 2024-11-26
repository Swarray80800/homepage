<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Standard Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20;
            padding: 0;
            background-color: block;
        }
        header {
            background: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: #0056b3;
            padding: 10px;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        .container {
            max-width: 800px;
        
            padding: 20px;
            background: #fff;
            
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #007bff;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<center>
<?php include "header.php" ?>

<header>
    <h1><i class="fas fa-home"></i> Welcome Back Admi</h1>

</header>



<div class="container">
    <h2>Welcome to the official home page Swarray Web Development</h2>
    <p>Here we provide you with the best  quality and realiable Web-Sit we typically offers services related to creating ,
         desiging and meantaing websites for individuals or business </p>
</div>
<?php include "footer.php"; ?>
</center>

</body>
</html>
