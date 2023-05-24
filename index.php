<?php

require('Classes/Projects.php');
include('data/details_works.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php include('partical/global/head.php'); ?>
<body>
    <div class="wrapper">
        <div class="section_wrap">
            <?php require('partical/global/header.php'); ?>
            <main>
                <section class="hero_section">
                    <div class="home_wrap">
                        <div class="home_wrap_text">
                            <h1>Hello! I'm <span class="pink_text">Kylie</span></h1>
                            <h4>Using <span style="color: #7497c1;">creative</span> design to solve <span style="color: #7497c1;">problems</h4>
                            <p>As a UI/UX designer, front-end developer, and illustrator, I wholeheartedly devote myself to unleashing my creativity in every aspect of my work.</p>
                            <div>
                                <a class="home_button" href="about.php">About Me</a>
                                <a class="home_button" href="project.php">My Projects</a>
                            </div>
                        </div>

                        <div class="home_hi text_align">
                            <img src="images/home_hi.png" alt="A drawing of Kylie saying hi on homepage">
                        </div>

                    </div>

                    <div class="text_align narrow">
                        <!-- <ion-icon size="large" name="arrow-down-outline"></ion-icon> -->
                        <p style="color: #295976">Scroll Down</p>
                        <p style="font-size: 33px;">👇🏼</p>
                    </div>
                
                </section>

        </div>

            <section class="homepage_work">
                <div class="homepage_work_wrap align_center text_align">
                    <h2 class="home_work_h2">👩🏻‍💻 Feature Works</h2>
                    <div class="is-grid works_container">

                        <?php 
                            foreach($home as $Project) {
                                require('partical/cards/home_works.php');
                            }
                        ?>

                    </div>
                </div>
                
                <div class="is-flex justi_cen">
                    <a class="btn" href="project.php" title="Go To See More My Works">View Other Projects</a>
                </div>
            
            </section>
        </main>
        <script src="scripts/script.js"></script>
       <?php require('partical/global/footer.php'); ?>
    </div>
</body>
</html>