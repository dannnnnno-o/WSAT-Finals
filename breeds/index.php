<?php
require_once('../db.php');
require_once('../model.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Breeds of Cats</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>



<header>
     <a href="home.html" class="logo">
        <img src="../images/bg/catty.png" alt="Home Logo" width="70">
        <h1>Popular Cat Breeds</h1>
</a>
<nav>
<ul class="nav-links">
<li><a href="../">Home</a></li>
<li><a href="/">Breeds</a></li>
<li><a href="../care">C-Care</a></li>
</ul>
</nav>

</header>

<section class="container">

<div class="breed-grid">
<?php
$cats = get_cats($pdo);
foreach($cats as $cat){
    $name = $cat["name"];
    // $description = $cat["description"];
    $image = $cat["image"];
    echo'
    <a href="../cats/?name=' . $name . '" class="breed-card">
        <img src="../images/cats/' . $image . ' ">
        <h3>' . $name . '</h3> 
        <p></p>
    </a>
    ';
}
?>
<!--     <a href="" class="breed-card">
    <img src="assets/bengal.jpg">
    <h3>Bengal</h3>
    <p>Known for their semi-long coat and love of swimming.</p>
    </a>
    <a href="" class="breed-card">
    <img src="assets/mainecoon.jpg">
    <h3>Bengal</h3>
    <p>Known for their semi-long coat and love of swimming.</p>
    </a>
    <a href="" class="breed-card">
    <img src="assets/Persian cat.jpg">
    <h3>Bengal</h3>
    <p>Known for their semi-long coat and love of swimming.</p>
    </a>
    <a href="" class="breed-card">
    <img src="assets/siamese.jpg">
    <h3>Bengal</h3>
    <p>Known for their semi-long coat and love of swimming.</p>
    </a> -->

</div>

</section>


<footer>
<p>© 2026 Breeds of Cats</p>
</footer>

</body>
</html>