<?php
session_start();
if (empty($_SESSION["user"])){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>HELLO <?php echo $_SESSION ['user'] ['un']?>!</h1>

    <?php if (!($_SESSION['user']['role'] == 'customer')) { ?>
        <button>ADD</button>
        <?php if ($_SESSION['user']['role'] == 'admin') { ?>
        <button>EDIT</button>
        <button>DELETE</button>

        <?php
            {
        }
    }
}
        ?>
        <a href="logout.php">Logout</a>

</body>
</html>