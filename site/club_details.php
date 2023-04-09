<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Manchester United</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1 id="logo"><a href="index.php">Manchester <span>United</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="#">Home</a></li>
							<li class="submenu">
								<a href="#">Layouts</a>
								<ul>
									<li><a href="club_news.php">Club News</a></li>
									<li><a href="squad.php">Our Squad</a></li>
									<li class="submenu">
										<a href="#">More</a>
										<ul>
											<li><a href="club_history.php">Club History</a></li>
											<li><a href="club_management.php">Club Management</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="inner">
						<header>
							<?php
							// Read the JSON file
								$json = file_get_contents('jsons/club_details.json');

								// Convert JSON to PHP array
								$data = json_decode($json, true);

								// Extract the club name and logo URL from the array
								$club_name = $data['overview']['club_name'];
								$logo_url = $data['overview']['logo_url'];
								?>
								<h2>
									<?php echo $club_name; ?>
								</h2>
								<img src="<?php echo $logo_url; ?>">
						</header>
					</div>
				</section>

			<!-- Main -->
				<article id="main">
					<!-- <header class="special container">
						<span class="icon solid fa-chart-bar"></span>
						<h2>As this is my <strong>twentieth</strong> freebie for HTML5 UP
						<br />
						I decided to give it a really creative name.</h2>
						<p>Turns out <strong>Twenty</strong> was the best I could come up with. Anyway, lame name aside,
						<br />
						it's minimally designed, fully responsive, built on HTML5/CSS3,
						and, like all my stuff,
						<br />
						released for free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0</a> license. Have fun!</p>
					</header> -->

					<!-- Three -->
					<section class="wrapper style3 container special">

							<header class="major">
								<h2>Old<strong>Trafford</strong></h2>
							</header>

						<div class="row">
								<div class="col-6 col-12-narrower">
									<section>
										<a href="#" class="image featured"><img src="<?php echo $data['overview']['stadium_img1']; ?>"
														alt="Stadium 1" /></a>
												<header>
										</header>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, facilis.</p>
									</section>
								</div>
								<div class="col-6 col-12-narrower">
									<section>
										<a href="#" class="image featured"><img src="<?php echo $data['overview']['stadium_img2']; ?>"
												alt="Stadium 2"/></a>
									</section>
								</div>
						</div>
							<footer class="major">
								<ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul>
							</footer>

					</section>
				</article>

			<!-- CTA -->
				<section id="cta">
					<header>
						<h2>Ready to do <strong>something</strong>?</h2>
						<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a href="#" class="button primary">Take My Money</a></li>
							<li><a href="#" class="button">LOL Wut</a></li>
						</ul>
					</footer>
				</section>

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
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>