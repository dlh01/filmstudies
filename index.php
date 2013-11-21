<?php
include 'setup.php';
$boxoffice = get_boxoffice();
?>
<html>
<head>
	<title><?php echo PROJECT_NAME; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header class="page-header col-md-6 col-md-offset-3">
			<h1 class=""><?php echo PROJECT_NAME; ?></h1>
		</header>
		<main class="row">
			<section class="col-md-6 col-md-offset-3">
				<?php
				$movies = $boxoffice['movies'];
				foreach($movies as $movie) {
					$title = $movie['title'];
					$thumb = $movie['posters']['thumbnail'];
					$cast = $movie['abridged_cast'];

					echo "<div class='media'>";
						echo '<a href="#" class="pull-left">';
							echo '<img src="' . $thumb . '" alt="' . $title . '" class="media-object" />';
						echo '</a>';
						echo '<div class="media-body">';
							echo '<h4 class="media-heading">' . $title . '</h4>';
							echo "<ul>";
								foreach($cast as $actor) {
									$url = BASE_URL . "/api?type=stories&q=";
									$name = $actor['name'];
									$character = $actor['characters'][0];

									printf('<li><a class="film" href="%s">%s</a> (%s)</li>',
										$url . urlencode($name),
										$name,
										$character
									);
								}
							echo "</ul>";
						echo '</div>';
					echo "</div>";
				}
				?>
			</section>
		</main>
	</div>
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
</html>