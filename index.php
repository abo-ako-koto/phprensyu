<?php
echo '5. continue、break について'.'<br>';
echo 'テックアイエス　演習問題２'.'<br>'.'今月の土日以外の日と曜日を10日表示してください。

';

//$youbi=date('w');

$weekconfig = ['月','火','水','木','金','土','日','月','火','水','木','金']; //手入力しか方法はない？
$count = count($weekconfig); //配列の数
echo $youbi,'<br>'; //曜日は数字化される。

$targetDate = '2021-07-05';  //手入力


for($i = 0 ; $i<$count; $i++){
    $value = $weekconfig[$i];
if($value=='日' or $value=='土'){
continue;
}
    echo date("Ymd",strtotime("+{$i} day",strtotime($targetDate)))."\n";
    echo $value;
    echo '<br>';

}

echo "<br/><br/>";
$week = ['日','月','火','水','木','金','土',];
//$today = time();
$today = strtotime('2021-07-01');

$proc_day = strtotime( date('Y-m-01', $today) );//strtotime関数は1970年１月１日からの秒数
$end_day = strtotime( date('Y-m-t', $today) ); //tは末日という意味
//echo date('Y-m-01', $today);
$cnt = 0;
for( $n = $proc_day; $n <= $end_day; $n += 24 *3600 ){ //１日分の秒数をたすので２４時間の秒数
    $w = date('w',$n); //wは曜日を数字で表したもの　nは秒数
    if( $w == 0 || $w == 6 ) {
        continue; //曜日が、日曜日（０）、土曜日（６）の場合スキップ
    } else {
        echo date('Ymd',$n).' '.$week[$w]."<br/>\n"; //Yは２０２１年　mdは月と日
        $cnt ++;
    }
    if( $cnt >= 10  ){
        break; //１０日分までやったら強制終了
    }
}
echo date('w',$n); //なんで３？

echo '<br>'.'2.print_r()'.'<br>';
echo 'テックアイエス　演習問題1'.'<br>'.'1.　for文で1～100の値を配列に追加し、print_rで表示してみましょう。
作成する配列の例：[ 1, 2, 3, … 100]'."<br/>\n";


for($k=1 ; $k<=100 ; $k++){
    $r[]=$k;
};
print_r($r)."<br/>\n";
echo '<br>';
echo '<br>';
echo 'テックアイエス　演習問題2'.'<br>'.'10個の乱数が格納されている$data配列があります。$dataの中身を昇順(小さい順)に並べ替えて、print_rで出力しましょう。'."<br/>\n";
//10個の乱数の配列を生成する
$len = 10;
$data = [];
for( $n = 0; $n<$len; $n++ ){
$data[] = random_int( 0, $len );
}
sort( $data, SORT_ASC ) ; //昇順関数

print_r($data);
echo '<br>';
echo '<br>';
echo '<br>'.'二次元配列'.'<br>';



//２次元配列の書き方
$array = array(
    array('名前'=> '狩山', '住所'=> '愛媛', '年齢' => '20歳'), //0番目の配列
    array('名前'=> '永井', '住所'=> '香川', '年齢' => '30歳'), //1番目の配列
    array('名前'=> '森', '住所'=> '広島', '年齢' => '26歳'),   //2番目の配列
    array('名前'=> '櫻井', '住所'=> '愛媛', '年齢' => '35歳')  //3番目の配列
);
//出力の仕方
echo $array[0]['名前'];

//foreach(フォアイーチ)ループ処理　一度のループで取り出せるのは一つ。
$price = array(100,200,300);

//税込表示
foreach($price as $value){
    $result = $value * 1.1;
    echo $result;
}
echo '<br>';
echo '<br>';
echo 'テックアイエス　演習問題１'.'<br>'.'今月の日付をキーに、曜日を値とする配列を作成し、foreachを使って下記のような書式で表示してください。
【表示例】 ○日　○曜日<改行>'."<br/>\n";

date_default_timezone_set('Asia/Tokyo');
$week = ['日','月','火','水','木','金','土'];

$today = ['1'=>'水','2'=>'木','3'=>'金',]; //今月の日付はdate関数?
foreach($today as $key=>$value){ //1=>水曜日
    echo $key.'日'.$value.'曜日'."<br/>\n";
}
//ヒントのdate関数はどこに入れるの？
//key１つにvalue2つとかは可能？

$weekl = date('m/d');

echo $weekl;

$data = [ '今日は', date('m'), '月です' ];
$result = implode(',', $data);
echo $result;

$string = "1,2,3,4,5,6,7,8,9,10";
$aaa= explode(',',$string);
echo '<br>';
echo '<br>';
var_dump($aaa);
//ユーザー定義関数
//ユーザー定義関数の場合functionを最初に入力
function myTodaystring(bool $aaaa){
    $week = ['日','月','火','水','木','金','土'];
    if($aaaa){
        return date('m').'月'.date('d').'日'.$week[date('w')];
    }else{
    return date('m').'月'.date('d').'日';
    }
}
echo '<br>'.'<br>';
echo myTodaystring(false); //変数に置き換えることも可能

echo '<br>'.'<br>'.'練習問題１'.'<br>';
echo 'なんだチミは！！！！';
echo '<br>'.'練習問題2'.'<br>';
$tasizan='4+5=9';
echo $tasizan;
echo '<br>'.'練習問題3'.'<br>';

for($i=0;$i<=50;$i++){
    if($i % 2 !== 0){     
        continue;
    }
    echo $i;
    echo '<br>';
}
echo '<br>'.'練習問題５'.'<br>';
$tokyo ='東京';
echo '「2020年のオリンピック開催地',$tokyo,'です。」'; //セミコロンつけ忘れおおすぎ！！エラー出たらセミコロンあるか確認！！
echo '<br>'.'練習問題６'.'<br>';
$test=70;
echo $test;
if($test>80){
    echo '優';
}elseif($test>=65 || $test<80){
    echo '良';
}elseif($test>=65 || $test<=50){
    echo '可';
}else('不可');
echo '<br>'.'練習問題７'.'<br>';
$seiseki = 90;
echo "結果は{$seiseki}点です";
switch($seiseki){
    case($seiseki>=90);
    echo 'パーフェクトです';
    break;
    case($seiseki>=70);
    echo '素晴らしい';
    break;
    case($seiseki>=50);
    echo '合格です';
    break;
    echo '頑張りましょう';

}
echo '<br>'.'練習問題７'.'<br>';
$uma =['ディープインパクト','トウカイテイオー','スペシャルウィーク','スーパークリーク','メジロマックイーン','ダイユウサク','オグリキャップ','ウォッカ','ダイワスカーレット'];
$count=count($uma);
echo '<br>'.'出馬馬は'.$count.'頭です。'.'<br>';
for($i=0;$i<=$count;$i++){
echo'・'.$uma[$i].'<br>';
}
echo '<br>'.'練習問題8'.'<br>';
?>
