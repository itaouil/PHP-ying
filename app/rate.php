<?php

require_once "init.php";

if(isset($_GET["article"], $_GET["rating"])) {

    // Cast GET values (avoid
    $title = (int)$_GET["article"];
    $rating = (int)$_GET["rating"];

    // Assert rating range
    if(in_array($rating, [1, 2, 3, 4, 5])) {

        // Insert rating for given article
        $db->query("INSERT INTO articleRating (title, rating) VALUES ({$title}, {$rating})");

    }

    header('Location: article.php?id=' . $title);

}

?>