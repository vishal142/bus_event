<?php
	
	$begin = new DateTime('2020-02-10');
	$end = new DateTime(date('Y-m-d',strtotime('+60 days')));
	$interval = DateInterval::createFromDateString('2 day');
	$period = new DatePeriod($begin, $interval, $end);
	$newdata = array();
	foreach($period as $dt) {
    $new_array = array('title'=>'Morning Bus Coming..!!','start'=>$dt->format("Y-m-d"));
    $newdata[] = $new_array;

	}

	echo json_encode($newdata);
?>