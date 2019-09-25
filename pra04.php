<?php

//(1)引数に数値指定実行で、数値を2倍にして返す関数を作成

function double($a){
$result=$a*2;
echo $result;
}
echo double(5)."\n";
echo "\n";

//(2)$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成

function add($a,$b){
   $result=$a+$b;
   echo $result."\n";
}
echo add(1,2);
echo "\n";

function ad($a,$b){
   $result=$a+$b;
   return $result;
}
echo ad(3,4)."\n";
echo "\n";

//(3)$arr という配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すと
//その要素をすべて掛けた結果を返す関数を作成

$arr=array(1,3,5,7,9);

function allkake($arr){
   $result=1;
   foreach($arr as $ar){
      $result*=$ar;
   }
   return $result;
}
echo allkake($arr)."\n";
echo "\n";

//(4)[応用]配列の中で一番大きい値を返す max_arrayという関数を途中から完成

function max_array($arr){
   //とりあえず配列の愛書の要素を一番大きい値とする
   $max_number=$arr[0];
   foreach($arr as $a){
      //どうしたらいいかわからない
      if($max_number<$a){
      $max_number=$a;
      }
   }
   return $max_number;
}
echo max_array($arr)."\n";
echo "\n";

//(5)次のビルトイン関数の用途、使い方を調べて実際に使う
//strip_tags =文字列からHTMLおよびPHPタグを取り除く

$text="<h1>タグが取り除かれます。</h1><p>タグは取り除かれません。</p>";

//strip_tags($text,"<p>");

echo strip_tags($text,"<p>")."\n";
echo "\n";

//array_push =1つ以上の要素を配列の最後に追加する

$arr2=array(2,4,6);

array_push($arr2,8,10);

foreach($arr2 as $ar2){
  echo $ar2;
}
echo "\n"; echo "\n";

//array_merge =ひとつまたは複数の配列を結合する

$arr3=array(3,6,9);
$arr4=array("A","B","C");

$arr5=array_merge($arr3,$arr4,$arr2);

foreach($arr5 as $ar5){
   echo $ar5;
}
echo "\n"."\n";

//time =現在のUnixタイムスタンプを取得する

echo time();        echo "\n"."\n";

//mktime =指定した日付のUnixのタイムスタンプを取得する

//現在のタイムゾーンが未設定？とのエラーにより、タイムゾーンを東京に設定
date_default_timezone_set('Asia/Tokyo');
print date('Y/m/d H:i:s');     echo "\n"."\n";

echo mktime();     echo "\n"."\n";

echo mktime(0,0,0,9,25,2020);     echo "\n"."\n";

//date =ローカルの日付/時刻を書式化する

echo date('Y/m/d H:i:s',10);     echo "\n"."\n";

echo date('Y/m/d H:i:s',-32400+10);     echo "\n"."\n";

echo date('Y年m月d日 G時i分s秒',mktime(17,30,0,1,1,2019));

echo "\n"."\n";

?>