<?php
// // 各便利な関数をまとめて管理しておくファイル
// session_start();

// ログインチェック ログインしているユーザーだけにコンテンツを表示したい場合にfunctions.phpの後に呼び出し
function chkSsid(){
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()){
    exit("LoginError.");
  }else{
   session_regenerate_id(true); // 新しいidを取得
   $_SESSION["chk_ssid"]=session_id(); // 新しいidを$_SESSION["chk_ssid"];に入れる
  }
}

// DB接続
function db_conn(){
    try {
        //Password:MAMP='root',XAMPP=''
        //dbnameを"team"に変更しました
        $pdo = new PDO('mysql:dbname=team;charset=utf8;host=localhost','root','root');
        //$pdo = new PDO('mysql:dbname=redturtle44_artisans;charset=utf8;host=mysql743.db.sakura.ne.jp','redturtle44','aRsA-s-5G');
        return $pdo;
      } catch (PDOException $e) {
        exit('DB Connection Error'.$e->getMessage());
      }
}

// DBエラー処理
function sql_error($stmt){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQL ERROR can't fetch the data from DB for some reasons:".$error[2]);
}

// DBエラー処理2 MyCart.phpアクセスの場合、カートの中身が無い場合の処理
//function sql_error2($stmt){
  //execute（SQL実行時にエラーがある場合）
  //return $errormsg= '<p>エラー: カートの中にアイテムがありません。 </p><p><a class=\"border\" href=\"products_cat.php\">さっそく、商品を見てみましょう！</a><\p>';
  // $error = $stmt->errorInfo();
  // exit("SQL ERROR can't fetch the data from DB for some reasons:".$error[2]);
//}

//リダイレクト
function redirect($file_name){
  header("Location: ".$file_name);
  exit();
}

// htmlspecialcha 入力内容を無力化
function hCheck($data,$charset='UTF-8'){
  //dataが配列のとき
  if(is_array($data)){
   // 再帰呼び出し
   return array_map(__METHOD__, $data);
  }else{
    // HTMLエスケープを行う
    return htmlspecialchars($data, ENT_QUOTES, charset);
  }
}

?>