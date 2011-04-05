<?php

echo implode(";", array('Kurssi', 'Alkaa','Loppuu'))."\n";


foreach($userCourses as $course) {
	$data = array();
	$data[] = $course['Course']['name'];
	$data[] = $course['Course']['start'];
	$data[] = $course['Course']['end'];
	
	echo implode(";",$data)."\n";
}

?>
