<?php
//棒を切断する回数を数える関数
function countCutting($n,$m,$stick,$count){
  if($stick>=$n){
    echo $count;
  }elseif($stick<=$m){
    $stick = $stick*2;
    $count++;
    countCutting($n,$m,$stick,$count);
  }else{
    $stick = $stick+$m;
    $count++;
    countCutting($n,$m,$stick,$count);
  }
}
//問題１
countCutting(20,3,1,0);
echo "\n";
//問題２
countCutting(100,5,1,0);
?>
