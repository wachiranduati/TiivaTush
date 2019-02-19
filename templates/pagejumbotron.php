<?php 
echo "<div class=\"jumbotron\" style=\"position:absolute;z-index:9;display:none;\">
			<h1 class=\"display-3\">Hi! Welcome to Tiiva</h1>
			<p class=\"lead\">We are Tiiva, we are different, we literally deal in everything you can term as second hand. Moreso clothes, collectibles, household items and more.</p>
			<hr class=\"m-y-md\">
			<p>The guy who wrote this spent alot of time working on this, he hopes you really enjoy using this. Cheers. Need to know more about us? check out the <a href=\"aboutus.php\">About us page</a>. Want to know more about tiiva? check out the <a href=\"howto.php\">FAQs page</a>.</p>
			<p class=\"lead\">
				<a class=\"btn btn-primary btn-lg clsjumbtrn\" role=\"button\">close this notification</a>
			</p>
		</div>
	<script>
		$(\".clsjumbtrn\").click(function(){
	$(\".jumbotron\").hide();
			});
	</script>
		"
?>		