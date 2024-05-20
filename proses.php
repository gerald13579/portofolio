<?php
include("app/database/connect.php");

extract($_POST);

$query = "INSERT INTO `contact` (`nama`, `email`, `message`) VALUES ('{$nama}', '{$email}', '{$message}')";
$result = $conn->query($query);
if (!$result) {
    echo "Something went wrong: " . $conn->error;
} else {
    echo "Thank you for submitting";
}

$conn->close();
?>
