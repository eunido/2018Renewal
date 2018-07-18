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
                        <h3>노보 액상</h3>
                   </div>
               </div>                      
               <div id="novo">
                   <label for="novo-liquid" class="switch">
                       <input id="novo-liquid" type="checkbox">
                       <span class="slider round nicot-switch"></span>                       
                   </label>
                   <p class="density">0.95%</p><p class="density" style="display:none;">0.20%</p>

                   <div class="first_section">                       
                       <div class="liquid_title">NOVO LIQUID</div>
                   
                       <div class="novo_ex">
                           <ul>
                               <li><p>Fruit</p></li>
                               <li><p>Tobacco</p></li>
                               <li><p>Menthol & <br>dessert</p></li>
                           </ul>
                       </div>
                                            
                   </div>
                   <div id="fruit_section">
                       <h1 class="liquid_sub_title">Fruit 과일향</h1>
                       <div class="novoliquid">
                            <ul>
                                <li><a class="view" data-toggle="modal" data-target="#greenpunch">
                                    <img src="images/liquid/fruit/greenpunch.png" alt="greenpunch">
                                    <p>그린펀치<br>
                                    GreenPunch</p>
                                    </a>
                                </li>  
                                <li><a class="view" data-toggle="modal" data-target="#bluepunch">
                                    <img src="images/liquid/fruit/bluepunch.png" alt="bluepunch">
                                    <p>블루펀치<br>
                                    Blue Punch</p>
                                    </a>
                                </li>                                   
                                <li><a class="view" data-toggle="modal" data-target="#whitepunch">
                                    <img src="images/liquid/fruit/whitepunch.png" alt="whitepunch">
                                    <p>화이트펀치<br>
                                    White Punch</p>
                                    </a>
                                </li>                                          
                                <li><a class="view" data-toggle="modal" data-target="#sevenpunch">
                                    <img src="images/liquid/fruit/sevenpunch.png" alt="sevenpunch">
                                    <p>세븐펀치<br>
                                    Seven Punch</p>
                                    </a>
                                </li>                                       
                                <li><a class="view" data-toggle="modal" data-target="#yellowpunch">
                                    <img src="images/liquid/fruit/yellowpunch.png" alt="yellowpunch">
                                    <p>옐로우펀치<br>
                                    Yellow Punch</p>
                                    </a>
                                </li>                                     
                                <li><a class="view" data-toggle="modal" data-target="#coollemon">
                                    <img src="images/liquid/fruit/coollemon.png" alt="coollemon">
                                    <p>쿨레몬<br>
                                    Cool Lemon</p>
                                    </a>
                                </li>     
                            </ul>                 
                                                  
                            <div class="modal fade" id="greenpunch">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/fruit/p_greenpunch.png" alt="greenpunch">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->                          

                            <div class="modal fade" id="bluepunch">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/fruit/p_bluepunch.png" alt="bluepunch">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="whitepunch">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/fruit/p_whitepunch.png" alt="whitepunch">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="sevenpunch">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/fruit/p_sevenpunch.png" alt="sevenpunch">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="yellowpunch">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/fruit/p_yellowpunch.png" alt="yellowpunch">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="coollemon">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/fruit/p_coollemon.png" alt="coollemon">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->              
                       </div>
                   </div>
                   <div id="tobacco_section">
                       <h1 class="liquid_sub_title">Tobacco 연초향</h1>
                       <div class="novoliquid">
                            <ul>                  
                                <li><a class="view" data-toggle="modal" data-target="#ms-blend">
                                    <img src="images/liquid/tobacco/ms-blend.png" alt="ms-blend">
                                    <p>엠에스블랜드<br>
                                        Ms-Blend</p>
                                    </a>
                                </li>                                     
                                <li><a class="view" data-toggle="modal" data-target="#ms-plus">
                                    <img src="images/liquid/tobacco/ms-plus.png" alt="ms-plus">
                                    <p>엠에스플러스<br>
                                    Ms-plus</p>
                                    </a>
                                </li>      
                                <li><a class="view" data-toggle="modal" data-target="#kor-mini">
                                    <img src="images/liquid/tobacco/kor-mini.png" alt="kor-mini">
                                    <p>코리아미니<br>
                                    Kor-Mini</p>
                                    </a>
                                </li>                                          
                                <li><a class="view" data-toggle="modal" data-target="#desert">
                                    <img src="images/liquid/tobacco/desert.png" alt="desert">
                                    <p>데져트<br>
                                    Desert</p>
                                    </a>
                                </li>  
                                <li><a class="view" data-toggle="modal" data-target="#usamix">
                                    <img src="images/liquid/tobacco/usamix.png" alt="usamix">
                                    <p>유에스에이믹스<br>
                                    USAMIX</p>
                                    </a>
                                </li>                                                 
                            </ul>
                                      

                            <div class="modal fade" id="ms-blend">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/tobacco/p_ms-blend.png" alt="ms-blend">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="ms-plus">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/tobacco/p_ms-plus.png" alt="ms-plus">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->                      

                            <div class="modal fade" id="kor-mini">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/tobacco/p_kor-mini.png" alt="kor-mini">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->            

                            <div class="modal fade" id="desert">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/tobacco/p_desert.png" alt="desert">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->             

                            <div class="modal fade" id="usamix">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/tobacco/p_usamix.png" alt="usamix">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->     
                       </div>
                   </div>
                   <div id="md_section"> 
                       <h1 class="liquid_sub_title">Menthol 멘솔향 & Dessert 디져트향</h1>
                       <div class="novoliquid">
                            <ul>               
                                <li><a class="view" data-toggle="modal" data-target="#menthol">
                                    <img src="images/liquid/mentholdessert/menthol.png" alt="menthol">
                                    <p>멘솔<br>
                                    Menthol</p>
                                    </a>
                                </li>                                     
                                <li><a class="view" data-toggle="modal" data-target="#blackmenthol">
                                    <img src="images/liquid/mentholdessert/blackmenthol.png" alt="blackmenthol">
                                    <p>블랙멘솔<br>
                                    Black Menthol</p>
                                    </a>
                                </li>     
                                <li><a class="view" data-toggle="modal" data-target="#tabacmenthol">
                                    <img src="images/liquid/mentholdessert/tabacmenthol.png" alt="tabacmenthol">
                                    <p>타박멘솔<br>
                                    Tabac Menthol</p>
                                    </a>
                                </li>                            
                                <li><a class="view" data-toggle="modal" data-target="#americano">
                                    <img src="images/liquid/mentholdessert/americano.png" alt="americano">
                                    <p>아메리카노<br>
                                    Americano</p>
                                    </a>
                                </li>                                   
                                <li><a class="view" data-toggle="modal" data-target="#hazzlenut">
                                    <img src="images/liquid/mentholdessert/hazzlenut.png" alt="hazzlenut">
                                    <p>헤이즐넛<br>
                                    Hazzlenut</p>
                                    </a>
                                </li>                                                         
                            </ul>                                        
                                    
                            <div class="modal fade" id="menthol">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/mentholdessert/p_menthol.png" alt="menthol">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="blackmenthol">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/mentholdessert/p_blackmenthol.png" alt="blackmenthol">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->          

                            <div class="modal fade" id="tabacmenthol">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/mentholdessert/p_tabacmenthol.png" alt="tabacmenthol">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->     

                            <div class="modal fade" id="americano">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/mentholdessert/p_americano.png" alt="americano">      
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>                                  
                                    </div>
                                </div>
                            </div><!-- The Modal -->

                            <div class="modal fade" id="hazzlenut">
                                <div class="modal-dialog">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <img class="liquid-box" src="images/product/mentholdessert/p_hazzlenut.png" alt="hazzlenut">      
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
       <script type="text/javascript">
            $(document).ready(function() {
                var $fruitSectionOffset = $('#fruit_section').offset();
                var $check = $(".nicot-switch");
                $check.click(function() {
                    $("html, body").stop().animate({scrollTop:$fruitSectionOffset.top - 65}, 700);
                    $("#novo .novoliquid li").toggleClass('special');   
                    $("p.density").toggle();
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