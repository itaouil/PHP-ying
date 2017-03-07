<?php

require_once "init.php";

// Check POST method
if(isset($_GET["as"], $_GET["item"])) {

    // store get values
    $as = $_GET["as"];
    $item = $_GET["item"];

    switch($as) {

      case "done":
        // Prepared Statement
        $doneQuery = $db->prepare("
            UPDATE item
            SET done = 1
            WHERE id = :item
            AND user = :user
        ");

        // Execute prepared statement
        $doneQuery->execute(["id"=>$item, "user"=>$_SESSION["user_id"]);
      break;
    }
}

// Redirect to main page (index.php)
header("Location: index.php");

?>