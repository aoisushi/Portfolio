<?php

require('Classes/Projects.php');
include('data/details_works.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php include('partical/global/head.php'); ?>
<body> 
        <?php require('partical/global/header.php'); ?>
        <div class="header-gap"></div>
        <main>
            <section class="section-gap">
                <div class="hero container">
                    <!-- Greeting -->
                    <div class="hero-greeting">
                        <h1 class="self-span">Hello👋🏻 I'm Kylie</h1>
                        <img class="home-self" src="../images/ky_img.png">
                    </div>
                    <!-- self-intro -->
                    <div class="hero-intro">
                        <h1 class="h2">
                            A UX Engineer blending <span class="shilo">design</span>, <span class="brightBlue">development</span>, and <span class="blue">marketing strategy</span> to create impactful solutions.
                        </h1>
                    </div>
                    <!-- See my work -->
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="79" viewBox="0 0 34 79" fill="none">
                            <path d="M2.42719 2C10.4272 3.5 14.42 8.45581 16.5439 14.9849C18.6814 21.5557 19.2648 30.1657 17.5474 36.936C16.9042 39.4717 15.4865 42.5873 12.969 43.8036C9.51503 45.4724 6.27921 42.3037 5.09799 39.3507C3.66369 35.7649 4.18681 31.2024 7.76348 29.0964C10.3363 27.5814 13.6836 27.0869 16.6066 27.5598C21.8819 28.4131 25.4272 30 28.9272 35.5C35.9272 46 27.6188 66.2735 20.4272 74" stroke="#3366FF" stroke-width="3" stroke-linecap="round"/>
                            <path d="M17.7783 68.5344C17.8629 70.1427 17.9577 71.7738 17.9577 73.3906C17.9577 73.5181 18.095 77.1208 18.3367 77.0402C18.9314 76.8419 19.4799 76.5528 20.1016 76.392C21.3266 76.0752 22.5481 75.7015 23.7512 75.3101C24.9743 74.9123 26.2068 74.5803 27.4507 74.2581C28.195 74.0653 29.0484 73.9596 29.7143 73.5601" stroke="#3366FF" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                        
                        <a class="hero-link" href="#work">
                            <h5>See My Work</h5>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Works -->
            <section id="work" class="section-gap">
                <div class="header-gap"></div>
                <div class="is-grid container">
                    <?php 
                        foreach($home as $Project) {
                            require('partical/cards/home_works.php');
                        }
                    ?>
                </div>
            </section>
        </main>
    <?php require('partical/global/footer.php'); ?>
</body>
<script src="scripts/script.js"></script>
</html>