

<?php

// 何かを出し入れするような箱のようなイメージ

$string= 'こんにちは';
$name= 'テック太郎さん';
// 変数名は自由に決めることができる
echo $name.$string;
// 定数は上書きできない名前

// 定数の書き方 define( 定数名、値)

// 定数を出力するときは＄はいらない

?>

<?php
define('GREETING','Hello TECH.I.S.');
echo GREETING;
?>
<?php
echo 3*4;
echo '<br>';
// 改行をしたい場合は’<br>'を使う＊シングルクォーテーション忘れないように
echo 12/4;
echo 3%2;
// 余りを計算したい場合は％を使う
$price = 500;
// 単項演算子
$price ++;
// インクリメント（++することで１づつ＋される）

echo $price;
// ↑501
$price ++;
echo $price;
// ↑502
$price --;
// デクリメント１マイナスされる
echo $price;
// 501

$price+=10;
// 元の数に対して＋される(-,*,/も可能)
echo $price;
// 511

echo 1+5*3;
// 16
echo (1+5)*3;
// 18
echo'<br>';
// phpで扱えるデータの種類
echo'$price :';
var_dump($price);
// どのデータ型か確認する方法
$string = "aaa";
$integer = 200;
$bool = true;
$float = 1.5;

echo '$string : ';
var_dump($string);
echo "<br>";

echo '$integer : ';
var_dump($integer);
echo "<br>";

echo '$bool : ';
var_dump($bool);
echo "<br>";

echo '$float : ';
var_dump($float);
echo "<br>";

// if文の書き方
$line = 30;
$score= 100;
if($line > $score){ //lineが$scoreよりも大きいとき
    echo "赤点";
}elseif($score == 100){ //１００点の時
    echo '満点';
}else{  //３０点以上１００点未満の時
    echo '合格';
}
// if(A $$ B) //両方条件があってたら
    echo "Q";

// if(!A < B)の場合はA>Bということになる。
$name ='テック太郎';
if($name == 'テック太郎'){
    echo 'テック太郎さん、こんにちは';
}else{
    echo 'あなたは誰ですか？';
}
echo'<br>';
// 時間を東京に設定
date_default_timezone_set('Asia/Tokyo');

$hour = date("H");
echo $hour;
echo'<br>';

if(6<=$hour && $hour<10){
    echo 'おはようございます';
}elseif(11<=$hour && $hour<15){
    echo 'こんにちわ';
}elseif(16<=$hour && $hour<20){
    echo 'こんばんわ';
}elseif(21<=$hour && $hour<24){
    echo 'お疲れ様です。早めに寝てください';
}elseif(1<=$hour && $hour<5){
    echo 'zzZ';
}
// スイッチ分の考え方は『〜の時』というイメージ
// 同じ変数を異なる値と比較し、
// 値に応じて異なったコードを実行したい場合は、if文よりもswitch文の方が簡潔に書くことが出来ます。
$pref = '広島';
switch($pref){
    case'愛媛':
        echo "{$pref}の名産品はみかんです。";
    break;
    case'広島':
        echo "{$pref}の名産品はレモンです。";
    break;
    case'愛知':
        echo "{$pref}の名産品は味噌煮込みうどんです。";
    break;
};
echo'<br>';

$abo ='パパ';
switch($abo){
    case'彩琴':
        echo "{$abo}はママとパパの宝物です";
    break;
    case'琴葉':
        echo "{$abo}はとてもいたずらっ子ですが癒しキャラです";
    break;
    case'パパ':
        echo "{$abo}はへったれです。";
    break;
};
echo'<br>';
$week = date('w'); //(0:日曜,1:月曜,2:火曜　～ 6:土曜)
echo $week;
echo'<br>';
switch($week){
    case 0;
        echo '日曜日';
    break;
    case 1;
        echo '月曜日';
    break;
    case 2;
        echo '火曜日';
    break;
    case 3;
        echo '水曜日';
    break;
    case 4;
        echo '木曜日';
    break;
    case 5;
        echo '金曜日';
    break;
    case 6;
        echo '土曜日';
    break;
};
// for：「繰り返し回数が決まっている処理」
// １０回計算を繰り返す」処理であればfor文の方が向いてる。
// while：「繰り返し回数が決まっていない処理」
// 「特定の数字が出るまで計算する」であればwhile文の方が向いてる。

echo'<br>';
// 1000円を年利5%で預金したとき、預金額が2000円を超えるまでの年数を計算するプログラム

$amount = 1000; //預金額
$year = 0; //0年からスタート
// while (条件式){
//   実行する処理1;
//   実行する処理2;
// }
while($amount < 2000){
$amount = $amount * 1.05;
$year++;
}
echo $year;

echo'<br>';
// While文演習問題１
$suji = 1;
while($suji<=100){
    echo $suji;
    $suji++;
    echo'<br>';
}

// While文演習問題２
$tensu = 1;
echo'テスト';
echo'<br>';
    while($tensu<10){
    echo $point = rand(1,100);
    $tensu++;
    echo'<br>';
    if($point>=60){
        echo 'やったね、合格';
    }else{
        echo'ざんねん、不合格。';
    }
    echo'<br>';
};
// テックアイエス演習問題
for($iti = 1; $iti <= 100; $iti++){
    echo $iti;
    echo'<br>';
}
// テックアイエス　for文　演習問題２
for($i = 1; $i <= 10; $i++){
    echo $i.':';
    echo '<br>';
    if($i % 2 === 0 && $i % 3 ===0){
        echo '２と３の倍数。';
    }elseif($i % 2 === 0 && $i % 5 ===0){
        echo '２と５の倍数。';
    }elseif($i % 3 === 0){
        echo '3の倍数。';
    }elseif($i % 5 === 0){
    echo '5の倍数。';
    }elseif($i % 2 === 0){
    echo '２の倍数。';
}
echo '<br>';
}
echo 'テックアイエス　continue演習問題１';
echo '<br>';
$skip=array(1,15,33);
$count =0;

while($count<=100){
    
    if($count===1 or $count===15 or $count===33){
        $count++;
        continue;
    }
   
    echo $count;
    echo'<br>';
    $count++;
}
$youbi=date('w');

?>