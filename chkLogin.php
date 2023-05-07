<?php
session_start();
include 'connection.php';
$msg = "";

$query = "SELECT * FROM users WHERE email = \"" . $_POST["user"] . "\" AND password = \"" . md5($_POST["pwd"]) . "\"";
$results = $conn->query($query);

if ($results->num_rows == 1) {
    $_SESSION["user"] = $_POST["user"];

    header("location: index.php");
} else {
    $msg .= "Login errato";
}

if ($msg != "")
    header("location: index.php?msg=" . $msg);

$conn->close();
