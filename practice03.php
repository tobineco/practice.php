<?php

$name="Kato";
if($name="Kato"){
    echo "私は 加藤 です";
   //echo "私は".$name."です";
}else{
    echo "加藤ではありません";
}
echo "\n";

$total=0;

for($i=0; $i<=10000; $i++){
    $total+=$i;
}
echo $total."\n";

$fruits=array("apple","orange","lemon","banana","pear");

for($i=0; $i<count($fruits); $i++){
    echo $fruits[$i];
    echo "\n";
}

echo "\n";

foreach($fruits as $fruit){
    echo $fruit."\n";
}

echo "\n";

/* for文の始めの値を定義する */
$start=1;
// for文の終わりの値を定義する
$end=100;

for($i=$start; $i<=$end; $i++){
    
    // 5で割り切れたら{}内を実行する
    if($i %5==0){
        echo $i."\n";
    }
}