<!DOCTYPE HTML>

<html>
	<head>
		<title>No Sidebar - Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
							<header id="header">
					<h1 id="logo"><a href="club_details.php">Manchester <span>United</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="#">Club History</a></li>
							<li class="submenu">
								<a href="#">Layouts</a>
								<ul>
									<li><a href="club_news.php">Club News</a></li>
									<li><a href="squad.php">Our Squad</a></li>
									<li class="submenu">
										<a href="#">Submenu</a>
										<ul>
											<li><a href="club_history.php">Club History</a></li>
											<li><a href="club_management.php">Club Management</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="user_login.php" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>
			<!-- Main -->

			<!-- Main -->
				<article id="main">
					<header class="special container">
						<span class="icon solid fa-history"></span>
						<h2>Our<strong>History</strong></h2>
					</header>
					<!-- One -->
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>
											<?php
											// Read the JSON data from file
											$data = file_get_contents('jsons/history.json');

											// Decode the JSON data into a PHP array
											$data = json_decode($data, true);

											// Get the image URL from the array
											$imageUrl = $data['Image'];

											// Output the HTML for the image
											echo '<a href="#" class="image featured"><img src="' . $imageUrl . '" alt="" /></a>';
											
											$json = file_get_contents('jsons/history.json');
											$data = json_decode($json, true);
											echo '<li>Founded: ' . $data['founded'] . '</li>';
											echo '<ol>Founders: ' . implode(', ', $data['founders']) . '</ol>';
											echo '<li>Important Dates:</li>';
											echo '<ul>';
											foreach ($data['important_dates'] as $date) {
												echo '<ol>' . $date['year'] . ': ' . $date['event'] . '</ol>';
											}
											echo '</ul>';
											echo '<li>Key Trophies:</li>';
											echo '<ul>';
											foreach ($data['key_trophies'] as $trophy) {
												echo '<ol>' . $trophy['name'] . ': ' . $trophy['count'] . '</ol>';
											}
											echo '</ul>';
											echo '<li>Club Legends: ' . implode(', ', $data['club_legends']) . '</li>';
											?>
										</ul>
									</section>
								</div>
						</section>
				</article>

			<!-- Footer -->
				<footer id="footer">

					<ul class="icons">
						<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a></li>
						<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>