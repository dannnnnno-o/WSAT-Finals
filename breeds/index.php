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
    <link rel="icon" href="/images/bg/catty.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>


    <div class="bubble" style="width: 80px; height: 80px; left: 10%; animation-duration: 30s;"></div>
    <div class="bubble" style="width: 50px; height: 50px; left: 40%; animation-duration: 20s;"></div>
    <div class="bubble" style="width: 100px; height: 100px; left: 70%; animation-duration: 40s;"></div>

    <div class="sparkle" style="top: 20%; left: 15%; animation-delay: 0s;"></div>
    <div class="sparkle" style="top: 40%; left: 50%; animation-delay: 1s;"></div>
    <div class="sparkle" style="top: 70%; left: 30%; animation-delay: 2s;"></div>

    <header>
        <a href="../" class="logo">
            <img src="../images/bg/catty.png" alt="Home Logo" width="80">
            <h1>Furry Friends</h1>
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
        <h1 class="hero">Popular Breeds</h1>
        <?php
        if (empty($_GET["search"])) {
            echo '        <div class="wrapper swiper">
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
                        <img src="../images/cats/mainecoon.jpg" alt="Maine Coon">
                        <p class="card-tag">Maine Coon</p>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">All About Maine Coon Cats</h3>
                        <p class="card-text">Famous for their large size, bushy tail, and gentle "gentle giant" personality.</p>
                        <div class="card-footer">
                            <div class="card-profile">
                                <img src="../images/cats/mainecoon.jpg" alt="Maine Coon">
                                <div class="card-profile-info">
                                    <span class="card-profile-name">Maine Coon</span>
                                    <span class="card-profile-role">The Gentle Giant</span>
                                </div>
                            </div>
                            <a href="../cats/?name=Maine Coon" class="card-button">Know More</a>
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
                        <img src="../10popular/british.jpg" alt="British Shorthair">
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
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
';
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

        <script src="../script.js"></script>

        <h1 class="hero">Cat Breeds</h1>
        <?php
        $cats = get_cats($pdo);

        if (!(empty($_GET["search"]))) {
            $search = $_GET["search"];
            $cats = search_cat($pdo, $_GET["search"]);
        }
        if ($cats != NULL) {
            if (isset($search)) {
                echo '<p class="results">Results for "' . $search . '"</p><br>';
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
        <p class="results">No results for "' . $search . '"<br>
        <a href="/breeds">Go Back?</a>
        </p>
        ';
        }
        ?>
        </div>

    </section>


    <footer>
        <p>© 2026 Furry Friends</p>
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