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
        <script type="text/javascript" src="./js/QuickAccord.js"></script>
        
        <!-- css -->
        <link href="css/reset.css" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/QuickAccord.css" type="text/css"/>
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
                        <h1>고객지원</h1>
                        <div class="sub_line"></div>
                        <h3>자주 묻는 질문</h3>
                   </div>
               </div>   
               
               <div class="arcodian_wrap">
                    <ul class="arcodian_ul">
                        <li>
                                <a href="#accordion1" class="accordion-trigger" data-accord-group="group1">전자담배 액상은 얼마나 사용 가능한가요?</a>
                                <div id="accordion1" class="accordion-content collapsed">
                                        <p>사용자의 흡연습관에 따라 개인차가 있습니다. </p>
                                </div>
                        </li>
                        <li>
                                <a href="#accordion2" class="accordion-trigger" data-accord-group="group1">흡입 시 바람 새는 소리가 납니다.</a>
                                <div id="accordion2" class="accordion-content collapsed">
                                        <p>전자담배는 공기의 흐름으로 작동되는 방식입니다. 따라서 흡입 시 발생하는 공기의 흐름으로 인한 소리나 액상이 기화되는 소리가 날 수 있습니다. 이는 정상적으로 작동된다는 의미이며 전자담배의 특성상 부드럽게 흡입하여 주시기 바랍니다. </p>
                                </div>
                        </li>
                        <li>
                                <a href="#accordion3" class="accordion-trigger" data-accord-group="group1">목이 아프고 두통이 생긴 것 같습니다.</a>
                                <div id="accordion3" class="accordion-content collapsed">
                                        <p>니코틴 농도가 사용자 몸에 맞지 않게 과도하게 높은 경우 등 여러가지 원인이 있을 수 있습니다. 전자담배 사용으로 신체의 이상이 생겼다고 생각 되실 경우 사용을 중단하시고 전문의와 상담하시기 바랍니다.</p>
                                </div>
                        </li>
                        <li>
                                <a href="#accordion4" class="accordion-trigger" data-accord-group="group1">전자담배 사용시 주변 사람에게 피해는 없나요?</a>
                                <div id="accordion4" class="accordion-content collapsed">
                                        <p>니코틴 성분이 포함된 액상이 기화된 수증기는 약한 황사와 비슷한 미세먼지를 포함하고 있으므로 임산부, 유아의 곁에서의 흡연은 삼가해 주시고 밀폐된 공간에서의 흡연 후 반드시 환기를 시켜주시기 바랍니다. </p>
                                </div>
                        </li>
                        <li>
                                <a href="#accordion5" class="accordion-trigger" data-accord-group="group1">전자담배 사용시 인체에 무해할까요?</a>
                                <div id="accordion5" class="accordion-content collapsed">
                                        <p>전자담배 액상에 포함된 니코틴은 소변과 땀으로 배출되지만 과다 섭취 시에는 혈관 수축과 같은 병을 유발할 수 있습니다. 따라서 지나친 사용은 피하시기 바랍니다. </p>
                                </div>
                        </li>
                        <li>
                                <a href="#accordion6" class="accordion-trigger" data-accord-group="group1">기타 경고사항</a>
                                <div id="accordion6" class="accordion-content collapsed">
                                        <p> 1. 니코틴은 중독성 물질입니다.<br>
                                                2. 지나친 흡연은 당신의 건강에 해롭습니다.<br>
                                                3. 제품은 어떤 질병에 대해서도 진단, 치료, 예방 등의 용도로 사용되지 않습니다.<br>
                                                4. 호흡기 질환, 심장 질환, 고혈압 또는 당뇨병 등의 질환이 있을 경우 사용하지마십시오.<br>
                                                5. 임신 중에는 절대 사용하지 마십시오.<br>
                                                6. 구역질, 현기증, 약한 또는 빠른 심장  박동, 구토, 설사 또는 어떤 부정적인 신체 증상을 경험 하는 경우 이 제품의 사용을 즉시 중단하십시오.<br>
                                                7. 유아/어린이/청소년/애완동물로부터 멀리하십시오. </p>
                                </div>
                        </li>
                    </ul>
                </div>
               
                
            </main>
        
        <footer class="f3f3f3-footer nanumbarungothic">
            <?php include "footer.php"; ?>
        </footer>
        </div>
        <script type="text/javascript">$(".accordion-trigger").QuickAccord();</script>
        <script src="js/nav-bar.js"></script>


        <script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
        <script type="text/javascript">
        if(!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "1a4765f2d0272c";
        wcs_do();
        </script>
    </body>
</html>