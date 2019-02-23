<?php
function pageTitle($title){
	echo "
		<div class=\"row\">
			<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
				<h1 class=\"text-center text-uppercase\" style=\"margin:1px;padding:1px;\">
					$title
				</h1>
			</div>
		</div>
	";
	// added this
	require 'templates/pagejumbotron.php';
	require 'templates/tawkio.php';
	// added this
}
?>