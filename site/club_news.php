<?php include 'header.php'; ?>
<!-- Main -->
<article id="main">
    <!-- One -->
    <section class="wrapper style4 container">
        <h3 class="mb-4">News Articles</h3>
        <div class="row">
            <?php
            $news = json_decode(file_get_contents("jsons/articles.json"), true);
            $articles = $news['original_news'];
            foreach ($articles as $article) {
            ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card news-article">
                    <div class="card-body">
                        <h4 class="card-title article-title">
                            <?php echo $article['title']; ?>
                        </h4>
                        <p class="card-text">
                            <?php echo $article['summary']; ?>
                        </p>
                        <a href="article.php?id=<?php echo $article['id']; ?>" class="card-link">Learn More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>

<!-- Two -->
	<section class="wrapper style1 container special">
		<h3>More News</h3>
				<section class="latest-news">
					<?php
					$news = json_decode(file_get_contents("jsons/club_news.json"), true);
					$articles = $news['external_news'];
					foreach ($articles as $article) {
						?>
							<h4 style="text-transform: capitalize;">
       						 	<?= strtolower($article['title']) ?>
							</h4>
									<p>
								<?= $article['source'] ?>
							</p>
							<p><a href="<?= $article['url'] ?>">Read More</a></p>
							<?php
					}
					?>
				</section>
	</section>
</article>
<?php include 'footer.php'; ?>