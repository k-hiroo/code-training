<?php
//短さ重視
for ($i = 1000; $i < 10000; $i ++) {
  if(($i == strrev(substr($i, 0, 1) * substr($i, 1, 1) * substr($i, 2, 1)*substr($i, 3, 1)))||($i == strrev(substr($i, 0, 1) * (int)ltrim((string)substr($i, 1, 3),'0') ))||($i == strrev((int)ltrim((string)substr($i, 0, 3),'0') * substr($i, 3, 1)))||($i == strrev((int)ltrim((string)substr($i, 0, 2),'0') * substr($i, 2, 1) * substr($i, 3, 1)))||($i == strrev(substr($i, 0, 1) * (int)ltrim((string)substr($i, 1, 2),'0') * substr($i, 3, 1)))||($i == strrev(substr($i, 0, 1) * substr($i, 1, 1) * (int)ltrim((string)substr($i, 2, 2),'0')))){
    echo $i;
  }
}
//理解しやすさ重視
if($i == strrev(substr($i, 0, 1) * substr($i, 1, 1) * substr($i, 2, 1)*substr($i, 3, 1))){
  echo $i;
}
if($i == strrev(substr($i, 0, 1) * (int)ltrim((string)substr($i, 1, 3),'0') )){
  echo $i;
}if($i == strrev((int)ltrim((string)substr($i, 0, 3),'0') * substr($i, 3, 1))){
  echo $i;
}if
($i == strrev((int)ltrim((string)substr($i, 0, 2),'0') * substr($i, 2, 1) * substr($i, 3, 1))){
  echo $i;
}if
($i == strrev(substr($i, 0, 1) * (int)ltrim((string)substr($i, 1, 2),'0') * substr($i, 3, 1))){
  echo $i;
}if
($i == strrev(substr($i, 0, 1) * substr($i, 1, 1) * (int)ltrim((string)substr($i, 2, 2),'0'))){
  echo $i;
}
