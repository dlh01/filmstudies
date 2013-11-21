<?php

define('PROJECT_NAME', 'Film Studies');
define('BASE_URL', '');
define('RT_API_KEY', '');
define('NYT_API_KEY', '');

function debugger($input) {
	echo '<pre>';
	print_r($input);
	echo '</pre>';
}

function get_api_results($url) {
	$json = file_get_contents($url);
	$data = json_decode($json, true);
	return $data;
}

function get_boxoffice() {
	$rt_url = 'http://api.rottentomatoes.com/api/public/v1.0/lists/movies/box_office.json?&apikey=' . RT_API_KEY . '&limit=10&country=us';
	return get_api_results($rt_url);
}

function get_stories($query) {
	$nyt_url = 'http://api.nytimes.com/svc/search/v2/articlesearch.json?api-key=' . NYT_API_KEY . '&fq=source:("The+New+York+Times")';
	$nyt_request = '&q="' . urlencode($query) . '"';
	$url = $nyt_url . $nyt_request;
	return get_api_results($url);
}
