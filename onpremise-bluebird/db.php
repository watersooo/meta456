<?php
$servername = "192.168.100.108";
$username = "bluebird_user";
$password = "password";
$dbname = "bluebirdhotel";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}
?>
