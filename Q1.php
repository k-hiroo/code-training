<?php
//プログラマ脳を鍛える数学パズル Q01
$num = 11;
$decision = true;
while ($decision) {
    if ($num == strrev($num) && decbin($num) == strrev(decbin($num)) && decoct($num) == strrev(decoct($num))) {
        echo $num;
        $decision = false;
    }
    $num += 2;
}
