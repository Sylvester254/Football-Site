
<?php include 'header.php'; ?>

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

<?php include 'footer.php'; ?>
