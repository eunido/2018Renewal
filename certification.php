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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        
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
                        <h3>인증서</h3>
                   </div>
               </div>
                <div class="certi_img">
                    <ul>
                        <li>                            
                            <img src="images/certi/certi_0.png" alt="certi_0">
                            <div class='certi_name'>화학물질 확인서</div>
                            <a id="trigger1-1" data-toggle="modal" data-target="#chemical" class='closer'></a>
                            <a id="trigger1-2" data-toggle="modal" data-target="#chemical-mobile" class='closer'></a>
                        </li>
                        <li>
                            <img src="images/certi/certi_1.png" alt="certi_1">
                            <div class='certi_name'>수입신고수리 내역서</div>
                            <a id="trigger2-1" data-toggle="modal" data-target="#import" class='closer'></a>
                            <a id="trigger2-2" data-toggle="modal" data-target="#import-mobile" class='closer'></a>
                        </li>
                        <li>
                            <img src="images/certi/certi_2.png" alt="certi_2">
                            <div class='certi_name'>시험 보고서</div>
                        </li>
                        <li>
                            <img src="images/certi/certi_3.png" alt="certi_3">
                            <div class='certi_name'>시험 보고서</div>
                        </li>
                        <li>
                            <img src="images/certi/certi_4.png" alt="certi_4">
                            <div class='certi_name'>시험 보고서</div>
                        </li>
                        <li>
                            <img src="images/certi/certi_5.png" alt="certi_5">
                            <div class='certi_name'>시험 보고서</div>
                        </li>
                        <li>
                            <img src="images/certi/certi_6.png" alt="certi_6">
                            <div class='certi_name'>시험·검사성적서</div>
                        </li>
                        <li>
                            <img src="images/certi/certi_7.png" alt="certi_7">
                            <div class='certi_name'>시험·검사성적서</div>
                        </li>
                        
                    </ul>
                      
                    <div class="modal fade" id="chemical">
                        <div class="modal-dialog pc-certi">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <img src="images/certi/certi_0.png" alt="certi_0">      
                                <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                            </div>
                        </div>
                    </div><!-- The Modal -->
                    <div class="modal fade" id="chemical-mobile">
                        <div class="modal-dialog mobile-certi">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <img src="images/certi/chemical_mobile.png" alt="certi_0">      
                                <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                            </div>
                        </div>
                    </div><!-- The Modal -->
                    <div class="modal fade" id="import">
                        <div class="modal-dialog pc-certi">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <img src="images/certi/certi_1.png" alt="certi_0">      
                                <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                            </div>
                        </div>
                    </div><!-- The Modal -->
                    <div class="modal fade" id="import-mobile">
                        <div class="modal-dialog mobile-certi">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <img src="images/certi/import_mobile.png" alt="certi_0">      
                                <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                            </div>
                        </div>
                    </div><!-- The Modal -->
                    
                </div>     
            </main>
            <footer class="f3f3f3-footer nanumbarungothic">
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