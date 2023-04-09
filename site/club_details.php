<!DOCTYPE HTML>
<html>

	<head>
		<title>Manchester United</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript>
			<link rel="stylesheet" href="assets/css/noscript.css" />
		</noscript>
	</head>

	<body class="index is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header" class="alt">
				<h1 id="logo"><a href="club_details.php">Manchester <span>United</span></a></h1>
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
						<li><a href="user_login.php" class="button primary">Sign Up</a></li>
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
				<!-- Three -->
				<section class="wrapper style3 container special">

					<header class="major">
						<h2>Old<strong>Trafford</strong></h2>
					</header>

					<div class="row">
						<div class="col-6 col-12-narrower">
							<section>
								<a href="#" class="image featured"><img
										src="<?php echo $data['overview']['stadium_img1']; ?>" alt="Stadium 1" /></a>
								<header>
								</header>
							</section>
						</div>
						<div class="col-6 col-12-narrower">
							<section>
								<a href="#" class="image featured"><img
										src="<?php echo $data['overview']['stadium_img2']; ?>" alt="Stadium 2" /></a>
							</section>
						</div>
					</div>
					<footer class="major">
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed molestiae dolor maxime eaque
							iure vel tempore doloremque iusto suscipit aliquam cum ratione, consectetur facilis!
							Assumenda consectetur optio dolorem error sequi eaque nemo, blanditiis saepe aliquid ducimus
							earum in, eius soluta labore veritatis maiores repellendus possimus nisi commodi adipisci
							voluptatum qui quae. Nemo ab, eligendi saepe error asperiores perspiciatis aliquid sequi
							quos dolorem, quasi dolores amet nisi! Distinctio id rerum nisi fugiat incidunt, ducimus
							dolor nemo laboriosam ab dolorem minima quo cumque necessitatibus
							saepe earum, magni optio vel aut suscipit eaque ratione culpa fuga? Eaque maiores eligendi
							sunt repudiandae a illo.</p>
						<!-- <ul class="buttons">
									<li><a href="#" class="button">See More</a></li>
								</ul> -->
					</footer>
					<br><br>
					<h2>Our Kits</h2>
					<div class="row">
						<!-- kits -->
						<div class="col-6 col-12-narrower">
							<section>
								<p>Home Kit</p>
								<img src="<?php echo $data['overview']['h_kit_img']; ?>" alt="Away kit" />
							</section>
						</div>
						<div class="col-6 col-12-narrower">
							<section>
								<p>Away Kit</p>
								<img src="<?php echo $data['overview']['a_kit_img']; ?>" alt="Away kit" />
							</section>
						</div>
						<div class="col-6 col-12-narrower">
							<section>
								<p>Third Kit</p>
								<img src="<?php echo $data['overview']['t_kit_img']; ?>" alt="Third kit" />
							</section>
						</div>
					</div>
				</section>
			</article>

			<!-- CTA -->
			<section id="cta">
				<?php
				$json = file_get_contents('jsons/club_details.json');
				$data = json_decode($json, true);
				$league_name = $data['overview']['league'];
				?>
				<ul class="buttons">
    					<li><a href="#" class="button"><?php echo $league_name ?>
				</a></li>

				</ul>
				<header>
					<h2>Want to<strong> know more</strong>?</h2>
					<p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
				</header>
				<footer>
					<ul class="buttons">
						<li><a href="club_history.php" class="button primary">Club History</a></li>
						<li><a href="club_management.php" class="button">Club Management</a></li>
					</ul>
				</footer>
			</section>
			<!-- Footer -->
			<footer id="footer">

				<ul class="icons">
					<li><a href="#" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands circle fa-facebook-f"><span class="label">Facebook</span></a>
					</li>
					<li><a href="#" class="icon brands circle fa-google-plus-g"><span class="label">Google+</span></a>
					</li>
					<li><a href="#" class="icon brands circle fa-github"><span class="label">Github</span></a></li>
					<li><a href="#" class="icon brands circle fa-dribbble"><span class="label">Dribbble</span></a></li>
				</ul>

				<ul class="copyright">
					<li>&copy; Untitled</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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