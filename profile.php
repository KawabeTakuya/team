<?php
// 送られてきたIDを元に生産者プロフィールを表示
$id=$_GET["p_code"];

// １.データ接続
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
// mst_contentからc_codeとp_codeをデータ取得
$stmt = $pdo->prepare("SELECT * FROM mst_content WHERE id = '{$p_code}'");
// $stmt = $pdo->prepare("SELECT * FROM mst_product  WHERE id = '{$id}'");
$status = $stmt->execute();
$r1=$stmt->fetch();

// mst_createrからc_codeを取得
$stmt = $pdo->prepare("SELECT * FROM mst_creater  WHERE id = '{$r1["c_code"]}'");
$status = $stmt->execute();
$r2=$stmt->fetch();

// mst_createrからp_codeを取得
$stmt = $pdo->prepare("SELECT * FROM mst_product  WHERE id = '{$r1["p_code"]}'");
$status = $stmt->execute();
$r3=$stmt->fetch();

// $view .="<img src=\"img/{$r2[""]}.jpg\" />";
$view .="<p>{$r2["name"]}</p>";
$view .="<p>{$r2["name_in_charge"]}</p>";
$view ="<img src=\"img/{$r3["p_img"]}\"/>";
$view .="<p>{$r3["p_name"]}</p>";
echo $view;

// foreach($stmt as $row){
// echo $row['name'];
// // echo $row['p_name'];
// }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="index.css" />
    <title>生産者プロフィール</title>
</head>
<body>

<!-- Main[Start] -->



<!-- Main[End] -->
</body>
</html>
