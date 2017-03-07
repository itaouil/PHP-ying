<!DOCTYPE html>
<html>

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

      <!-- Unordered List (Things to do) -->
      <ul class="items">

        <li>
          <span class="item">Finish Raspy Project</span>
          <a href="#" class="done-button">mark as done</a>
        </li>

        <li>
          <span class="item done">Finish Leitstelle PC</span>
        </li>

      </ul>

      <!-- Form to submit to do -->
      <form class="item-add" action="add.php" method="post">

        <input type="text" name="name" placeholder="Type new commitment." class="input" autocomplete="off" required>
        <input type="submit" value="Add" class="submit">

      </form>

    </div>

  </body>

</html>