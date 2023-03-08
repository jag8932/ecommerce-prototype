
<?php 
include './header.php';
include './handler/helper-functions.php';
include './handler/database-handler.php';
if (isset($_GET["search"])) {
    $search = $_GET["search"];
    $results = searchFor($conn, $search);
    if(!$results) {
        echo "<p class='error'>No results found</p>";
        exit();
    }
    echo "<h1>Results</h1>";
    echo "<div class='product-container'>";
    for ($i = 0; $i < count($results); $i++) {
        echo "<div class='product'>";
        echo $results[$i];
        foreach($results[$i] as $product) {
            
           // echo "<p>$product</p>";
          //  echo "<br>";
        }
        echo "</div>";
    }
    echo "</div>";
  //  echo json_encode($results[0]);
  //  echo "<br>";
  //  echo json_encode($results[1]);
    
    
   // echo json_encode($results);
  //  $resultsJSON = json_encode($results["prod_name"]);

}

?>

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
