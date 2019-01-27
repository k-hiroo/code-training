<?php
//https://teratail.com/questions/12792
//フィボナッチ数列

$answerArray[] = 1;
$first = 0;
$second = 1;
const COUNT = 49;
for ($i = 0; $i < COUNT; $i ++) {
    $answerArray[] = $first + $second;
    $first = $answerArray[$i];
    $second = $answerArray[$i + 1];
}
echo $answerArray[COUNT];
