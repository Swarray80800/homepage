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

        input[type="text"], input[type="email"], input[type="password"] {
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
    <center>
        <?php
        include "header.php";
        include "connect.php"; // Database connection

        // Check if the form is submitted
        if (isset($_POST['send'])) {
            $firstname = $_POST['Firstname'];
            $lastname = $_POST['Lastname'];
            $email = $_POST['Email'];
            $password = $_POST['Password'];

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Invalid email format');</script>";
            } else {
                // Hash the password before storing it
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Use prepared statements to avoid SQL injection
                $stmt = $db->prepare("INSERT INTO home (Firstname, Lastname, Email, Password) VALUES (?, ?, ?, ?)");

                // Bind parameters: s - string (for all values)
                $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);

                // Execute the statement and check if successful
                if ($stmt->execute()) {
                    echo "<script>
                            alert('Inserted successfully');
                            window.location.href = 'workertable.php';
                          </script>";
                } else {
                    echo "<script>alert('Failed to insert data. Please try again.');</script>";
                }

                // Close the statement
                $stmt->close();
            }
        }
        ?>

        <div class="container">
            <form action="" method="post">
                <h1>Register</h1>

                <label for="Firstname">First Name</label>
                <input type="text" class="form-control" placeholder="First Name" name="Firstname" id="Firstname" required>

                <label for="Lastname">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" name="Lastname" id="Lastname" required>

                <label for="Email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="Email" id="Email" required>

                <label for="Password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required>

                <input type="submit" class="submit" name="send" value="Submit">
            </form>
        </div>

        <?php include "footer.php"; ?>
    </center>
</body>
</html>
