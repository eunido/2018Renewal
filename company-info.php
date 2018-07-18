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
        <link href="css/contents.css" rel="stylesheet">
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" crossorigin="anonymous">
        
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
       <div id="wrap">
            <header class="header godo">
                <?php include "header.php"; ?>
            </header>
           <main class="inform godo">
               <div class="sub_liquid">
                   <div class="txt">
                        <h1>회사 소개</h1>
                        <div class="sub_line"></div>
                        <h3>회사 소개</h3>
                   </div>
               </div>   
               
               <div class="about_wrap">
                   <p>저희 <span>씨엔엘</span>은<br>
                       앞선 품질과 기술력으로 전자담배 시장을 선도하는 액상 전문 회사입니다.<br><br>
                       우수한 전문 연구진을 바탕으로 연구개발에 집중하여 고객의 니즈를<br>
                       충족시킬 수 있는 우수한 품질의 제품의 개발, 생산에 최선을 다하겠습니다.<br><br>

                       건강한 생명의 미래를 열어갑니다.</p>
                   <ul class="vision_li">
                       <li><p>헬스케어<br>제품개발</p></li>
                       <li><p>금연<br>제품개발</p></li>
                       <li><p>전자담배 액상<br>개발 및 수출</p></li>
                   </ul>
                   <img src="images/logo_orange.png" alt="orange_logo">
               </div>
               
               
            </main>
        </div>
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