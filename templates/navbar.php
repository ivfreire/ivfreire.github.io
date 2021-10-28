<?php
	if (isset($_GET["lang"])) {
		$domain .= "/en";
		if ($_GET['lang'] == "en") {
			echo "
				<nav class='navigation'>
					<div class='column'>
						<ul class='menu'>
							<a href='/en'><li>Home</li></a>
							<a href='/../archive'><li>Archive</li></a>
						</ul>
						<a href='/..'>Portuguese</a>
					</div>
				</nav>
			";
		}
	} else {
		echo "
			<nav class='navigation'>
				<div class='column'>
					<ul class='menu'>
						<a href='/'><li>Início</li></a>
						<a href='/archive'><li>Arquivo</li></a>
					</ul>
					<a href='en'>English</a>
				</div>
			</nav>
		";
	}
?>