<?php
$count = 0;
//ループしているかを判定する関数
function isLoop($initialNum,$currentNum){
  global $count;
  if($currentNum%2==0){
    $currentNum = $currentNum/2;
    if($currentNum==$initialNum){
      $count++;
      return;
    }elseif($currentNum==1){
      return;
    }
    isLoop($initialNum,$currentNum);
  }else{
    $currentNum = $currentNum*3+1;
    if($currentNum==$initialNum){
      $count++;
      return;
    }elseif($currentNum==1){
      return;
    }
    isLoop($initialNum,$currentNum);
  }
}

for($initialNum=0;$initialNum<=10000;$initialNum=$initialNum+2){
  $currentNum = $initialNum*3+1;
  isLoop($initialNum,$currentNum);
}
echo $count;
