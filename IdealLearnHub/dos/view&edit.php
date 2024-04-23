<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ILH|view&edit</title>
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
     .logo{
         width: 180px;
         height: 140px;
         margin-left: 30px;
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
         margin-top: 10px;
         width: 1060px;
         height: 450px;
         border-radius: 10px;
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
         color: black;
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
         border: 1px solid black;
         border-radius: 8px;
         margin-left: -240px;
         padding: 4px;
     }
    
     .des3:hover{
         background-color: lightseagreen;
         color: white;
         border: 1px solid lightseagreen;
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
            <h3 style="color: black; margin-top: -50px; margin-left: 1180px;">Admin_Dos</h3>
            <h6 style="margin-top: -10px; margin-left: 1090px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
">Online</h6>

        </div>
        <div id="right-frame">
        <h2 class="content">EDIT AND VIEW ILH
            <br>FEATURES:</h2>
        <div class="design-v">
                <section class="span1">
                <h2 style="margin-left: -680px;">Features</h2>
                <h2 style="margin-left: 740px;  margin-top: -40px">Action</h2>

                </section>
                <section class="span2">
                    
                    <table align="center">
                        <br><br>
                        <tr>
                            <td>
                                <svg class="ico">
                                    <use xlink:href="../assets/images/icon.svg#icon_users"></use>
                                </svg>
                            </td>
                            <td class="td1">
                    <h2 style="color: black;">Teacher's</h2>
                    </td>
                    <td>
                        <a href="teachers.php" class="des3">View/Edit</a>
                    </td>
                    <tr>
                        <td>
                            <svg class="ico">
                                <use xlink:href="../assets/images/icon.svg#icon_users"></use>
                            </svg>
                        </td>
                        <td class="td1">
                            <h2 style="color: black;">Student's</h2>
                    </td>
                    <td>                        <a href="students.php" class="des3">View/Edit</a>
</td>
                    </tr>
                    <tr>
                        <td>
                            <svg class="ico">
                                <use xlink:href="../assets/images/icon.svg#icon_logo"></use>
                            </svg>
                        </td>
                        <td class="td1">
                            <h2 style="color: black;">Trades</h2>
                    </td>
                    <td>                        <a href="" class="des3">View/Edit</a>
</td>
                    </tr>
                    <tr>
                        <td>
                            <svg class="ico">
                                <use xlink:href="../assets/images/icon.svg#icon_family"></use>
                            </svg>
                        </td>
                        <td class="td1">
                            <h2 style="color: black;">Sector</h2>
                    </td>
                    <td>                        <a href="" class="des3">View/Edit</a>
</td>
                    </tr>
                    <tr>
                        <td>
                            <svg class="ico">
                                <use xlink:href="../assets/images/icon.svg#icon_price"></use>
                            </svg>
                        </td>
                        <td class="td1">
                            <h2 style="color: black;">Modules</h2>
                    </td>
                    <td>                        <a href="" class="des3">View/Edit</a>
</td>
                    </tr>
                    <tr>
                        <td>
                            <svg class="ico">
                                <use xlink:href="../assets/images/icon.svg#icon_docs"></use>
                            </svg>
                        </td>
                        <td class="td1">
                            <h2 style="color: black;">Time table</h2>
                    </td>
                    <td>                        <a href="" class="des3">View/Edit</a>
</td>
                    </tr>
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
