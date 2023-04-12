<?php include 'header.php'; ?>

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
    				<?php
						// Read the JSON file
						$json_file = file_get_contents('jsons/about.json');
						$content = json_decode($json_file, true);

						// Display the content
					echo "<p>" . $content['content'] . "</p>";
					?>
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
					<li><a href="#" class="button">
							<?php echo $league_name ?>
						</a></li>

				</ul>
				<header>
					<h2>Want to<strong> know more</strong>?</h2>
				</header>
				<footer>
					<ul class="buttons">
						<li><a href="club_history.php" class="button primary">Club History</a></li>
						<li><a href="club_management.php" class="button">Club Management</a></li>
					</ul>
				</footer>
			</section>
	<?php include 'footer.php'; ?>
	</body>
</html>