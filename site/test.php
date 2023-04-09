<?php include 'header.php'; ?>
<!-- Main -->
<article id="main">
    <!-- One -->
    <section class="wrapper style4 container">
        <div class="row gtr-150">
            <div class="col-4 col-12-narrower">
                <!-- Sidebar -->
                <div class="sidebar">
                    <section>
                        <?php
                        $news = json_decode(file_get_contents("jsons/club_news.json"), true);
                        $articles = $news['original_news'];
                        foreach ($articles as $article) {
                            ?>
                            <div class="news-article">
                                <h4>
                                    <?php echo $article['title']; ?>
                                </h4>
                                <img src="<?php echo $article['image_url']; ?>">
                                <p>
                                    <?php echo $article['summary']; ?>
                                </p>
                                <a href="<?php echo $article['url']; ?>" class="button small">Learn More</a>
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
        <div class="row">
            <div class="col-4 col-12-narrower">
                <section>
                    <header>
                        <h3>Latest News</h3>
                    </header>
                    <?php
                    $news = json_decode(file_get_contents("jsons/club_news.json"), true);
                    $articles = $news['external_news'];
                    foreach ($articles as $article) {
                        ?>
                        <h4>
                            <?= $article['title'] ?>
                        </h4>
                        <p>
                            <?= $article['source'] ?>
                        </p>
                        <p><a href="<?= $article['url'] ?>">Read More</a></p>
                        <?php
                    }
                    ?>
                </section>
            </div>
        </div>
    </section>


</article>
<?php include 'footer.php'; ?>