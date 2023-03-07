//const search = document.querySelector(".searchbar");

 fetch(`../index.php?search=test`)
 .then(response => response.json())
 .then(data => {
    console.log(data); 
 })
 .catch(error => console.log(error)); 