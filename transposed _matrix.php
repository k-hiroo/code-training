<?php
//http://vipprog.net/wiki/exercise.html#nfec0c0a
//転置行列
//一つ目の行列
$a = array();
$b = array(1,2,3);
$c = array(4,5,6);
$d = array(7,8,9);
array_push($a,$b);
array_push($a,$c);
array_push($a,$d);
foreach ($a as $aa) {
    foreach ($aa as $aaa) {
        echo $aaa." ";
    }
    echo "\n";
}
echo "\n";

//転置行列
$h = array();
$e = array();
$f = array();
$g = array();

$i = 1;
foreach ($a as $aa) {
    foreach ($aa as $aaa) {
        if($i==1){
        array_push($e,$aaa);
        }
        if($i==2){
        array_push($f,$aaa);
        }
        if($i==3){
        array_push($g,$aaa);
        }
        $i++;
    }
    $i = 1;
}
array_push($h,$e);
array_push($h,$f);
array_push($h,$g);
foreach ($h as $hh) {
    foreach ($hh as $hhh) {
        echo $hhh." ";
    }
    echo "\n";
}
?>
