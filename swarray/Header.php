<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <!-- Include Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General reset for padding and margin */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navigation bar styling */
        nav {
            background: #0056b3;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Header styling */
        header {
            background: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        /* Logout button styling */
        .logout-btn {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 30px;
            margin-left: auto; /* Aligns to the right */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
            }

            nav a {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <h1></i>Swarray Web Developmemt</h1>
</header>

<nav>
    <a href="home.php"><i class="fas fa-home"></i> Home</a>
    <a href="insert.php"><i class="fas fa-plus-circle"></i> Add Data</a>
    <a href="workertable.php"><i class="fas fa-table"></i> View Me</a>
    
    <a href="#" class="logout-btn" onclick="logout()"><i class="fas fa-sign-out-alt"></i> Logout</a>
</nav>

<script>
function logout() {
     confirmation = confirm("Are you sure you want to logout?");
    if (confirmation === true) {
        window.location.href = "logout.php";
    }
}
</script>

</body>
</html>
