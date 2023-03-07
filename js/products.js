
 fetch('../index.php')
 .then(response => response.json())
 .then(data => {
    console.log(data); 
 }); 