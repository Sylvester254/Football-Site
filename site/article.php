<?php include 'header.php'; ?>

<?php
// Get the article id from the URL
$id = $_GET['id'];

// Load the news data from the JSON file
$news = json_decode(file_get_contents("jsons/articles.json"), true);
$articles = $news['original_news'];

// Find the article with the matching id
$article = null;
foreach ($articles as $item) {
    if ($item['id'] == $id) {
        $article = $item;
        break;
    }
}

// If no article is found with the matching id, show an error message
if (!$article) {
    echo "Article not found";
    exit;
}
?>

<!-- Display the article content -->
<section class="container my-5 article-page">
    <div class="row">
        <div class="col-12">
            <h3 class="mb-4">
                <?php echo $article['title']; ?>
            </h3>
            <p>
                <?php echo $article['content']; ?>
            </p>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>