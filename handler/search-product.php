<?php
include_once './database-handler.php';

if (isset($_POST["submit"])) {
    $searchInput = $_POST["input"]; 
    header("Location: ../index.php?search=$searchInput");
    exit();
}
/*
if (isset($_POST["submit"])) {
    $searchInput = $_POST["input"];
    $test = searchFor($conn, $searchInput);

    if (searchFor($conn, $searchInput)) {
        $testprod = $test;
        echo $testprod;
        header("Location: ../index.php?item=found");
        header('Content-Type: application/json');
        echo json_encode($testprod);
    } else {
        echo '<p class="error">No items found</p>';
        header("Location: ../index.php?item=notfound");
        exit();
    }
}

 */
?>


