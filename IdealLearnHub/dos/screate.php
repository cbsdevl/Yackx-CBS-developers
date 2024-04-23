<?php
include '../dbcon.php';

$firstname = "";
$lastname = "";
$username = "";
$password = ""; 
$trade = "";
$sector = "";
$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $trade = $_POST["trade"];
    $sector = $_POST["sector"];



do {
    if(empty($firstname) || empty($lastname) || empty($username) || empty($password) || empty($trade) || empty($sector)){
        $errorMessage = "All fields are required";
        break;
    }
    //add new teacher in database

$sql = "INSERT INTO students (firstname,lastname,username,password,trade,sector)" .
           "VALUES ('$firstname', '$lastname', '$username', '$password','$trade','$sector')";
           $result = $conn->query($sql);

           if (!$result) {
              $errorMessage = "invalid query:" . $conn->error;
              break;
           }



    $firstname = "";
    $lastname = "";
    $username = "";
    $password = ""; 
    $trade = "";
    $sector = "";
    $successMessage = "Student added corectly";
    header("location:students.php");
    exit;

} while (false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>op</title>
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/icofont.css">
    <link rel="stylesheet" href="../assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            
        }

        #container {
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;

        }

        #left-frame {
            width: 90%;
            height: auto;
            background-color: white;
        }

        #right-frame {
            width: 100%;
            height: 100%;
            background-color: lightgray;
        }
       #top-frame{
        box-shadow: 4px 8px 16px;
        margin: 0;
            padding: 0;
        width: 1372px;
        height: 45px;
           background-color: gray;
           position: fixed;
           box-shadow: 16px;

           
       }
       .link-design{
           padding: 11.5px;
           font-size: 20px;
           color: black;
         text-decoration: none;
       } 
       .link-design:hover{
           color: black;
           background-color: lightgray;
       }
       .overview{
        padding: 11.5px;
           font-size: 20px;
           color: black;
         text-decoration: none;
         background-color: lightgray;
         border-right: 15px solid lightseagreen;
     }
     .overview:hover{
         background-color: lightgray;
         color: black;
     }
     .avatar{
         margin-left: 950px;
         margin-top: -46px;
         width: 42px;
         height: 41px;
         border-radius: 35px;
     }
    
.ico{
    height: 145px;
    margin-left: -65px;
}
.icon{
    height: 145px;
    margin-left: 12px; 

}
.iconx{
    height: 25px;
    margin-left: -80px; 
}

.design-v{
    background-color: whitesmoke;
         margin-left: 20px;
         margin-right: 150px;
         margin-top: 60px;
         width: 1050px;
         height: 623px;
         border-radius: 10px;

        
     }
     .span1{
         background-color: lightseagreen;
         height: 45px;
     }
     .span2{
         height: 100%;
     }
     .logo{
         width: 180px;
         height: 140px;
         margin-left: 30px;
     }
     .content{
         margin-top: 52px;
         margin-left: 20px;
     }
     .de1{
         font-size: 25px;
     }
     .td1{
         text-align: left;
         width: 90%;
     }
     .des3{
         color: black;
         font-size: 25px;
         border: 1px solid lightseagreen;
         border-radius: 8px;
         margin-left: -240px;
         background-color: lightseagreen;
     }
    
     .des3:hover{
         background-color: blue;
         color: white;
         font-size: 25px;
         border: 1px solid blue;
         border-radius: 8px;
     }
     .ico{
         height: 20px;
         margin-right: -140px;
     }
    </style>
