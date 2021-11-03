<?php
	include ('templates/locale.php');
	
	if (isset($_GET['q'])) $id = $_GET['q'];
	else exit;

	// Load JSON file
	$project = json_decode(file_get_contents('projects/'.$id.'/content.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $project['title']; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/project.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
	<?php include('templates/navbar.php'); ?>
	<div class="page">
		<div class="column">
			<div class="container">
				<div class="left">

				</div>
				<div class="right">
					<div class="article">
						<?php
							echo "
								<div class='header'>
									<h1>".$project['title']."</h1>
									<span class='tagline'><i>".$project['tagline']."</i></span>
									<img src='projects/".$id."/header.jpg'/>
								</div><br>
							";

							foreach($project['article'] as $element) {
								if ($element['type'] == 'text') echo $element['text']."<br>";
								if ($element['type'] == 'image') echo "<img src='projects/".$id."/".$element['src']."' /><p>".$element['description']."</p>";
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('templates/footer.php'); ?>
</body>
</html>