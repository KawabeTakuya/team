<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="index.css" />
    <title>user top</title>
</head>
<body>
<div id="wrapper"> <!-- すべてのコンテンツを囲むwrapper   -->
<!-- include header.php ここまで    -->

<a href="top.php?shop=aaaa&itemsxxxx">
  <img src="../team/img/user/logo_test.png" width="100" height="100" alt="サービスロゴ">
</a> <!-- (1) サービストップページ URLに生産者名と商品ID   -->

<!-- include navitation.php ここから  -->
 <nav class="globalMenu">
 <!--
   navigation 各ページへのリンク ※全ページ共通のコンポーネント
   1. Top 商品トップページ
   2. Story 生産者紹介・こだわり
   3. Contents 商品のことをもっと知る How to...コンテンツページ
   4. News ニュースページ
   5. Items 同生産者が販売するアイテム一覧
   6. Message メッセージページ 生産者とのダイレクトなコミュニケーション
   7. My page ユーザーマイページ (ログイン中のみ表示)
   8. Log in ログインページ (OAuthによるSNSログイン・Emailログイン、または新規登録)
 -->
   <ul>
     <li><a href="top.php?shop=aaaa&itemsxxxx">soxil</a></li> <!-- (1) サービストップページ URLに生産者名と商品ID   -->
     <li><a href="profile.php?shop=aaaa">生産者紹介</a></li> <!-- (2) 生産者紹介・こだわり URLは生産者名   --> 
     <li><a href="contents.php?shop=aaa&items=xxx">使い方</a></li> <!--  (3) How toコンテンツページ URLは生産者名、商品ID、コンテンツID  -->
     <li><a href="news.php?shop=aaa&items=xxx">お知らせ</a></li> <!-- (4) ニュース URLは生産者生と商品ID   -->
     <li><a href="list.php?shop=aaa">商品一覧</a></li> <!-- (5) 同生産者が販売するアイテム一覧 URLは生産者名  -->
     <li><a href="msg.php?shop=aaa&items=xxx">生産者と話す</a></li> <!-- (6) メッセージ  URLは生産者と商品ID   -->
     <li><a href="mypage.php">マイページ</a></li> <!-- My page ログイン中のみ表示   --> 
     <li><a href="login.php">ログイン</a></li> <!-- 新規ログイン⇒アカウント無い方は新規登録 myaccount.phpへアクセス  -->
   </ul>
 </nav>
 <!-- include navitation.php ここまで  -->
<!-- ハンバーガーメニュー -->
<div class="navToggle">
<span></span> 
<span></span> 
<span></span> 
<span>menu</span> 
</div>


 <header> 
 <!--    
   headerで表示する要素
   1. 商品トップコンテンツ (動画 or 写真)
   2. 商品フォロー機能
   3. サービス運営ページアイコンリンク
 -->
 <iframe width=100% height=600px scrolling=no src="../team/img/user/creator_test.jpg" ></iframe>

 -->
 <iframe width=100% height=600px scrolling=no src="../team/img/user/creator_test.jpg" ></iframe>

   <!-- <h1>商品トップコンテンツ (動画 or 写真)</h1> -->
   <ul>
    <li><a href="nice.php">いいね</div></a></li>
    <li><a href="follow.php">商品をフォロー</a></li>
    <li><a href="home.php">運営元ページ</a></li>
   </ul>
 </header>

 <main>
 <!--
   コンテンツを表示 トップページの場合、リード(導入部分)の表示となる
   1. 商品名
   2. 商品詳細
   3. コンテンツ リード部分
   4. ニュース 例 3件だけ表示
 --> 
  <section> 
    <h2>商品名</h2> <!-- 1. 商品の名称・品名・品番など  -->
    <a href="products.php?shop=aaa&items=xxx">もっと見る</a> <!-- 商品詳細ページへのリンク  -->
    <!-- 商品詳細  -->
    <p>商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト 商品紹介テキスト</p>
    <p>追加画像など・・・</p>
  </section>
 
   <section>
     <h2>使い方(コンテンツ)</h2> <!-- (3) コンテンツ How to 例: 登録されたうち1件を表示   -->
     <a href="contens.php?shop=aaa&items=xxx">もっと見る</a> <!-- コンテンツページへのリンク  -->
     <p>動画・写真</p>
     
     <p>コンテンツテキスト コンテンツテキスト コンテンツテキスト コンテンツテキスト コンテンツテキスト コンテンツテキスト コンテンツテキスト コンテンツテキスト </p>
   </section>

   <section>
     <h2>お知らせ</h2>
     <dl><dt>タイトル</dt><dd>本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋...<a href="#"><span>もっと読む</span></a></dd></dl>
     <dl><dt>タイトル</dt><dd>本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋...<a href="#"><span>もっと読む</span></a></dd></dl>
     <dl><dt>タイトル</dt><dd>本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋 本文抜粋...<a href="#"><span>もっと読む</span></a></dd></dl>
   </section>

 </main>

 <!-- include footer.php ここから   -->
 <footer>
 <!-- 
  footer 各ページへのリンク、SNSアイコン等表示
 -->
 </footer>
 <!-- include footer.php ここまで  -->

</div>  <!-- wrapper ここで終わり   -->

<script>
  // ハンバーガーメニュー
    $(function(){
      $('.navToggle').click(function(){
        $(this).toggleClass('active');
        console.log(this);
        if($(this).hasClass('active')){
          $('.globalMenu').addClass('active');
      }else{
        $('.globalMenu').removeClass('active');
        }
      });
    });
  </script>

</body>
</html>
<!-- include footer.php ここまで -->