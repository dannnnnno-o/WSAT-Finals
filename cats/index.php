<?php 
require_once('../db.php');
require_once('../model.php');
require_once('../ctrl.php');
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_GET["name"] ?></title>
<link rel="stylesheet" href="../styles.css">
</head>

<body>

<header>
    
<h1><?php echo $_GET["name"]  ?></h1>

<nav>
<ul class="nav-links">
<li><a href="../">Home</a></li>
<li><a href="../breeds">Breeds</a></li>
<li><a href="../care">C-Care</a></li>
</ul>
</nav>

</header>
<?php
$cat = get_cat_by_name($pdo, $_GET["name"]);

$name = $cat["name"];
// $description = $cat["description"];
$origin = $cat["origin"];
$history = $cat["history"];
$characteristics = $cat["characteristics"];
$breed_standard = $cat["breed_standard"];
$personality = $cat["personality"];
$image = $cat["image"];

?> 

<section class="container">

<div class="care-grid">

<div class="care-box">
<h3>Origin</h3>
<p><?php echo $origin ?></p>
</div>

<div class="care-box">
<h3>Characteristics</h3>
<p><?php echo $characteristics ?></p>
</div>

<div class="care-box">
<h3>Breed Standard</h3>
<p>
<?php echo parse_breed_standard($breed_standard)?>
</div>

<div class="care-box">
<h3>Personality and Temperament</h3>
<p><?php echo $personality?></p>
</div>

<div class="care-box">
<h3>History</h3>
<p><?php echo $history ?></p>

</div>
</section>


<button onclick="history.back()">Go Back</button>

<footer>
<p>© 2026 Breeds of Cats</p>
</footer>


</body>
</html>
