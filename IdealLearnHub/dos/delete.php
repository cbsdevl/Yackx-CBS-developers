<?php
if ( isset($_GET["teacher_id"]) ) {
    $teacher_id = $_GET["teacher_id"];
include '../dbcon.php';
$sql = "DELETE FROM teachers WHERE teacher_id=$teacher_id";
$conn->query($sql);

}

header("location:teachers.php");
exit;
?>