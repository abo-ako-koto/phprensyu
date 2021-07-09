<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム|架空の株式会社ダミー</title>
</head>
<body>
    
    
    
    <?php
    $name=$_POST['name'];  //$_postによって受け取ったデータを変数$nameに代入
    echo $name;
    echo 'さん、おはようございます。';
    setcookie('hello','world', time() + 10);
    echo '<br>';
    echo "setcookie expire set.";
    ?>
    <p></p>
    
    <a href="index.html">戻る</a>

</body> 
</html>