</head>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container" style="margin: 0; padding: 0;">
    <div id="container">
        <div id="left-frame">
            <br> <br>  <br> 
            <img src="../assets/images/logo.png" height="180px" width="210px" class="logo">
            <br>
            <h5 style="color: black;">ILH_DOS-dashboard</h5><br>
          <section>
            <table>
                <tr>
                    <td>
                        <a href="dosdashboard.php" class="link-design">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_streamline"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -190px;">Dashboard</h5>
                    </a>
                </td>
                </tr>
          <tr>
              <td><br></td>
              <td></td>
          </tr>
          <tr>
                    <td>
                        <a href="" class="overview">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_road"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -170px;">View And Edit</h5>
                    </a>
                </td>
                </tr>
          <tr>
              <td><br></td>
              <td></td>
          </tr>
          <tr>
                    <td>
                        <a href="" class="link-design">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_teacher"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -220px;">Reports</h5>
                    </a>
                </td>
                </tr>
          <tr>
              <td><br></td>
              <td></td>
          </tr>
          <tr>
                    <td>
                        <a href="" class="link-design">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_child"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -190px;">Notification</h5>
                    </a>
                </td>
                </tr>
          <tr>
              <td><br></td>
              <td></td>
          </tr>
          <tr>
                    <td>
                        <a href="" class="link-design">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_mail"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -200px;">Messages</h5>
                    </a>
                </td>
                </tr>
          <tr>
              <td><br></td>
              <td></td>
          </tr>
          <tr>
                    <td>
                        <a href="" class="link-design">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_news"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -240px;">Posts</h5>
                    </a>
                </td>
                </tr>
          <tr>
              <td><br></td>
              <td></td>
          </tr>
          <tr>
                    <td>
                        <a href="" class="link-design">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_guard"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -250px;">Help</h5>
                    </a>
                </td>
                </tr>
     
         
            </table>          
          </section>
        </div>
        <div id="top-frame">
        <h3 style="color: black; margin-left: -592px; margin-top: -1px">Ideal Leaning Hub online learning & managing study system</h3>
            <img src="../assets/images/avatar1.png" class="avatar">
            <h3 style="color: black; margin-top: -50px; margin-left: 1180px;">Admin_dos</h3>
            <h6 style="margin-top: -10px; margin-left: 1090px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
">Online</h6>

        </div>
        <div id="right-frame">
        <div class="design-v">
                <section class="span1">
                <h3 style="color: whitesmoke;">Add New Student In System</h3>
               </section>
               
               <form method="post">
               <label style="color: black;font-size: 20px;">Student's Firstname:</label></br>
               <input type="text" name="firstname" placeholder="Firstname" id="frm" value="<?php echo $firstname?>" required><br><br>
               <label style="color: black;font-size: 20px;">Student's Lastname:</label></br>
               <input type="text" name="lastname" placeholder="Lastname" id="frm" value="<?php echo $lastname?>" required><br><br>
               <label style="color: black;font-size: 20px;"> Student's Username:</label></br>
               <input type="text" name="username" placeholder="Username" id="frm" value="<?php echo $username?>" required><br><br>
               <label style="color: black;font-size: 20px;">Student's Password:</label></br>
               <input type="password" name="password" placeholder="Password" id="frm" value="<?php echo $password?>" required><br><br>
               <label style="color: black;font-size: 20px;"> Trade:</label></br>
               <input type="text" name="trade" placeholder="Trade" id="frm" value="<?php echo $trade?>" required><br><br>
               <label style="color: black;font-size: 20px;"> Sector:</label></br>
               <input type="text" name="sector" placeholder="Sector" id="frm" value="<?php echo $sector?>" required><br><br>
               <input type="submit" value="Add" id="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="students.php" id="close">Close</a>






               </form>
               <style>
               #close{
                   background-color: lightseagreen;
                color: black;
                font-size: 18px;
                   border-radius:8px;
                   padding: 8px;
               }
               #submit{
                   font-size: 20px;
                   border-radius:8px;
                   
               }
               #submit:hover{
                   background-color: lightseagreen;
               }
               #close:hover{
                background-color: gray;

               }
               #frm{
                   width: 40%;
                   height: 30px;
                   border-radius: 8px;
               }
               </style>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</section>
<!-- Required Jquery -->
<script type="text/javascript" src="../assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="../assets/js/modernizr/css-scrollbars.js"></script>
<script type="text/javascript" src="../assets/js/common-pages.js"></script>
</body>
</html>
