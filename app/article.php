<?php

// Import init.php
require_once "init.php";

$article = null;

// Check if $_GET values exists
if(isset($_GET["id"])) {

    $id = (int)$_GET["id"];

    // Fetch article with matching id (cast to object)
    $article = $db->query("

        SELECT article.id, AVG(articleRating.rating) AS rating
        FROM article
        LEFT JOIN articleRating
        ON article.id = articleRating.title
        WHERE article.id = {$id}

    ")->fetchObject();

}

?>

<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Rating</title>

  </head>

  <body>

    <?php if($article): ?>

      <div class="article">
        This is article <?php echo $article->id; ?>
      </div>

      <div class="article-rating">
        Rating: <?php echo round($article->rating); ?>
      </div>

      <div class="article-rate">
        Rate this article:
        <?php foreach(range(1,5) as $rating): ?>
          <a href="rate.php?article=<?php echo $article->id; ?>&rating=<?php echo $rating; ?>"><?php echo $rating; ?></a>
        <?php endforeach; ?>
      </div>

      </div>

    <?php endif; ?>

  </body>

</html>