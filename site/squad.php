<!DOCTYPE HTML>

<html>
	<head>
		<title>Manchester United Squad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>		
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
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
							<li><a href="#" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						
						<h2>Manchester United Squad</h2>
						<p>25-man squad</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
									<div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                          <thead class="thead-dark">
                                            <tr>
                                              <th>Name</th>
                                              <th>Position</th>
                                              <th>Age</th>
                                              <th>Nationality</th>
                                              <th>Shirt Number</th>
                                              <th>Appearances</th>
                                              <th>Goals</th>
                                              <th>Details</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                            $squad_data = json_decode(file_get_contents("jsons/squad_details.json"), true)["players"];
                                              foreach($squad_data as $player) {
                                                echo "<tr>";
                                                echo "<td>" . $player["name"] . "</td>";
                                                echo "<td>" . $player["position"] . "</td>";
                                                echo "<td>" . $player["age"] . "</td>";
                                                echo "<td>" . $player["nationality"] . "</td>";
                                                echo "<td>" . $player["shirt_number"] . "</td>";
                                                echo "<td>" . $player["appearances"] . "</td>";
                                                echo "<td>" . $player["goals"] . "</td>";
                                                echo "<td><a href=\"player_details.php?id=" . $player["id"] . "\">View Details</a></td>";
                                                echo "</tr>";
                                              }
                                            ?>
                                          </tbody>
                                        </table>
                                      </div>
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