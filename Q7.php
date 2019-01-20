<?php
$begin = new DateTime( '1964-10-10' );
$end = new DateTime( '2020-07-25' );
$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
	if(decbin($date->format("Ymd"))==strrev(decbin($date->format("Ymd")))){
		echo $date->format("Ymd")."\n";
	}
}
