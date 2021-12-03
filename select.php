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
        $sql = 'SELECT * FROM tubuyaki WHERE ID = 25';

        // SQLの実行
        $query = $dbh->query($sql);

        // 検索結果を格納する
            //fetchAll　すべてを格納する
            //fetch   　一行目のみ格納する
        $row = $query->fetchAll(PDO::FETCH_BOTH);
            
        $table_row = '';
         foreach($row as $v){  //拡張for文
            $table_row .= '<tr>';
            $table_row .= '<td>'.$v["ID"].'</td>';
            $table_row .= '<td>'.$v["toukousya"].'</td>';
            $table_row .= '<td>'.$v["tubuyaki"].'</td>';
            $table_row .= '<td>'.$v["date"].'</td>';
            $table_row .= '</tr>';
        }
         echo "<table>";
         echo $table_row;
         echo "</table>";

         // データベースの接続解除
        $pdo = null;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
<a href="index.php">戻る</a>
</body>
</html>