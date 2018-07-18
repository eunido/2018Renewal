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
                        <h3>메두사 액상</h3>
                   </div>
               </div>
               
               <div id="medusa">
                    <div class="first_section">                       
                       <div class="liquid_title">MEDUSA LIQUID</div>
                   
                    </div>
                    <div id="medusa_section">
                        <h1 class="liquid_sub_title">Medusa Liquid<br>메두사 액상</h1>
                       <div class="novoliquid">
                            <ul>
                                <li><a class="view" data-toggle="modal" data-target="#iceblackhole">
                                    <img src="images/liquid/medusa/iceblackhole.png" alt="iceblackhole">
                                    <p>아이스블랙홀<br>
                                    Ice blackhole</p>
                                    </a>
                                </li>     
                                <li><a class="view" data-toggle="modal" data-target="#blood">
                                    <img src="images/liquid/medusa/blood.png" alt="blood">
                                    <p>블러드<br>
                                    Blood</p>
                                    </a>
                                </li>      
                                <li><a class="view" data-toggle="modal" data-target="#toctoc">
                                    <img src="images/liquid/medusa/toctoc.png" alt="toctoc">
                                    <p>톡톡<br>
                                    Toc toc</p>
                                    </a>
                                </li>    
                                <li><a class="view" data-toggle="modal" data-target="#headshot">
                                    <img src="images/liquid/medusa/headshot.png" alt="headshot">
                                    <p>헤드샷<br>
                                    Headshot</p>
                                    </a>
                                </li>   
                                <li><a class="view" data-toggle="modal" data-target="#britishtobacco">
                                    <img style="top:5%;" src="images/liquid/medusa/britishtobacco.png" alt="britishtobacco">
                                    <p>브리티시타바코<br>
                                    <span style="">British Tobacco</span></p>
                                    </a>
                                </li> 
                                <li><a class="view" data-toggle="modal" data-target="#iceblending">
                                    <img src="images/liquid/medusa/iceblending.png" alt="iceblending">
                                    <p>아이스블렌딩<br>
                                    Ice Blending</p>
                                    </a>
                                </li>     
                            </ul>
                           
                                                          
                            <div class="modal fade" id="iceblackhole">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/medusa/p_iceblackhole.png" alt="iceblackhole">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->


                            <div class="modal fade" id="blood">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/medusa/p_blood.png" alt="blood">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="toctoc">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/medusa/p_toctoc.png" alt="toctoc">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->


                            <div class="modal fade" id="headshot">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/medusa/p_headshot.png" alt="headshot">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->


                            <div class="modal fade" id="britishtobacco">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/medusa/p_britishtobacco.png" alt="britishtobacco">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="iceblending">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/medusa/p_iceblending.png" alt="iceblending">      
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