<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Update Data</title>

    <style>
        body {
            background-image: url(photo.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-color: rgb(165, 42, 155);
            text-align: center;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 100px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            width: 400px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: brown;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            margin-top: 10px;
            display: block;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .submit {
            background-color: green;
            color: white;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>
<?php include "header.php"; ?>
<?php
include "connect.php";

if (isset($_POST['send'])) {
    $a = $_POST['Firstname'];
    $b = $_POST['Lastname'];
    $c = $_POST['Email'];
    $d = $_POST['Password'];
    $id = $_GET['Sid'];

    $update = mysqli_query($db, "UPDATE `home` SET Firstname='$a', Lastname='$b', Email='$c', Password='$d' WHERE Sid='$id'");
    if ($update) {
        echo "Data updated successfully";
        ?>
        <script>
            alert("Updated successfully");
            window.location.href = "workertable.php";
        </script>
        <?php
    }
} else {
    // Data not updated
}
?>

    <center>
        <div class="container">
            <h1>Update Data</h1>
            <form action="" method="post">
                <label for="Firstname">Firstname</label>
                <input type="text" name="Firstname" id="Firstname" value="<?php echo $_GET['Firstname']; ?>" required>

                <label for="Lastname">Lastname</label>
                <input type="text" name="Lastname" id="Lastname" value="<?php echo $_GET['Lastname']; ?>" required>

                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" value="<?php echo $_GET['Email']; ?>" required>

                <label for="Password">Password</label>
                <input type="text" name="Password" id="Password" value="<?php echo $_GET['Password']; ?>" required>


                <input type="submit" class="submit" name="send" value="Update">
            </form>
        </div>
    </center>
<?php  include "footer.php"; ?>
</body>
</html>
