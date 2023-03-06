<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacob's MockCommerce</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div id='navbar'>
<nav>
    <a id='#logo' href='./index.php'>Home</a>
    <div class='spacer'></div>
    <?php 
    // Greets user
    session_start();
    if (isset($_SESSION["firstname"])) { 
        $name = $_SESSION["firstname"];
        echo "<p id='welcome' style='white-space:nowrap;'>Welcome $name</p>"; 
    } else {
        echo "<div class='spacer'></div>";
    }
    ?>
    <div class='spacer'></div>
    <form id='search' method='POST' action='./handler/search-product.php'>
        <input class='searchbar' type='text' name="input">
        <button class='submitButton' type='submit' name='submit'>Search</button>
    </form>
    <div class='spacer'></div>
    <div class='spacer'></div>
    <a href="./create-product.php">Create Product</a>
    <a href='./signup.php'>Signup</a>
    <?php 
        session_start();
        if (!isset($_SESSION["uid"])) {
            echo "<a href='./login.php'>Sign In</a>";
        } else {
            echo "<a href='./logout.php>Sign Out</a>";
        }
    ?>
    
</nav>
</div>

