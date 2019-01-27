<?php
//http://vipprog.net/wiki/exercise.html#nfec0c0a
//FizzBuzz
$a = 1;
while($a<=30){
    if($a%3==0&&$a%5==0){
    echo "FizzBuzz";

    }elseif($a%3==0&&$a%5!=0){
    echo "Fizz";
    }elseif($a%3!=0&&$a%5==0){
    echo "Buzz";
    }else{
    echo $a;
    }
    $a++;
}
?>
