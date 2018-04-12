<!DOCTYPE html>
<html>

<head>
	<title>Hello Site</title>
	<!--This site is sample project for HNG internship 4.0 for stage1.
	It contains a little of my interests. by Jeremiah Righteous -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="heroImage"> </section>

	<section class="content">		
		<h1>HELLO THERE,</h1>
		<p class="about">I’m Jeremiah Righteous and i’m interested <br>
		in web development and creative design.</p>
		
		<?php
	
		$today = date("h:iA. l dS F, Y") ."<br>";
		echo "<p id='currentTime'>".$today."</p>";

		?>
	</section>

	<section class="footer">
		<p>Designed by:  @jeremiahriz  <span style="font-size: 30px; font-style: bold;">|</span>  Hotel NG Internship 4.0</p>
	</section>
		
</body>
</html>