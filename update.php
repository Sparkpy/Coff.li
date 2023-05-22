<?php
    // Се зачувуваат новите податоци од корисникот.
    if ($_POST["username"] != "") {
        setcookie("Username", $_POST["username"], time() + 2592000, "/");
    }
    if ($_POST["email"] != "") {
        setcookie("Email", $_POST["email"], time() + 2592000, "/");
    }
    if ($_POST["password"] != "") {
        setcookie("Password", $_POST["password"], time() + 2592000, "/");
    }-
    header("Location: ./index.php");
    exit();

?>