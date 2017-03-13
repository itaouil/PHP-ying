<?php

// Import init.php
require_once "app/init.php";

// Fetch articles from database
$query = $db->query("

    SELECT article.id, article.title, AVG(articleRating.rating) AS rating
    FROM article
    LEFT JOIN articleRating
    ON article.id = articleRating.title
    GROUP BY article.id

");

$articles = [];

// Store returned statement as objects
while($row = $query->fetchObject()) {
    $articles[] = $row;
}

?>


<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Rating</title>
    <link type="text/css" rel="stylesheet" href="css/main.css">

  </head>

  <body>

    <?php foreach($articles as $article): ?>
      <div class="article">
        <h3><a href="app/article.php?id=<?php echo $article->id; ?>"><?php echo $article->title ?></a></h3>
      </div>

      <div class="article-rating">
        Rating: <?php echo round($article->rating); ?> / 5
      </div>
    <?php endforeach; ?>

  </body>

</html>