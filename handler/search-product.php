<?php
include_once './database-handler.php';

if (isset($_POST["submit"])) {
    $searchInput = $_POST["input"]; 
    header("Location: ../index.php?search=$searchInput");
    exit();
}

?>


