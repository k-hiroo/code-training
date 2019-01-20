<?php
$cards = array();
for($i=1;$i<=100;$i++){
  $cards += array($i=>'back');
}
for($i=2;$i<=100;$i++){
  for($j=1;$j<=100;$j++){
    if($j%$i==0){
      if($cards[$j]=='back'){
        $cards[$j]='front';
      }else{
        $cards[$j]='back';
      }
    }
  }
}
foreach($cards as $key=>$sides){
  if($sides=='back'){
    echo $key."\n";
  }
}
