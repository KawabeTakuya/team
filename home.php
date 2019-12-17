<?php
   // session start
   session_start();

   // functions include
   include(__DIR__.'/functions/home/functions.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home/home.css"> <!-- 運営元ページ用のcss  -->
    <title>サービスの運営元ホーム</title>
</head>
<body>
<div class="wrapper">

<!-- headerここから-->
<header> 
  <a href="home.php"><img src="./img/home/service_logo.png" width="255" height="287" alt="モノガタリ サービスロゴ" /></a>
  <h1>運営元のホームページ</h1>
</header>
<!-- headerここまで  -->


<!-- セラーログインページ    -->
<div>
<h2>販売者様ログイン</h2>
<p id="tpmsg" class="logad">こちらからアカウントにログインしてください。</p>
<?php   
if(isset($errMsg)){
  echo $errMsg;
}
?>
<!-- login_act.php は認証処理用のPHPです。 -->
<form id="login_form" name="form1" action="home_login_act.php" method="post">
<ul>
    <li>
      <input class="email" type="text" name="c_id" size="30" maxLength="50" placeholder="メール" />
    </li>
    <li>
      <input id="pwd" class="key" type="password" name="c_pass" size="30" maxLength="32" placeholder="パスワード" onChange=passChk() /></li>
    <li>
        <input type="checkbox" id="password-check" />&nbsp;&nbsp;パスワードを表示する
    </li>
    <li> 
      <input class="button" type="submit" value="ログイン" />
    </li>
</ul>
</form>

<p>新規登録は<a href="newacc.php">こちら</a></p>
</div>
<!-- セラーログイン ここまで --> 

</div> <!-- Wrapper ends here  -->

<!-- 運営元ページhome.phpおよび付随するページ向けのjs関数を読み込む --> 
<script type="text/javascript" src="js/home/functions.js"></script>

</body>
</html>