<?php

// Load init.php (connection to DB)
require_once "app/init.php";

// Create prepared statement
$itemsQuery = $db->prepare("
    SELECT id, name, done
    FROM items
    WHERE user = :user
");

// Execute prepared statement
$itemsQuery->execute([
    "user"=>$_SESSION["user_id"]
]);

// Store result of prepared statement
$items = count($itemsQuery) ? $itemsQuery : [];

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Meta Data Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Browser Tab Title -->
    <title>To Do</title>

    <!-- Custom CSS and Google Fonts -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two">

  </head>

  <body>

    <!-- To Do Container -->
    <div class="list">

      <!-- App Title -->
      <h1 class="header">To Do</h1>

      <?php if(!empty($items)): ?>
      <!-- Unordered List (Things to do) -->
      <ul class="items">

        <?php foreach($items as $item): ?>
          <li>
            <span class="item<?php echo $item['done'] ? ' done' : '' ?>"><?php echo $item['name']; ?></span>
            <?php if(!$item['done']): ?>
              <a href="app/mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">mark as done</a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>

      </ul>
      <?php else: ?>
        <p>You haven't got any items</p>
      <?php endif; ?>

      <!-- Form to submit to do -->
      <form class="item-add" action="app/add.php" method="post">

        <input type="text" name="name" placeholder="Type here." class="input" autocomplete="off" required>
        <input type="submit" value="Add" class="submit">

      </form>

    </div>

  </body>

</html>