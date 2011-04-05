<?php

echo implode(";", array('Pvm', 'Alkaa', 'Loppuu', 'Tapahtuma', 'Tyyppi'))."\n";

foreach($events as $event) {
	$data = array();
	$data[] = date('Y-m-d', strtotime($event['Event']['start']));
	$data[] = date('H:i', strtotime($event['Event']['start']));
	$data[] = date('H:i', strtotime($event['Event']['end']));
	$data[] = $event['Event']['title'];
	$data[] = $event['EventType']['name'];
	
	echo implode(";",$data)."\n";
}

?>
