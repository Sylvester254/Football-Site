<?php include 'header.php'; ?>
		<header class="special container">
			<h2>Club Management</h2>
			<p></p>
		</header>
			<!-- One -->
			<section class="wrapper style4 container">
				<!-- Content -->
				<div class="content">
					<section>
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
<?php include 'footer.php'; ?>