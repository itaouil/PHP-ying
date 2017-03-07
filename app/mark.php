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
            UPDATE ITEM
            SET DONE = 1
            WHERE ID = :ITEM
            AND USER = :USER
        ");

        // Execute prepared statement
        $doneQuery->execute(["id"=>$id, "user"=>$_SESSION["user_id"]);
      break;
    }
}

// Redirect to main page (index.php)
header("Location: index.php");

?>