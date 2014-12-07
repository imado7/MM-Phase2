<?php
	require_once dirname(__FILE__) . '/../include/lib/GeoIP/GeoIP.php';
	
	header('content-type: application/json');
	
	echo json_encode(array('region' => getGeoRegion()));