<?php
session_start();


$_SESSION["name"] = "me";
$_SESSION["age"] = "9";

//session_unset();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>