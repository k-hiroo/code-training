<?php
$coin10 = 10;
$coin50 = 50;
$coin100 = 100;
$coin500 = 500;
$count = 0;

for($countCoin10=0;$countCoin10<=15;$countCoin10++){
  for($countCoin50=0;$countCoin50<=15;$countCoin50++){
    for($countCoin100=0;$countCoin100<=10;$countCoin100++){
      for($countCoin500=0;$countCoin500<=2;$countCoin500++){
        if($coin10*$countCoin10+$coin50*$countCoin50+$coin100*$countCoin100+$coin500*$countCoin500==1000&&$countCoin10+$countCoin50+$countCoin100+$countCoin500<=15){
          $count++;
        }
      }
    }
  }
}
echo $count;
