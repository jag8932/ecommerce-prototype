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

function searchFor($conn, $input) {
    $sql = "SELECT * FROM products WHERE prod_name = ?;";
    $stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?signup=stmtfailed");
    exit();
}
// Uses prepared statements for security
mysqli_stmt_bind_param($stmt, "s", $input);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
} else {
   $result = false;
   return $result; 
}
mysqli_stmt_close($stmt);
} */
?>


<script src="../js/products.js"></script>