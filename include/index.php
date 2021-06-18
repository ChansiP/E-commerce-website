<?php
require "common.php";
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html> 
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Lifestyle Store</title>
<link href="..\include/bootstrap.css" rel="stylesheet" type="text/css"/>
 </head>
 <body>
 <?php
        include 'header.php';
        ?>
<div class="banner-image">
<center>
<div class="container">
<div class="banner-content">
<h1>We sell lifestyle</h1>
<p>Flat 40% OFF on premium brands</p>
<a href="products.php" class="”btn btn-danger
btn-lg active">Shop Now</a></div>
</div>
</div>
<div class="container">

<div class="items">

 <img src="../include\images\1.jpg" alt="" class="thumbnail"> 
<div class="caption"> 
<h2>Cameras</h2> 
<p>Choose among the best available in the world.</p>
 </div> </a> 
</div>
<div class="items">

<img class="thumbnail" src="../include\images\7.jpg"></img>
<div class="caption">
<h2>Watches</h2>
<p>Original watches from the best brands.</p></div>
</a>
</div>
<div class="items">

 <img src="../include\images\8.jpg" alt="" class="thumbnail"> 
<div class="caption"> 
<h2>Shirts</h2> 
<p>Our exquisite collection of shirts.</p>
 </div> </a>
 </div>
</div>
</div>
 <?php
        include 'footer.php';
        ?>
 </body>
 </html>