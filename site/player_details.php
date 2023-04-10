<?php ob_start(); ?>
<?php include 'header.php'; ?>

<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Player <strong>Details</strong></h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 container">

        <!-- Content -->
        <div class="content">
            <?php
            $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
            
            $player_file = "../players/player_" . $id . ".json";
            
            if (file_exists($player_file)) {
                $player_data = json_decode(file_get_contents($player_file), true);

//             $player_data = json_decode(file_get_contents("../players/player_" . $id . ".json"), true);
    
                if ($player_data) {
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo $player_data['image']; ?>" alt="<?php echo $player_data['name']; ?>" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <th>Position:</th>
                                <td><?php echo $player_data['position']; ?></td>
                            </tr>
                            <tr>
                                <th>Age:</th>
                                <td><?php echo $player_data['age']; ?></td>
                            </tr>
                            <tr>
                                <th>Nationality:</th>
                                <td><?php echo $player_data['nationality']; ?></td>
                            </tr>
                            <tr>
                                <th>Shirt Number:</th>
                                <td><?php echo $player_data['shirt_number']; ?></td>
                            </tr>
                            <tr>
                                <th>Appearances:</th>
                                <td><?php echo $player_data['appearances']; ?></td>
                            </tr>
                            <tr>
                                <th>Goals:</th>
                                <td><?php echo $player_data['goals']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h3>Biography</h3>
                        <p><?php echo $player_data['biography']; ?></p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <h3>Additional Content</h3>
                        <ul>
                            <li><a href="<?php echo $player_data['additional_content']['goal_highlights']; ?>">Goal Highlights</a></li>
                            <li><a href="<?php echo $player_data['additional_content']['newspaper_articles']; ?>">Newspaper Articles</a></li>
                            <li><a href="<?php echo $player_data['additional_content']['podcasts']; ?>">Podcasts</a></li>
                        </ul>
                    </div>
                </div>
                <?php
                } else {
                    echo "<p>Player not found.</p>";
                }
                ?>
                <?php
			} else {
                echo "<p>Player information is not available.</p>";
            }?>
          
            <?php
            $comments_data = json_decode(file_get_contents("jsons/comments.json"), true);
            $player_comments = array();

            foreach ($comments_data['comments'] as $comment) {
                if ($comment['player_id'] == $id) {
                    $player_comments[] = $comment;
                }
            }

            if (!empty($player_comments)) {
                echo "<h3>Comments</h3>";
                echo "<ul>";
                foreach ($player_comments as $comment) {
                    echo "<li>";
                    echo "<strong>" . htmlspecialchars($comment['user']) . ":</strong> ";
                    echo htmlspecialchars($comment['comment']);
                    echo "<br>";
                    echo "<small>Date: " . $comment['date'] . " | Time: " . $comment['time'] . "</small>";
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No comments found for this player.</p>";
            }
            ?>
                      <!-- Comment form -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3>Leave a comment</h3>
                    <?php if (isset($_SESSION['username'])) : ?>
                        <form action="player_details.php?id=<?php echo $id; ?>" method="post">
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                            </div>
                            <input type="hidden" name="player_id" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-primary mt-2">Submit Comment</button>
                        </form>
                    <?php else: ?>
                        <p>Please <a href="user_login.php">log in</a> to leave a comment.</p>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Form processing -->
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['username'])) {
                $comment = $_POST['comment'];
                $date = date('Y-m-d');
                $time = date('H:i');

                $new_comment = array(
                    "player_id" => $id,
                    "player_name" => $player_data['name'],
                    "user" => $_SESSION['username'],
                    "comment" => $comment,
                    "date" => $date,
                    "time" => $time
                );

                $comments_data['comments'][] = $new_comment;
                file_put_contents("jsons/comments.json", json_encode($comments_data));

                // Redirect to the same page to prevent resubmission
                header("Location: player_details.php?id=" . $id);
                exit;
            }
            ?>
        </div>
    </section>

</article>

<?php include 'footer.php'; ?>
<?php ob_end_flush(); ?>