<?php
session_start();
include '../dbcon.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $u=$_POST['username'];
  $psw=$_POST['password'];
  //CREATE PHP FILE
$myfile = fopen("usernames.php", "a");
$a = $u;
$string = "<?php"." "."$"."username = "."'".$a."'".";"."?>";
fwrite($myfile,$string);
fclose($myfile);
  $sql=mysqli_query($conn,"SELECT * FROM students WHERE username='$u' and password='$psw'")or die(mysqli_error($conn));

  $count=mysqli_num_rows($sql);
  if ($count==1) 
  {
    $_SESSION['username']=$u;
    while($row=mysqli_fetch_array($sql))
    {
     $_SESSION["id"] = $row['id'];
        echo "<script>function red(){
        window.location='sdashboard.php';
        } setInterval(red,1000);
        </script>";
      }

    }
     else{
        echo "
        <center>
        <br><br><br><br><br><br>
        <img src='../assets/images/logo.png' class='logo'><br><br><br>

        <font color='red' style='font-size: 20px;'>You are entering Invalid Username and Password <br>Please enter real username and password</font>
                 <br> <br><a href='studentlogin.php'>Try Again</a>
        </center>";
        echo "<script>function red(){
        window.location='doslogin.php';
        };
        </script>";
    }
  }
?>
<style>
 .logo{
           height: 180px;
       }
       a{
         background-color: blue;
         padding: 4px;
        text-decoration: none;
        border: 1px solid blue;
        border-radius: 8px;
        color: white;
       }
       a:hover{
         background-color: darkblue;
         color: white;
       }
</style>