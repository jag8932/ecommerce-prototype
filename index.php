
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
        $imgUrl = $results[$i]["img_path"];
        $prodName = $results[$i]["prod_name"];
        $prodUser = $results[$i]["prod_user"];
        $prodTags = $results[$i]["prod_tags"];
        $prodDesc = $results[$i]["prod_desc"];
        
        echo $imgUrl;
        
        echo "<img class='prod-img' src='uploads/whale.jpg' width='200px' alt='img'><br>";
        echo "<h2 class='prod-name'>$prodName</h2><br>";
        echo "<p>$prodTags</p><br>";
        echo "<p>$prodDesc</p><br>";
        echo "</div>";
    }
    echo "</div>";

}
?>

<h1>Featured</h1>

<?php  
include './footer.php';
?>
