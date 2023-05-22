<?php
    // Ги прави колачињата невалидни за да го одлогира корисникот.
    setcookie("Username", "", time() - 3600, "/");
    setcookie("Email", "", time() - 3600, "/");
    setcookie("Password", "", time() - 3600, "/");
    header("Location: ./index.php");
    exit();
?>