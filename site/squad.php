
<?php include 'header.php'; ?>

<!-- Add the Bootstrap CSS link -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->


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
<?php include 'footer.php'; ?>
