<?php

function getGeoRegion() {
	//$geodata = json_decode(file_get_contents('http://api.ipinfodb.com/v3/ip-country/?key=07104d7cc80af7b951233052053c578bc04147a3e44ee4c0f99107233ef8f8b4&format=json&ip=' . $_SERVER['REMOTE_ADDR']), true);
	$geodata = json_decode(file_get_contents('http://api.hostip.info/get_json.php'), true);
	$regions = json_decode(file_get_contents(dirname(__FILE__) . '/regions.json'), true);

	foreach ($regions as $rId => $r) {
		foreach ($r as $country) {
			if ($country == $geodata['country_code']) {
				return $rId;
			}
		}
	}
	// default region...
	return "EMEA";
}