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
$now = new DateTime();
$dsn = 'mysql:dbname=test1; host=localhost';
$username= 'root';
$password= '';

try{
    // PDOのインスタンスを生成
    $dbh = new PDO($dsn, $username, $password);
    $sql = "INSERT INTO tubuyaki (toukousya, tubuyaki, date) VALUES (:name, :content, :date)";

    //挿入する値は空のまま、SQL実行の準備をする
    $stmt = $dbh->prepare($sql);

    // 挿入する値を配列に格納する

    $params = array(':name' => $_POST['your_name'], ':content' => $_POST['content'], ':date' => $now->format('Y-m-d'));
    

    //挿入する値が入った変数をexecuteにセットしてSQLを実行
    $stmt->execute($params);

    // データベースの接続解除
    $pdo = null;
        

} catch(PDOException $e){
        echo "失敗:" . $e->getMessage() . "\n";
        exit();
    }
?>

<a href="index.php">戻る</a><br>
<a href="selectAll.php">表示</a><br>
<a href="select.php">指定表示</a><br>
<a href="update.php">更新</a><br>
<a href="delete.php">削除</a><br>


</body>
</html>