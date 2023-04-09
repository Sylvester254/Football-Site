<!DOCTYPE HTML>
<html>
	<head>
		<title>fan register</title>
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
							<li><a href="user_login.php" class="button primary">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<h2>Fan Registration</h2>
						<p>Login <a href='user_login.php'>here</a> if already registered.</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container medium">

							<!-- Content -->
								<div class="content">
<!-- 								 <h1 class="mt-4 mb-4">Registration</h1> -->
                                    <?php
                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $username = trim($_POST['username']);
                                        $email = trim($_POST['email']);
                                        $password = trim($_POST['password']);
                                        
                                        $user_data = json_decode(file_get_contents("jsons/user_details.json"), true);
                                        if ($user_data === null) {
                                            $user_data = array();
                                        }
                                        
                                        $user_exists = false;
                                        foreach ($user_data as $user) {
                                            if ($user['username'] === $username) {
                                                $user_exists = true;
                                                break;
                                            }
                                        }
                            
                                        if ($user_exists) {
                                            echo "<div class='alert alert-danger'>Username already exists. Use a different username or <a href='user_login.php'>login</a> instead.</div>";
                                        } else {
                                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                                            $new_user = array(
                                                "username" => $username,
                                                "email" => $email,
                                                "password" => $hashed_password
                                            );
                                            $user_data[] = $new_user;
                                            file_put_contents("jsons/user_details.json", json_encode($user_data, JSON_PRETTY_PRINT));
                                            echo "<div class='alert alert-success'>Registration successful! Welcome to the club! Please <a href='user_login.php'>login</a>.</div>";
                                        }
                                    }
                                    ?>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="username">Username:</label>
                                            <input type="text" class="form-control" id="username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </form>
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