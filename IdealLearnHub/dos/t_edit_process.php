<?php
include '../dbcon.php';
$id = $_POST['id'];
$firstname = $_POST['teacher_firstname'];
$lastname = $_POST['teacher_lastname'];
$username = $_POST['teacher_username'];
$password1 = $_POST['teacher_pass'];
$phone = $_POST['phone'];

$sql = "UPDATE teachers SET teacher_firstname='$firstname',teacher_lastname ='$lastname', teacher_username='$username', teacher_pass='$password1', phone='$phone' WHERE teacher_id=$id";
if ($conn->query($sql) === TRUE) {
    header('Location: teachers.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>