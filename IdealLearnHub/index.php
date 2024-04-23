<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
    </head>
    <style>
        body{
            background-color: black;
        }
           
        .form1-content{
            background-color: white;
            opacity: 0.6;
            text-align: center;
            margin-left: 400px;
            margin-right: 400px;
            height: 500px;
            border: 3px solid lightseagreen;
            border-radius: 20px;

         
            
        }
 
   .body_cont{
    background-image: linear-gradient(
      to bottom,
      rgba(0, 0, 0, 0.8) 0%,
      rgba(0, 0, 0, 0.8) 100%
    ),url(assets/images/bg-about.jpg);
      
       margin-top: -50px;
       margin-left: -7px;
       margin-right: -225px;
       height: 602px;
       
   }
   .adress-cont{
       background: fixed;
       background-color: white;
       margin-top: -5px;
       height: 100px;
       margin-left: -7px;
       margin-right: -255px;
       margin-bottom: -7px;

   }
   
   .link1{
           color: black;
           text-decoration: none;
           border:1px solid black;
           padding:3px;
           border-radius:8px;

           
       }
       .link1:hover{
           color: black;
           background-color: lightseagreen;
       }
       .logo{
           height: 150px;
       }
       .locaton_ico{
           height: 20px;
           margin-left: 20px;
       }
       .analyst{
           margin-left: 80px;
           color: black;
       }
       .backend{
        margin-left: 120px;
        color: black;
       }
       .frontend{
        margin-left: 100px;
        color: black; 
       }
      
       .phone{
           margin-left: -130px;
           color: black;
           text-decoration: none;
       }
       .phone:hover{
           color: lightseagreen;
       }
    </style>
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
        <br><br>
        <div class="body_cont">
            <br><br>
        <div class="form1-content">
            <br> <br> <br> <br>
            <img src="assets/images/logo.png" class="logo">
            <h3 style="color: black;">Welcome on Ideal Learn Hub</h3>
            <a href="dos/doslogin.php" class="link1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login as DOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br><br>
            <a href="teacher/teacherlogin.php" class="link1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login as Teacher&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br><br>
            <a href="student/studentlogin.php" class="link1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login as student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
        </div>
    </div>
    <div class="adress-cont">
        <div align="center">
            <span class="backend">CBS Developer(Backend Developer)</span>
            <span class="frontend">YANNICK(Frontend Developer)</span>
            <span class="analyst">KELLEN Rafiki(system analyst)</span>
        </div>
        <div align="center">
                    <svg class="locaton_ico">
                        <use xlink:href="assets/images/icon.svg#icon_phone"></use>
                    </svg><a href="tel:+250783358457" class="phone">
                        + 250 7833 5457</a>
                        <svg class="locaton_ico">
                            <use xlink:href="assets/images/icon.svg#icon_phone"></use>
                        </svg> <a href="tel:+250783358457" class="phone">+ 250 7833 5457</a>
                            <svg class="locaton_ico">
                                <use xlink:href="assets/images/icon.svg#icon_phone"></use>
                            </svg>                        <a href="tel:+250783358457" class="phone">
                                + 250 7833 5457</a>
                </div>
                <br>
                <div align="center"><h5 style="color: lightseagreen; font-family: Georgia, 'Times New Roman', Times, serif;font-size: 15px;">Powered by CBS.Inc</h5></div>
                
        </div>
        </div>
        </section>
          <!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
<script type="text/javascript" src="assets/js/common-pages.js"></script>  
    </body>
</html>