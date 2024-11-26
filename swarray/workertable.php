<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        table, th, td {
            border: 1px solid #dddddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            text-decoration: none;
            color: #FF5733;
            font-weight: bold;
            padding: 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #ffcccb;
        }
    </style>
</head>
<body>
<?php include "header.php"; ?>
<?php
    include "connect.php";
    
    $select = mysqli_query($db, "SELECT * FROM `home`");

    if (mysqli_num_rows($select) > 0) {
?>

    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>ACTION</th>
        </tr>

        <?php
        while ($rows = mysqli_fetch_array($select)) {
            $a = $rows['Firstname'];
            $b = $rows['Lastname'];
            $c = $rows['Email'];
            $id = $rows['Sid'];
        ?>
        <tr>
            <td><?php echo $a; ?></td>
            <td><?php echo $b; ?></td>
            <td><?php echo $c; ?></td>
            <td>
                <!-- Delete and Edit buttons with proper href values -->
                <a href="workertable.php?delete=<?php echo $id; ?>">Delete</a>
                <a href="update.php?Firstname=<?php echo $a; ?>&Lastname=<?php echo $b; ?>&Email=<?php echo $c; ?>&Sid=<?php echo $id; ?>">Edit</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

<?php
    } else {
        echo "No records found!";
    }

    // Handle the delete operation
    if (isset($_GET['delete'])) {
        $idd = $_GET['delete'];  // Use $idd to handle delete action
        $delete = mysqli_query($db, "DELETE FROM home WHERE Sid='$idd'");

        if ($delete) {
            ?>
            <script>
                alert("Deleted successfully");
                window.location.href = "workertable.php"; 
            </script>
            <?php
        } else {
            echo "Failed to delete the record.";
        }
    }
?>
<?php include "footer.php"; ?>
</body>
</html>
