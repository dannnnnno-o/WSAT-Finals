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
    <title>Breeds of Cats</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>



    <header>
        <a href="../" class="logo">
            <img src="../images/bg/catty.png" alt="Home Logo" width="70">
            <h1>Popular Cat Breeds</h1>
        </a>

        <form action="/breeds/breeds.inc.php" method="GET" class="breed-search-form" id="breedSearchForm">
            <div class="search-input-wrap">
                <input type="text" name="search" id="breedSearchInput" autocomplete="off">
                <button type="submit" class="search-btn" title="Search breeds">
                    <i class="fa-solid fa-paw"></i>
                </button>
            </div>
        </form>

        <nav>
            <ul class="nav-links">
                <li><a href="../">Home</a></li>
                <li><a href="/breeds" id="highlight">Breeds</a></li>
                <li><a href="/care">C-Care</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>

    </header>

    <section class="container">

        <?php
        if (empty($_GET["search"])) {
            echo '
<div class="container swiper">
        <div class="wrapper">
        <div class="card-list swiper-wrapper">
        <div class="card swiper-slide">
        <div class="card-image">
        <img src="../images/cats/bengal-cat.jpg" alt="Bengal">
        <p class="card-tag">Bengal</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Bengal Cats</h3>
        <p class="card-text">Popular for their wild-looking spotted coat and energetic, playful nature.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../images/cats/bengal-cat.jpg" alt="Bengal">
        <div class="card-profile-info">
        <span class="card-profile-name">Bengal</span>
        <span class="card-profile-role">Wild Adventurer</span>
        </div>
        </div>
        <a href="../cats/?name=Bengal Cat" class="card-button">Know More</a>
        </div>
        </div>
        </div>
          <div class="card swiper-slide">
        <div class="card-image">
        <img src="../images/cats/mainecoon.jpg" alt="Mainecoon">
        <p class="card-tag">Mainecoon</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Maine Coon Cats</h3>
        <p class="card-text">Famous for their large size, bushy tail, and gentle “gentle giant” personality.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../images/cats/mainecoon.jpg" alt="Mainecoon">
        <div class="card-profile-info">
        <span class="card-profile-name">Maine Coon</span>
        <span class="card-profile-role">The Gentle Giant</span>
        </div>
        </div>
        <a href="../cats/?name=Main Coon" class="card-button">Know More</a>
        </div>
        </div>
        </div>
          <div class="card swiper-slide">
        <div class="card-image">
        <img src="../images/cats/Persian cat.jpg" alt="Persian">
        <p class="card-tag">Persian</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Persian Cats</h3>
        <p class="card-text">Known for their long, fluffy fur and calm, sweet temperament.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../images/cats/Persian cat.jpg" alt="Persian">
        <div class="card-profile-info">
        <span class="card-profile-name">Persian</span>
        <span class="card-profile-role">Elegant Aristocrat</span>
        </div>
        </div>
        <a href="../cats/?name=Persian Cat" class="card-button">Know More</a>
        </div>
        </div>
        </div>

         <div class="card swiper-slide">
        <div class="card-image">
        <img src="../10popular/ragdoll.jpg" alt="Ragdoll">
        <p class="card-tag">Ragdoll</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Ragdoll Cats</h3>
        <p class="card-text">Known for their blue eyes and tendency to go limp when held; very affectionate.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../10popular/ragdoll.jpg" alt="Ragdoll">
        <div class="card-profile-info">
        <span class="card-profile-name">Ragdoll</span>
        <span class="card-profile-role">Loving Companion</span>
        </div>
        </div>
        <a href="../cats/?name=Ragdoll" class="card-button">Know More</a>
        </div>
        </div>
        </div>


          <div class="card swiper-slide">
        <div class="card-image">
        <img src="../10popular/Abyssinian-cat.jpg" alt="Abyssinian">
        <p class="card-tag">Abyssinian</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Abyssinian Cats</h3>
        <p class="card-text">Known for their short ticked coat, active and curious personality.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../10popular/Abyssinian-cat.jpg" alt="Abyssinian">
        <div class="card-profile-info">
        <span class="card-profile-name">Abyssinian</span>
        <span class="card-profile-role">Curious Explorer</span>
        </div>
        </div>
        <a href="../cats/?name=Abyssinian Cat" class="card-button">Know More</a>
        </div>
        </div>
        </div>

          <div class="card swiper-slide">
        <div class="card-image">
        <img src="../10popular/Birman.webp" alt="Birman">
        <p class="card-tag">Birman</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Birman Cats</h3>
        <p class="card-text">Recognized for their striking blue eyes, silky coat, and gentle temperament.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../10popular/Birman.webp" alt="Birman">
        <div class="card-profile-info">
        <span class="card-profile-name">Birman</span>
        <span class="card-profile-role">Sacred Beauty</span>
        </div>
        </div>
        <a href="../cats/?name=Birman" class="card-button">Know More</a>
        </div>
        </div>
        </div>

          <div class="card swiper-slide">
        <div class="card-image">
        <img src="../10popular/british.jpg" alt="British">
        <p class="card-tag">British Shorthair</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About British Shorthair Cats</h3>
        <p class="card-text">Loved for their round face, dense coat, and easygoing temperament.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../10popular/british.jpg" alt="British Shorthair">
        <div class="card-profile-info">
        <span class="card-profile-name">British Shorthair</span>
        <span class="card-profile-role">Calm Gentleman</span>
        </div>
        </div>
        <a href="../cats/?name=British Shorthair" class="card-button">Know More</a>
        </div>
        </div>
        </div>

        
         <div class="card swiper-slide">
        <div class="card-image">
        <img src="../10popular/Scottish Fold.jpg" alt="Scottish Fold">
        <p class="card-tag">Scottish Fold</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Scottish Fold Cats</h3>
        <p class="card-text">Famous for their folded ears, round face, and calm nature.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../10popular/Scottish Fold.jpg" alt="Scottish Fold">
        <div class="card-profile-info">
        <span class="card-profile-name">Scottish Fold</span>
        <span class="card-profile-role">The Sweet Owl</span>
        </div>
        </div>
        <a href="../cats/?name=Scottish Fold" class="card-button">Know More</a>
        </div>
        </div>
        </div>


        <div class="card swiper-slide">
        <div class="card-image">
        <img src="../10popular/siamese.jpg" alt="Siamese">
        <p class="card-tag">Siamese</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About  Siamese Cats</h3>
        <p class="card-text">Famous for their color-point coat, striking blue eyes, and vocal, social personality.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../10popular/siamese.jpg" alt="Siamese">
        <div class="card-profile-info">
        <span class="card-profile-name">Siamese</span>
        <span class="card-profile-role">Talkative Royal</span>
        </div>
        </div>
        <a href="../cats/?name=Siamesex Cat" class="card-button">Know More</a>
        </div>
        </div>
        </div>

  <div class="card swiper-slide">
        <div class="card-image">
        <img src="../10popular/sphynx.jpg" alt="Sphynx">
        <p class="card-tag">Sphynx</p>
        </div>
        <div class="card-content">
        <h3 class="card-title">All About Sphynx Cats</h3>
        <p class="card-text">Recognized for their hairless body, affectionate personality, and striking appearance.</p>
        <div class="card-footer">
        <div class="card-profile">
        <img src="../10popular/Sphynx.jpg" alt="Sphynx">
        <div class="card-profile-info">
        <span class="card-profile-name">Sphynx</span>
        <span class="card-profile-role">Affectionate Alien</span>
        </div>
        </div>
        <a href="../cats/?name=Sphynx Cat" class="card-button">Know More</a>
        </div>
        </div>
        </div>
        </div>

  <div class="swiper-pagination"></div>

  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

        </div>
</div>
';
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

        <script src="../script.js"></script>

        <?php
        $cats = get_cats($pdo);

        if (!(empty($_GET["search"]))) {
            $search = $_GET["search"];
            $cats = search_cat($pdo, $_GET["search"]);
        }
        if ($cats != NULL) {
            if (isset($search)) {
                echo '<p>Results for "' . $search . '"</p><br>';
            }
            echo '<div class="breed-grid">';
            foreach ($cats as $cat) {
                $name = $cat["name"];
                $description = $cat["description"];
                $image = $cat["image"];
                echo '
        <a href="../cats/?name=' . $name . '" class="breed-card">
        <img src="../images/cats/' . $image . ' ">
        <h3>' . $name . '</h3> 
        <p>' . $description . '</p>
        </a>
        ';
            }
        } else {
            echo '
        <p>No results for "' . $search . '"<br>
        <a href="/breeds">Go Back?</a>
        </p>
        ';
        }
        ?>
        </div>

    </section>


    <footer>
        <p>© 2026 Breeds of Cats</p>
    </footer>

    <script>
        (function () {
            const catBreeds = [
                <?php foreach ($cats as $catBreed) {
                    echo '"' . $catBreed["name"] . '",';
                } ?>
            ];
            const input = document.getElementById('breedSearchInput');
            if (input) {
                const randomName = catBreeds[Math.floor(Math.random() * catBreeds.length)];
                input.placeholder = 'Try "' + randomName + '"...';
            }
        })();


        window.onload = function () {
            const breedCards = document.querySelectorAll(".breed-card");
            const heights = [];
            for (i = 0; i < breedCards.length; i++) {
                heights.push(breedCards[i].offsetHeight);
            }
            max_height = Math.max(...heights);

            for (i = 0; i < breedCards.length; i++) {
                breedCards[i].style.height = max_height + "px"
            }

        };
    </script>

</body>

</html>