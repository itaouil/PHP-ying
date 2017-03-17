<?php

session_start();

// Get super globals values
$fields = isset($_SESSION["fields"]) ? $_SESSION["fields"] : [];
$errors = isset($_SESSION["errors"]) ? $_SESSION["errors"] : [];

?>



<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Me</title>

    <link type="text/css" rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  </head>

  <body>

    <div class="contact">

      <?php if(!empty($errors)): ?>
        <!-- Validation Output -->
        <div class="panel">
          <ul>
            <li><?php echo implode("</li><li>", $errors); ?>
          </ul>
        </div>
      <?php endif ?>

      <!-- Contact form -->
      <form action="app/contact.php" method="post">

        <!-- Name Input -->
        <label>
          Your name *
          <input type="text" name="name" autocomplete="off">
        </label>

        <!-- Email Input -->
        <label>
          Your email *
          <input type="email" name="email" autcomplete="off">
        </label>

        <!-- Message Input -->
        <label>
          Your message *
          <textarea name="message" rows="8"></textarea>
        </label>

        <!-- Submit Input -->
        <input type="submit" value="Send">

        <!-- Star explanation -->
        <p class="muted">* means a required field</p>

      </form>
    </div>

  </body>

</html>
