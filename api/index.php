<?php
if ( empty($_GET) ) {
	echo "Nothing requested.";
}

if (! isset($_GET['type'])) {
	echo "Missing \"type\" request.";
}

if ( isset($_GET['type']) && ($_GET['type'] != 'stories') ) {
	echo "Invalid \"type\" request.";
}

include '../setup.php';
$query = $_GET['q'];
$result = get_stories($query);
$heading = 'Film studies: ' . $query;

?>
<html>
<head>
	<title><?php echo $heading; ?></title>
</head>
<body>
	<ul>
		<?php
		$docs = $result['response']['docs'];
		foreach ($docs as $doc) {
			$url = $doc['web_url'];
			$date = date( 'F d, Y', strtotime($doc['pub_date']));
			$headline = $doc['headline']['main'];
			$byline = $doc['byline']['original'];
			$abstract = $doc['abstract'];

			printf('<li><a href="%s">%s</a>, %s (%s)<p>%s</p></li>',
				$url,
				$headline,
				$byline,
				$date,
				$abstract
			);
		}
		?>
	</ul>
</body>
</html>