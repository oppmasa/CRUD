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

        $sql = "DELETE FROM tubuyaki WHERE id = :id";
 
        // 削除するレコードのIDは空のまま、SQL実行の準備をする
        $stmt = $dbh->prepare($sql);
        
        // 削除するレコードのIDを配列に格納する
        $params = array(':id'=>$id);
        
        // 削除するレコードのIDが入った変数をexecuteにセットしてSQLを実行
        $stmt->execute($params);
        
        // 削除完了のメッセージ
        echo '削除完了しました';

        // (6) データベースの接続解除
        $pdo = null;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
<a href="index.php">戻る</a>
</body>
</html>