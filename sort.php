<?php
//配列内の数字を小さいものからソートする
//https://teratail.com/questions/13671

$array = array(
    57,
    47,
    25,
    58,
    71,
    98,
    28,
    17,
    3,
    73
);
$i = 1;
while ($i > 0) {
    $i = 0;
    for ($j = 0; $j < 9; $j ++) {
        if ($array[$j] > $array[$j + 1]) {
            $element = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $element;
            $i ++;
        }
    }
}
foreach ($array as $value) {
    echo "answer : " . $value . "\n";
}
