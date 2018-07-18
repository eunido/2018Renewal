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
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous">
        
        <!-- font -->
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'>

        <!-- fullpage -->
        <link type="text/javascript" rel="stylesheet" href="js/fullpage.min.js" />
        <!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "easeInOutCubic". -->
        <script type="text/javascript" src="js/easings.min.js"></script>
        <!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
        <script type="text/javascript" src="js/scrolloverflow.min.js"></script>

        <!-- css -->
        <link href="css/contents.css" rel="stylesheet">
        <link href="css/fullpage.css" rel="stylesheet" type="text/css">
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        
        <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
        <![endif]-->
    </head>
    <body>         
        <header class="header godo index_header">
            <?php include "header.php"; ?>
        </header>
        
        <div class="main">
            <section class="page1 section">
                <div class="page_container godo">
                    <a href="./novo-liquid.php"><img src="images/main_01.png" alt="novo_bg"></a>
                    <a href="./novo-liquid.php"><div id="novo_liquid"></div></a>
                    <h1>
                        <span class="title_name" style="color:#1b1b1b">노보,&nbsp;</span><br class="br">
                        <span class="title_name" style="color:#fff">빛나는 향</span>
                        <span class="last_text">을 품다</span>
                    </h1><br>
                    <h2>노보는 100% 국내 기술력으로 대한민국에서<br class="br"> 제조한 전자담배 액상입니다. <br class="br">연초, 과일, 디져트 제품이 있습니다.</h2>
                </div>
            </section>

            <section class="page2 section">
                <div class="page_container godo">
                    <a href="./medusa-liquid.php"><img src="images/main_02.png" alt="medusa_bg"></a>
                    <a href="./medusa-liquid.php"><div id="medusa_liquid"></div></a>
                    <h1>
                        <span class="title_name" style="color:#1b1b1b">메두사,&nbsp;</span><br class="br">
                        <span class="title_name" style="color:#ff0000">시원한 향</span>
                        <span class="last_text">을 품다</span>
                    </h1><br>
                    <h2>메두사는 시원하면서 화한 느낌을 살린<br class="br"> COOLING감이 있는 제품입니다.</h2>
                </div>
            </section>

            <section class="page3 section">
                <div class="page_container godo">
                    <a href="./mod-liquid.php"><img src="images/main_03.png" alt="mod_bg"></a>
                    <a href="./mod-liquid.php"><img id="mobile_modpop_liquid" src="images/mobile_main_03.png" alt="mod_bg"></a>
                    <h1>
                        <span class="title_name" style="color:#ffffff">노보</span>
                        <span class="title_name" style="color:#ffffff;">모드 </span><br class="br">
                        <span class="title_name" style="color:#ef2103">팝</span>
                        <span class="title_name" style="color:#97bb00">시</span>
                        <span class="title_name" style="color:#0069fd">리</span>
                        <span class="title_name" style="color:#f58a00">즈, </span>
                        <br class="br modbr">
                        <span class="title_name" style="color:#ffd101">부드러운 향</span>
                        <span class="last_text" style="color:#ffffff">을 품다</span>
                    </h1><br>
                    <h2>모드 팝시리즈는 모드기기용 액상입니다.<br class="br"> 부드러우면서 SWEET한 느낌의 제품입니다.</h2>
                </div>
                <div class="footer-idx">
                </div>
            </section>
            <section class="page4 section fp-auto-height">
                <footer class="nanumbarungothic">
                    <?php include "footer.php"; ?>
                </footer>
            </section>
        </div>

        <!-- fullpage.js -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.6/jquery.fullpage.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.6/vendors/scrolloverflow.min.js"></script>
        <script src="js/nav-bar.js"></script>
        <script>
            $(document).ready(function(){
                $('.main').fullpage({
                    navigation: true,
                    navigationPosition: 'right',
                    //스크롤
                    css3: true,
                    scrollingSpeed: 700,
                    autoScrolling: true,
                    fitToSection: true,
                    fitToSectionDelay: 1000,
                    scrollBar: false,
                    fadingEffect: false,
                    scrollOverflow: true,
                    scrollOverflowReset: false,
                    scrollOverflowOptions: null,
                    touchSensitivity: 10,
                    normalScrollElementTouchThreshold: 5
                });
            });
        </script>

        <script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
        <script type="text/javascript">
        if(!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "1a4765f2d0272c";
        wcs_do();
        </script>
    </body>
</html>
