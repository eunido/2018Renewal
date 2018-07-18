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
        <link href="css/liquid_style.css" rel="stylesheet">
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
           <main class="liquid godo">
               <div class="sub_liquid">
                   <div class="txt">
                        <h1>액상 소개</h1>
                        <div class="sub_line"></div>
                        <h3>모드 전용 액상</h3>
                   </div>
               </div>
               
               <div id="modpop">
                   <div class="first_section">                       
                       <div class="liquid_title">MOD LIQUID</div>
                   
                   </div>
                   <div id="modpop_section">
                       <h1 class="liquid_sub_title">Pop Series Liquid<br>팝 시리즈 액상</h1>
                       <div class="novoliquid">
                            <ul>
                                <li><a class="view" data-toggle="modal" data-target="#sevenpop">
                                    <img src="images/liquid/modpop/sevenpop.png" alt="sevenpop">
                                    <p>세븐팝<br>
                                    Seven Pop</p>
                                    </a>
                                </li>                                                                     
                                <li><a class="view" data-toggle="modal" data-target="#yellowpop">
                                    <img src="images/liquid/modpop/yellowpop.png" alt="yellowpop">
                                    <p>옐로우팝<br>
                                    Yellow Pop</p>
                                    </a>
                                </li>      
                                <li><a class="view" data-toggle="modal" data-target="#honeydewpop">
                                    <img src="images/liquid/modpop/honeydewpop.png" alt="toctoc">
                                    <p>허니듀팝<br>
                                    Honeydew Pop</p>
                                    </a>
                                </li> 
                                <li><a class="view" data-toggle="modal" data-target="#greenpop">
                                    <img src="images/liquid/modpop/greenpop.png" alt="headshot">
                                    <p>그린팝<br>
                                    Green Pop</p>
                                    </a>
                                </li>      
                                <li><a class="view" data-toggle="modal" data-target="#bluepop">
                                    <img src="images/liquid/modpop/bluepop.png" alt="bluepop">
                                    <p>블루팝<br>
                                    Blue Pop</p>
                                    </a>
                                </li>     
                                <li><a class="view" data-toggle="modal" data-target="#desertpop">
                                    <img src="images/liquid/modpop/desertpop.png" alt="desertpop">
                                    <p>데져트팝<br>
                                    Desert Pop</p>
                                    </a>
                                </li>         
                                <li><a class="view" data-toggle="modal" data-target="#ms-blendpop">
                                    <img src="images/liquid/modpop/ms-blendpop.png" alt="ms-blendpop">
                                    <p>엠에스블랜드팝<br>
                                    Ms-Blend Pop</p>
                                    </a>
                                </li>   
                            </ul>
                                                            
                            <div class="modal fade" id="sevenpop">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/modpop/p_sevenpop.png" alt="sevenpop">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->


                            <div class="modal fade" id="yellowpop">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/modpop/p_yellowpop.png" alt="yellowpop">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->


                            <div class="modal fade" id="honeydewpop">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/modpop/p_honeydewpop.png" alt="honeydewpop">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="greenpop">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/modpop/p_greenpop.png" alt="headshot">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->


                            <div class="modal fade" id="bluepop">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/modpop/p_bluepop.png" alt="bluepop">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->


                            <div class="modal fade" id="desertpop">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/modpop/p_desertpop.png" alt="desertpop">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->    

                            <div class="modal fade" id="ms-blendpop">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/modpop/p_ms-blendpop.png" alt="ms-blendpop">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->                                               
                       </div>
                    </div>
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