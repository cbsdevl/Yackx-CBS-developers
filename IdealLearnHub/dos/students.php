<?php
include '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILH/teacher view and edit</title>
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
         margin-left: 15px;
         margin-right: 150px;
         margin-top: 70px;
         width: 1070px;
         height: 600px;
         overflow-y: scroll;
     }
     .span1{
         background-color: lightseagreen;
         height: 45px;
     }
     .span2{
         height: 100%;
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
     .add{
         margin-left: 890px;
         border: 1px solid lightgray;
         border-radius: 8px;
         color: black;
         font-size:25px;
         padding: 1px;
         background-color: lightgray
     }
     .add:hover{
         color:black;
         border: 1px solid gray;
         background-color: gray;

     }
     .logo{
         width: 180px;
         height: 140px;
         margin-left: 30px;
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
            
            <h5 style="color: black;">ILH_DOS-dashboard</h5><br><br>
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
            <h3 style="color: black; margin-top: -50px; margin-left: 1180px;">Admin_Dos</h3>
            <h6 style="margin-top: -10px; margin-left: 1090px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
">Online</h6>

        </div>
        <div id="right-frame">
        <div class="design-v">
                <section class="span1">
                <h2>
                <a class="add" href="screate.php">New Sudent</a>
                </h2>

                <h2 style="margin-left: -450px; margin-top: -40px;">List of Student's</h2></section>
                           <table style="color: black; font-size: 18px; width: 100%; text-align: left; margin-top: 20px;" >
                           <thead>
                           <tr class="dev">
                           <th>Firstname</th>
                           <th>Lastname</th>
                           <th>Username</th>
                           <th>Password</th>
                           <th>Trade</th>
                           <th>Sector</th>
                           <th>Action</th>
                           </tr>
                           </thead>
                           <tbody>
                        <?php
                        $sql = "SELECT * FROM  students";
                        $result = $conn->query($sql);
                        if(!$result){
                             die("invalid query: " . $conn->error);
                        }
                        while($row = $result->fetch_assoc()){
                          echo "
                          <tr class='dev'>
                          <td>$row[firstname]</td>
                          <td>$row[lastname]</td>
                          <td>$row[username]</td>
                          <td>$row[password]</td>
                          <td>$row[trade]</td>
                          <td>$row[sector]</td>
                          <td>
                          <a class='edit' href='edit.php?id=$row[id]'>Edit</a>&nbsp;&nbsp;
                          <a class='delete' href='sdelete.php?id=$row[id]'>Delete</a>
                          </td>
                          </tr>
                          ";
                        }
                        ?>
                        </td>
                        </tr>
                        </tbody>
                        <style>
                        
                        .dev{
                            border-bottom: 3px solid lightgray;
                        }
                        .edit{
                            color: black;
                          border: 1px solid black;
                          border-radius: 8px;
                          font-size: 22px;
                          padding: 1px;
                        }
                        .edit:hover{
                            border: 1px solid lightseagreen;
                            background-color: lightseagreen;
                            color: black;
                        }
                        .delete{
                            color: black;
                            border: 1px solid lightseagreen;
                          border-radius: 8px;
                          background-color: lightseagreen;
                          font-size: 22px;

                        }
                        .delete:hover{
                            border: 1px solid gray;
                            background-color: gray;
                            color: black;
                        }
                        </style>
                           </table>
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
