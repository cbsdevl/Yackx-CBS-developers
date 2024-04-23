<?php
include 'dbcon.php';
$querystudents = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM students"));

?>