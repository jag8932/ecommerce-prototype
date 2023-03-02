 //const prodTemplate = "";

 fetch('/search-product.php')
 .then(response => response.json())
 .then(data => {
    console.log(data);
 });