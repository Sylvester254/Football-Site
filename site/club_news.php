<?php include 'header.php'; ?>
<!-- Main -->
<article id="main">
	<!-- One -->
	<section class="wrapper style4 container">
		<h3>News Articles</h3>
		<div class="row gtr-150">
					<section>
						<?php
						$news = json_decode(file_get_contents("jsons/articles.json"), true);
						$articles = $news['original_news'];
						foreach ($articles as $article) {
							?>
								<div class="news-article">
									<h4 class="article-title">
										<?php echo $article['title']; ?>
									</h4>
									<!-- <img src="<?php echo $article['image_url']; ?>"> -->
									<p>
										<?php echo $article['summary']; ?>
									</p>
									<a href="article.php?id=<?php echo $article['id']; ?>">Learn More</a>
									<!-- <a href="article.php?id=1">Learn More</a> -->
											<br><br>
								</div>
						<?php } ?>
					</section>
		</div>
			</div>
			<div class="col-8 col-12-narrower imp-narrower">
				<!-- Content -->
				<div class="content">

				</div>
			</div>
		</div>
	</section>

	<!-- Two -->
	<section class="wrapper style1 container special">
		<h3>Latest News</h3>
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