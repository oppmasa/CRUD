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
$sum = 0;
$str = ""; 
    for($i = 1; $i <= 100; $i++){
        if($i % 3 === 0){
            $str = "Fizz";
            if($i % 5 === 0){
                $str .= "Buzz";
            };
        }elseif($i % 5 === 0){
            $str = "Buzz";
        }else{
            $str = $i;
        }
        echo $str;
        echo '<br>';
    };
?>
</body>
</html>