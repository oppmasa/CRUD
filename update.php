<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name=”description” >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<?php
    $dsn = 'mysql:dbname=test1; host=localhost';
    $username= 'root';
    $password= '';

    try {

        // PDOのインスタンスを生成
        $dbh = new PDO($dsn, $username, $password);
        // (1) 更新するデータを用意
        date_default_timezone_set('Asia/Tokyo');
        $id = 24;
        $toukousya = '野村修平';
        $tubuyaki = '嘘です';

        $sql = "UPDATE tubuyaki SET toukousya = :toukousya, tubuyaki = :tubuyaki WHERE id = :id";
 
        // 更新する値と該当のIDは空のまま、SQL実行の準備をする
        $stmt = $dbh->prepare($sql);
        
        // 更新する値と該当のIDを配列に格納する
        $params = array(':toukousya' => $toukousya,':tubuyaki' => $tubuyaki, ':id' => $id);
        
        // 更新する値と該当のIDが入った変数をexecuteにセットしてSQLを実行
        $stmt->execute($params);
        
        // 更新完了のメッセージ
        echo '更新完了しました';

        // (6) データベースの接続解除
        $pdo = null;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
<a href="index.php">戻る</a>
</body>
</html>