<?php
    // Се зачувуваат податоците од POST во пребарувачот и се логира корисникот.
    setcookie("Username", $_POST["username"], time() + 2592000, "/");
    setcookie("Email", $_POST["email"], time() + 2592000, "/");
    setcookie("Password", $_POST["password"], time() + 2592000, "/");
    header("Location: ./index.php");
    exit();
?>