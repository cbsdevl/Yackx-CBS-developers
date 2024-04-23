<head>
  <title>Delete Student</title>
</head>
<body>
  <?php
  include '../dbcon.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM students WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
      header('Location: students.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
</body>
</html>