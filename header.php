<?php include "./assets/variables/functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>House Hunter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./assets/carousel-style.css" />
    <link rel="stylesheet" href="./assets/style.css" />
    <link rel="stylesheet" href="./assets/media-style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <script src="./assets/script.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="section_container">
            <div class="header_section">
                <div class="logo_image">
                    <a href=""><img src="./assets/images/Logo.png" alt="Logo" /></a>
                </div>
                <div class="navigation">
                    <nav class="nav_menu">
                        <ul class="main_navigation">
                            <?php get_header(); ?>
                        </ul>
                        <a href="#" class="house_choose_btn">Sign Up!</a>
                        <div class="media_navigation">
                            <input type="checkbox" id="menu" />
                            <label for="menu"><span class="hamburger_menu">&#9776;</span></label>
                            <ul class="secondary_menu">
                                <?php get_hidden_header(); ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>