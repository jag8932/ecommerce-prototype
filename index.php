
<?php 
include './header.php';
include './handler/helper-functions.php';
include './handler/database-handler.php';
if (isset($_GET["search"])) {
    $product = $_GET["search"];
    $results = searchFor($conn, $product);
    if(!$results) {
        echo "<p class='error'>No results found</p>";
        exit();
    }
    echo $results;
  //  $resultsJSON = json_encode($results["prod_name"]);

}

?>

<h1>To Come Soon!</h1>

<template class="product-template">
    <h2 class="product-name"><h2>
    <img src="" class="product-image" width="100px"/>
    <h3 class="product-tags"></h3>
    <p class="product-description"></p>
</template>
<?php 
// Will act as the main search page for products like how Amazon's home page looks. 
include './footer.php';
?>
