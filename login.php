<?php
session_start();
if (!empty($_SESSION['user'])){
    header("location: dashboard.php");
    // exit();  // to prevent further execution of the script
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php

$user = [
    ["un"=> "admin", "pass" => "admin123", "role" => "admin"],
    ["un"=> "pau", "pass" => "pau", "role" => "customer"],
    ["un"=> "user", "pass" => "user123", "role" => "staff"]
];

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnLogin"])){
    foreach ($user as $us){
        if ($us["un"] == $_POST["username"] && $us["pass"] == $_POST["password"]){
            $_SESSION["user"] = $us;
            header("Location: dashboard.php");
            exit(); // to prevent further execution of the script
        }
    }
    echo "Wrong Credentials";  
}
?>
    <form action="" method="post">
    <label for="username">username</label>
    <input type="text" name="username" id="username"><br>
    <label for="password">password</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Submit" name="btnLogin">
    </form>
    
</body>
</html>
