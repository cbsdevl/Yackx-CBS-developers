<head>
  <title>Delete Student</title>
</head>
<body>
  <?php
  include '../dbcon.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM teachers WHERE teacher_id=$id";
  if ($conn->query($sql) === TRUE) {
      header('Location: teachers.php');
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  ?>
</body>
</html>