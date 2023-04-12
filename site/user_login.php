<?php
include 'header.php';
?>
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
         
                        <form action="user_login.php" method="post" style="max-width: 400px; margin: 0 auto;">
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label for="username" style="display: inline-block; margin-bottom: 0.5rem;">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required style="display: block; width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;">
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
                                $_SESSION['username'] = $username;
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
<?php include 'footer.php'; ?>
