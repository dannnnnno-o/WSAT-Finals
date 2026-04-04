<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Breeds</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/images/bg/catty.png">
</head>

<body>
    <header>
        <a href="/" class="logo">
            <img src="images/bg/catty.png" alt="Home Logo" width="80">
            <h1>Popular Cat Breeds</h1>
        </a>
        <nav>
            <ul class="nav-links">
                <li><a id="highlight" href="/">Home</a></li>
                <li><a href="/breeds">Breeds</a></li>
                <li><a href="/care">C-Care</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </nav>
    </header>

    <div class="my-box">
        <div class="text">
            <h2>Different Breeds of Cats</h2>
            <p>Cats are one of the most popular pets worldwide, known for their playful and affectionate nature.
                They come in a variety of breeds, each with unique characteristics and care needs.
                Whether you're interested in learning about different cat breeds or how to care for your feline friend,
                this website has you covered.</p>
            <div class="button-group">
                <button id="aboutButton">About</button>
                <button id="catsButton">Cats</button>
            </div>
        </div>

        <div class="image">
            <img src="images/bg/m.png" width="350">
        </div>
    </div>

    <footer>
        @ 2026 Breeds of Cats
    </footer>
    <script>
        let cats = "/breeds";
        let about = "/about";

        const aboutButton = document.querySelector("#aboutButton");
        aboutButton.addEventListener("click", (e) => { window.location.replace(about) });

        const catsButton = document.querySelector("#catsButton");
        catsButton.addEventListener("click", (e) => { window.location.replace(cats) });
    </script>
</body>

</html>