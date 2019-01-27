<?php
//http://vipprog.net/wiki/exercise.html#nfec0c0a
//うるう年判定
$a = 1;
while($a<=2000){
    if(($a%4==0&&$a%100!=0)||($a%400==0)){
        echo $a."年は潤年です"."\n";
    }
    if(($a%4!=0)||($a%100==0&&$a%400!=0)){
        echo $a."年は平年です"."\n";
    }
    $a++;
}
?>
