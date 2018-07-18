<!DOCTYPE html>
<!--
license for dokyunglee who is novo web designer
contact me to eunido@naver.com
-->
<html>
    <head>
        <!-- meta tag -->
        <?php include "meta.php"; ?>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96444181-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-96444181-1');
        </script>
	
        <!-- jQuery -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
        
        <!-- css -->
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet">
        
        <!-- bootstrap -->
        <link href="css/contents.css" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous">
        <link href="css/bootstrap-4-navbar.css" rel="stylesheet">    
        
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
       <div id="wrap">
            <header class="header godo">
                <?php include "header.php"; ?>
            </header>
           <main class="product godo">
               <div class="sub_liquid">
                   <div class="txt">
                        <h1 class="big_title">제품 소개</h1>
                        <div class="sub_line"></div>
                        <h3 class="small_title">K600</h3>
                   </div>
               </div>
               
               
               <div id="k600">
                   <img src="images/k600.jpg" alt="k600">
               </div>
               
               
            </main>
        
        <footer class="nanumbarungothic">
            <?php include "footer.php"; ?>
        </footer>
       </div>
       <script src="js/nav-bar.js"></script>

        <script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
        <script type="text/javascript">
        if(!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "1a4765f2d0272c";
        wcs_do();
        </script>
    </body>
</html>