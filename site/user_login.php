<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact - Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
						<h2>Login</h2>
						<p>Register <a href='user_register.php'>here</a> if you're not registered<p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
                     
                                    <form action="user_login.php" method="post">
                                        <div class="form-group">
                                            <label for="username">Username:</label>
                                            <input type="text" class="form-control" id="username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Login</button>
                                    </form>
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $username = $_POST['username'];
                                        $password = $_POST['password'];
                                
                                        $user_data = json_decode(file_get_contents("jsons/user_details.json"), true);
                                
                                        $user_exists = false;
                                        $correct_password = false;
                                
                                        foreach ($user_data as $user) {
                                            if ($user['username'] === $username) {
                                                $user_exists = true;
                                                if (password_verify($password, $user['password'])) {
                                                    $correct_password = true;
                                                }
                                                break;
                                            }
                                        }
                                
                                        if (!$user_exists) {
                                            echo "User does not exist. Please <a href='register.html'>register</a> first.";
                                        } elseif (!$correct_password) {
                                            echo "Incorrect password. Please try again. <a href='user_login.php'>Back to login</a>.";
                                        } else {
                                            echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
                                            // Redirect to the club_details.php page.
                                            header("Location: club_details.php");
                                            exit;
                                        }
                                    }
                                    ?>
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