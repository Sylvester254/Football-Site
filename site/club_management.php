<!DOCTYPE HTML>
<html>
	<head>
		<title>No Sidebar - Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript>
			<link rel="stylesheet" href="assets/css/noscript.css" />
		</noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">
			<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="club_details.php">Manchester <span>United</span></a></h1>
				<nav id="nav">
					<ul>
						<li class="current"><a href="#">Club Management</a></li>
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
			<br><br>
			<!-- One -->
			<section class="wrapper style4 container">
				<!-- Content -->
				<div class="content">
					<section>
						<header>
							<h3>Club Management</h3>
						</header>
						<div class="table-wrapper">
							<table>
								<thead>
									<tr>
										<th>Name</th>
										<th>Position</th>
									</tr>
								</thead>
								<tbody>
									<?php
									// Load the JSON data from file
									$json = file_get_contents('jsons/management.json');
									$data = json_decode($json, true);

									// Loop through the board of directors and output each member
									foreach ($data['board_of_directors'] as $member) {
										echo '<tr>';
										echo '<td>' . $member['name'] . '</td>';
										echo '<td>' . $member['position'] . '</td>';
										echo '</tr>';
									}

									// Loop through the key staff and output each member
									foreach ($data['key_staff'] as $member) {
										echo '<tr>';
										echo '<td>' . $member['name'] . '</td>';
										echo '<td>' . $member['person'] . '</td>';
										echo '</tr>';
									}
									?>
								</tbody>
							</table>
						</div>
					</section>
				</div>
			</section>
			</article>

			<style>
				.table-wrapper {
					overflow-x: auto;
				}

				table {
					width: 100%;
					border-collapse: collapse;
					border-spacing: 0;
					text-align: left;
				}

				th,
				td {
					padding: 0.75em;
					border-bottom: 1px solid #ccc;
				}

				th {
					background-color: #eee;
					font-weight: bold;
				}

				tbody tr:hover {
					background-color: #f5f5f5;
				}
			</style>

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
		<script src="assets/js/jquery.scrollgress.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>

</html>