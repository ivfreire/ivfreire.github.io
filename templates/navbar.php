<?php
	$domain = "https://www2.if.usp.br/~icarovf";
	if (isset($_GET["lang"])) {
		if ($_GET['lang'] == "en") {
			$domain .= "/en";
			echo "
				<nav class='navigation'>
					<div class='column'>
						<ul class='menu'>
							<a href='$domain'><li>Home</li></a>
							<a href='$domain/../archive'><li>Archive</li></a>
						</ul>
						<a href='$domain/..'>Portuguese</a>
					</div>
				</nav>
			";
		}
	} else {
		echo "
			<nav class='navigation'>
				<div class='column'>
					<ul class='menu'>
						<a href='$domain'><li>Início</li></a>
						<a href='$domain/archive'><li>Arquivo</li></a>
					</ul>
					<a href='$domain/en'>English</a>
				</div>
			</nav>
		";
	}
?>