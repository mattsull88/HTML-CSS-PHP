<?php require_once "contactform.php";
 if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $pnumber = $_POST["pnumber"];
    $email = $_POST["email"];
    $advertisement = $_POST["advertisement"];
    $comment = $_POST["comment"];
    addContact($fname, $lname, $pnumber, $email, $advertisement, $comment);
} else {
    
    }

?>
 
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
        <li><a href="products.html">Products</a></li>
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
    <div class="indexbody">
        <h2>Contact Us</h2>

        <form action="contact.php" method="POST">
            <div class="contactform">
            <label for="fname">First Name</label>
            </div>
            <div class="contactform">
            <input type="text" id="fname" name="fname">
            </div>
            <div class="contactform">
            <label for="lname">Last Name</label>
            </div>
            <div class="contactform">
            <input type="text" id="lname" name="lname">
            </div>
            <div class="contactform">
            <label for="pnumber">Phone Number</label>
            </div>
            <div class="contactform">
            <input type="text" id="pnumber" name="pnumber">
            </div>
            <div class="contactform">
            <label for="email">Email</label>
            </div>
            <div class="contactform">
            <input type="text" id="email" name="email">
            </div>
            <div class="contactform">
            <label for="advertisement">How did you hear about us?</label>
            <select id="advertisement" name="advertisement">
                <option value="Internet">Internet</option>
                <option value="Television">Television</option>
                <option value="Radio">Radio</option>
                <option value="Recommendation">Recommendation</option>
            </select>
            </div>
            <div class="contactform">
            <label for="comment">How can we help?</label>
            </div>
            <div class="contactform">
            <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>     
            </div> 
            <input type="submit" value="Submit" name="submit">
            <div class="contactform">
            <?php if( $_GET['status'] == 'success'):
                 echo 'Thank you!';
                endif;
                ?>
            </div> 
        </form>
    </div>

</body>