
<?php include 'header.php'; ?>

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
                    foreach ($squad_data as $player) {
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

<<<<<<< HEAD
<?php include 'footer.php'; ?>
=======
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






>>>>>>> 3224f0a8561e74506727d594d419515c665b62f7
