<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shops</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-dark">
        <nav class="main-nav wrapper">
            <div class="company-logo">
                <span class="logo">Coffee Shops</span>
            </div>
            <ul class="nav-list">
                <li>Home</li>
                <li>Blog</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </nav>
        <section class="main-section wrapper">
            <div class="text-content">
                <h2 class="header-text">Find your cozy coffee place</h2>
                <p class="secondary-text">Search for the right atmosphere to enjoy your coffee.</p>
                <div class="search-container">
                    <button class="btn-primary" type="button">
                        Search
                    </button>
                    <button class="btn-outline-primary" type="button">
                        Explore
                    </button>
    
                </div>
            </div>

            <div class="img-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/pattern-circle.png" alt="" class="pattern">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/coffee-cup.png" alt="" class="cup">
            </div>
        </section>
    </div>
    <div class="bg-light">
        <section class="popular-shops wrapper">
            <h2 class="header-text">Popular Coffee Shops</h2>
            <ul class="shop-list">
            </ul>

            <button type="button" class="btn-primary">View More</button>
        </section>
    </div>

    <section class="search-section wrapper">
        <h2 class="header-text">Search</h2>
        <form class="search-form">
            <div class="custom-dropdown">
                <input type="text" name="location" id="location" class="form-control location-input" placeholder="Location..." onfocus="showResults()">
                <span class="icon-container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                </span>
                <ul class="search-results">
                </ul>
            </div>
        </form>
    </section>

    <footer class="main-footer wrapper">
        <div class="company-logo">
            <span class="logo">Coffee Shops</span>
        </div>
    </footer>
</body>

<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>

</html>