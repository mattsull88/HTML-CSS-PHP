<?php require_once "productfunction.php";

 if (isset($_GET["productname"])) {
        $search = ($_GET["productname"]);
 } else {
        $search = "";
        }
 $products = getProducts($search)?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MP Co.</title>
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>

<body>
    <img class="logo" src=./images/logo.jpg alt="logo">
    <header class="header">Machine Parts Co.</header>
    
    <nav><ul class="mainnav">
        <li><a href="index.html">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="rentals.html">Rentals</a></li>
        <li><a href="repairs.html">Repairs</a></li>
        <li><a href="contact.php?status=">Contact</a></li>
    </ul></nav>
    <div class="sidebar">
        <h1>Latest Products!</h1>
        <a href="products.php?productname=gears"><img src="images/latestproduct.jpg" alt="Large Gears">
        <p>Large gears new in stock! Get thewm before they run out</p></a>
        <h1>On Sale!</h1>
        <a href="products.php?productname=gears"><img src="images/onsale.jpg" alt="Small Gears">
        <p>Small gears on sale now for all you small gear needs</p></a>
    </div>
    <div class="productsbody">
    <h2>Products</h2>
    <p> Please note that our current online ording system is in maintanance. For any orders please contact us on our contact page </p>
    <div class="formfield">
        <form method=GET action="products.php">
        <label for="productname">Search</label>
        <input id="productname" name="productname" type="text">
        <input type="submit" value="Search" >
        </form>
        </div>
        <div class="formfield">
        <form method=GET action="products.php">
        <input type="submit" value="Clear" >
        </form>
        </div>
    <span class="products">
    <?php
        foreach ($products as $product){
        echo '<table class="product">';
        echo '<tr>';
        echo "<td><img src=./images/$product[image] width=250px alt=$product[product]> </td>";
        echo '</tr>';
        echo '<tr>';
        echo "<td>$product[product]</td>";
        echo '</tr>';
        echo '<tr>';
        echo "<td>$product[stock] in stock</td>";
        echo '</tr>';
        echo '<tr>';
        echo "<td>$product[description]</td>";
        echo '</tr>';
        echo '</table>';
        }

    ?>
    </span>

    </div>

</body>