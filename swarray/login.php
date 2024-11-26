<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666;
            font-weight: bold;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .submit {
            background-color: #4CAF50;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit:hover {
            background-color: #45a049;
        }

        @media (max-width: 500px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>

<?php
include "connect.php"; // Added missing semicolon

if (isset($_POST['send'])) {
    $a = $_POST['username'];
    $b = $_POST['password'];
   

    // Insert query (removed space before 'home')
    $select = mysqli_query($db, "SELECT *FROM register WHERE username='$a'and password='$b'");

    if ($select==true) {
        ?>
        <script>
        alert("LOGIN successfully");
        window.location.href = "home.php";
        </script>
        <?php
    } else {
        echo "Failed LOGIN data:";
    }
}
?>

<div class="container">
    <form action="" method="post">
        <h1>LOGIN</h1>

        <label for="firstname">username</label>
        <input type="text" class="form-control" placeholder="username" name="username" id="username" required>

        <label for="lastname">password</label>
        <input type="text" class="form-control" placeholder="password" name="password" id="password" required>

        

        <input type="submit" class="submit" name="send" value="Submit">
    </form>
</div>

</body>
</html>
