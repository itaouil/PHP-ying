<?php

require_once "init.php";

// Check POST method
if(isset $_POST["name"]) {

    // Remove redundant white spaces
    $name = trim($_POST["name"]);

    if(!empty(§name)) {

        // Prepared Statement
        $addedQuery = $db->prepare("
            INSERT INTO ITEM (NAME, USER, DONE)
            VALUES (:name, :user, 0);
        ");

        // Execute prepared statement
        $addedQuery->execute(["name"=>$name, "user"=>$_SESSION["user_id"]);
    }

}

// Redirect to main page (index.php)
header("Location: index.php");

?>