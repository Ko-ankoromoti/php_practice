<?php
echo 'hello php';
echo "\n";

$a = 3;
$b = 7;
echo $a+$b;
echo "\n";

$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
echo "\n";

$hello = "Hello,";
$name = "Anzai,";
$world = "'s World!";
echo $hello . $name . $world;
echo "\n";

$tech_boost = 'tech';
$tech_boost .= 'boost';
echo $tech_boost;
echo "\n";

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar_2018["December"];
echo "\n";




$name = "Anzai";
if ($name == "Anzai") {
  echo "私はあなたの名前です。";
} else {
  echo "あなたの名前ではありません";
}
echo "\n";


$name = "Anzai";
if ($name != "Anzai") {
  echo "私は あなたの名前 です。";
} else {
  echo  "あなたの名前ではありません";
}
echo "\n";



$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

echo "\n";



$fruits = array("strawbrry", "banana", "painappuru", "kiui", "orange");
echo count($fruits);
foreach($fruits as $fruits) {
  echo "要素は" . $fruits;
  echo "\n";
}
 echo "\n";
 
 
 /* for文の始めの値を定義する */
$start = 0;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++){

 // 5で割り切れたら{}内を実行する
  if($i % 5 === 0){
  echo $i;
  }
}
echo "\n";



