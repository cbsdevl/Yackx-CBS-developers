<?php
include '../s_numbers.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILH_DOS-dashboard</title>
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
            width: 80%;
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
     #design-1{
         background-color: white;
         width: 30%;
         height: 180px;
         margin-top: 50px;
         margin-left: 30px;
         border-radius: 20px;
         border-left: 20px solid lightseagreen;
     }
     #design-2{
        background-color: white;
         width: 28%;
         height: 180px;
         margin-top: -180px;
         margin-left: 750px;
         border-radius: 20px;
         border-left: 20px solid lightseagreen;

     }
     #design-3{
        background-color: white;
         width: 30%;
         height: 180px;
         margin-top: -180px;
         margin-left: 390px;
         border-radius: 20px;
         border-left: 20px solid lightseagreen;

     }
     #design-5{
        background-color: white;
         width: 40%;
         height: 180px;
         margin-top: -10px;
         margin-left: 40px;
         border-left:20px solid lightseagreen;
         
     }
     #design-8{
        background-color: whitesmoke;
         width: 40%;
         height: 160px;
         margin-top: -10px;
         margin-left: 40px;
         border-left:20px solid black;

         }
     #design-6{
        background-color: white;
         width: 40%;
         height: 320px;
         margin-top: -320px;
         margin-left: 500px;
         border-left:20px solid lightseagreen;

     }
     #design-7{
        background-color: white;
         width: 40%;
         height: 320px;
         margin-top: -320px;
         margin-left: 960px;
         border-left:20px solid lightseagreen;

     }
     #design-lin{
        margin-top: -56px;
        margin-left: -690px;
     }
     .logo{
         width: 180px;
         height: 140px;
         margin-left: 30px;
     }
     .cont-x{
        overflow-x: scroll;
        height: 399px;
        width: 95%;
     }
     .design-l{
        margin-top: -40px;
        margin-left: 1050px;
    
     }
     #design-x{
         margin-top: 1px;
    
     }
     .avatar{
         margin-left: 950px;
         margin-top: -46px;
         width: 42px;
         height: 41px;
         border-radius: 35px;
     }
     .style{
        overflow-y: scroll; 
     }
.ico{
    height: 75px;
    margin-left: -35px;
}
.icon{
    height: 100px;
    margin-left: 12px; 

}
.iconx{
    height: 25px;
    margin-left: -80px; 
}
.view{
    color: black;
    border: 1px solid black;
    border-radius: 6px;
    padding: 3px;
}
.view:hover{
    color: black;
    background-color: lightseagreen;
    border: 1px solid lightseagreen;
    border-radius: 6px;
    padding: 3px;
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
                        <a href="" class="overview">
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
                        <a href="view&edit.php" class="link-design">
                    <svg class="iconx">
                    <use xlink:href="../assets/images/icon.svg#icon_road"></use>
                </svg>
                    </td>
                    <td><h5 style="color: black; margin-left: -245px;">View</h5>
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
            <h3 style="color: black; margin-top: -50px; margin-left: 1100px;">
            <?php
    include 'usernames.php';
    echo $username;
    ?>
</h3>
<h6 style="margin-top: -10px; margin-left: 1070px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
">Online</h6>
        </div>
        <div id="right-frame">
        <div class="style">
        <br>
        <div id="design-1">
        <table>
        <tr>
            <td><h1 style="color: black; border: 3px solid lightseagreen; border-radius: 100%; padding: 15px; width: 80px;"><?php
include '../dbcon.php';
$queryteachers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM teachers"));
echo $queryteachers;
?></h1></td>
            <td rowspan="2">
                <svg class="ico">
                    <use xlink:href="../assets/images/icon.svg#icon_child"></use>
                </svg>
            </td>
        </tr>
        <tr>
        <td><h3 style="color: black;">Notifications</h3></td>
        </tr>
        <tr>
            <td colspan="2"><center><a href="teachers.php" class="view">view</a></center></td>
        </tr>
    </table>
        </div>
        <div id="design-2">
        <table>
        <tr>
            <td><h1 style="color: black; border: 3px solid lightseagreen; border-radius: 100%; padding: 15px; width: 80px;">12</h1></td>
            <td rowspan="2">
                <svg class="ico">
                    <use xlink:href="../assets/images/icon.svg#icon_news"></use>
                </svg>
            </td>
        </tr>
        <tr>
        <td><h3 style="color: black;">posts</h3></td>
        </tr>
        <tr>
            <td colspan="2"><center><a href="" class="view">view</a></center></td>
        </tr>
    </table>
        </div>
        <div id="design-3">
            <table>
        <tr>
            <td><h1 style="color: black; border: 3px solid lightseagreen; border-radius: 100%; padding: 15px; width: 80px;"><?php echo $querystudents;?></h1></td>
            <td rowspan="2">
                <svg class="ico">
                    <use xlink:href="../assets/images/icon.svg#icon_mail"></use>
                </svg>
            </td>
        </tr>
        <tr>
        <td><h3 style="color: black;">Messages</h3></td>
        </tr>
        <tr>
            <td colspan="2"><center><a href="students.php" class="view">view</a></center></td>
        </tr>
    </table>
</table>
</div>



       </style>
  
        </div>
       
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
