<?php
// h( ) 함수를 불러 옵니다. [레시피 041]
require_once './lib/h.php';

// 클릭재킹(clickjacking) 대책을 합니다.
header('X-FRAME-OPTIONS: SAMEORIGIN');

// 세션을 시작합니다.
session_start();

// 고정 토큰를 생성해 세션 변수에 저장합니다. 
// 폼의 Hidden 필드에서 출력합니다.
if (! isset($_SESSION['token'])) {
  $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
}
$token = $_SESSION['token'];
?>

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
           <main class="inform godo question">
               <div class="sub_liquid">
                   <div class="txt">
                        <h1>연락처</h1>
                        <div class="sub_line"></div>
                        <h3>중국/문의</h3>
                   </div>
               </div>   
               <div id="question">
                <div class="email">
                    <p>
                        노보 제품에 대해 궁금한 사항이 있으시면 질문을 보내주세요. 
                        이른 시일 내에 메일로 답변해드리겠습니다.
                    </p>            

                    <?php
                    // 에러가 있으면 표시합니다.
                    if (isset($_SESSION['error'])) {
                      foreach ($_SESSION['error'] as $value) {
                        echo '  <span style="color:red;">' . h($value) . '</span><br>' . "\n";
                      }
                    }

                    // 3항 연산자 [레시피 025]를 사용하여 세션에 저장된 데이터가
                    // 있는 경우, 변수에 대입합니다.
                    $name    = isset($_SESSION['name'])    ? $_SESSION['name']    : '';
                    $email   = isset($_SESSION['email'])   ? $_SESSION['email']   : '';
                    $comment = isset($_SESSION['comment']) ? $_SESSION['comment'] : '';
                    ?>

                    <form id="simpleForm" action="mailform_thanks.php" method="post" class="well">
                        <div class="form-group">
                          <dl>
                            <dt><label id="labelName" for="name" class="control-label">名(Name)</label></dt>
                            <dd><input type="text" name="name" id="name" class="form-control required"
                                value="<?php echo h($name); ?>" maxlength="100" style="border:1px solid #1b1e21;" required></dd>
                          </dl>
                        </div>
                        <div class="form-group">
                          <dl>
                            <dt><label id="labelEmail" for="email" class="control-label">电子邮件(E-mail)</label></dt>
                            <dd><input type="email" name="email" id="email" class="form-control required"
                                value="<?php echo h($email); ?>" maxlength="256" style="border:1px solid #1b1e21; text-align:left" required></dd>
                          </dl>
                        </div>
                        <div class="form-group">
                          <dl>
                            <dt><label id="labelQuestion" for="comment" class="control-label">内容(Question)</label></dt>
                            <dd><textarea rows="12" cols="30" id="comment" name="comment" class="form-control required" style="border:1px solid #1b1e21;" required><?php echo h($comment); ?></textarea></dd>
                          </dl>
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <input type="hidden" name="token" value="<?php echo h($token); ?>" class="btn btn-primary">
                            <input type="submit" name="submit" value="전송" id="submitBtn" class="btn btn-primary" style="background-color:#545e69; border:0px">                            
                        </div>
                    </form>             
                    
                </div>
               </div>
            </main>
        
        <footer class="nanumbarungothic">
            <?php include "footer.php"; ?>
        </footer>
        <script src="js/nav-bar.js"></script>

        <script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
        <script type="text/javascript">
        if(!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "1a4765f2d0272c";
        wcs_do();
        </script>
       </div>
    </body>
</html>