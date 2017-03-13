<?php

// Import init.php
require_once "init.php";

$article = null;

// Check if $_GET values exists
if(isset($_GET["id"])) {

    $id = $_GET["id"];

    // Fetch article with matching id (cast to object)
    $article = $db->query("

        SELECT * FROM article
        WHERE id = {$id}

    ")->fetchObject();

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

    <?php if($article): ?>

      <div class="article">
        This is article <?php echo $article->id; ?>
      </div>

      <div class="article-rating">
        Rating x/5
      </div>

      <div class="article-rate">
        Rate this article:
        <?php foreach(range(1,5) as $rating): ?>
          <a href="app/rate.php?article=<?php $article->id ?>&rating=$rating"><?php echo $rating; ?></a>
        <?php endforeach; ?>
      </div>

      </div>

    <?php endif; ?>

  </body>

</html>