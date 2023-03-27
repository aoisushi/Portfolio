<?php

require('Classes/Projects.php');
include('data/details_works.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kylie Chan | UI/UX Designer</title>
    <meta name="description" content="Hi, I'm Kylie Chan. I'm a UIUX designer and Front-end web developer.">
    <meta name="author" content="Kylie Chan">
    <meta property="og:title" content="Kylie Chan's Portfolio">
    <meta property="og:url" content="http://kylieaoichan.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="section_wrap">
            <?php require('partical/global/header.php'); ?>
            <main>
                
                <section class="hero_section">
                    <div class="home_wrap">
                        <div class="home_wrap_text">
                            <h1>Hello!I'm Kylie</h1>
                            <p class="is-blue">Be Creative with me!</p>
                        </div>
                        <div class="home_hi text_align">
                            <img src="images/home_hi.png" alt="A drawing of Kylie saying hi on homepage">
                        </div>
                    </div>
                </section>

        </div>

            <section class="homepage_work">
                <div class="homepage_work_wrap align_center text_align">
                    <h2 class="home_work_h2">👩🏻‍💻 My Works</h2>
                    <div class="is-grid">

                        <?php 
                            foreach($home as $Project) {
                                require('partical/cards/home_works.php');
                            }
                        ?>

                    </div>
                </div>
                
                <div class="is-flex justi_cen">
                    <a class="btn" href="#" title="Go To See More My Works" target="_blank">See More My Works!</a>
                </div>
            
            </section>
        </main>
        <script src="scripts/script.js"></script>
       <?php require('partical/global/footer.php'); ?>
    </div>
</body>
</html>