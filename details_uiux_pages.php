<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Kylie Chan | UI/UX Designer</title>
    <meta name="description" content="Hi, I'm Kylie Chan. I'm a UIUX designer and Front-end web developer.">
    <meta name="author" content="Kylie Chan">
    <meta property="og:title" content="Kylie Chan's Portfolio">
    <meta property="og:url" content="http://kylieaoichan.com/">

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Questrial&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="styles/reset.css"/>
    <link rel="stylesheet" href="styles/main.css"/>
  </head>
  <body>
    <?php require('partical/global/header.php'); ?>
    <main>
        <section>
            <div class="details_heading text_align justi_cen">
                <h1>Name</h1>
                <h4>Title</h4>
                <p>Subject</p>
            </div>
        </section>

        <section class="bg_yel art_sections artifact-overview">
        <div class="top_container">
            <div class="arti_hero_bg is-flex justi_cen">
                <!-- Head photo -->
                <img class="" src="images/pa-ru logo_blue.svg" alt="A logo from Pa-ru" width="200">
            </div>
            <!-- Content -->
            <div class="top_content">
                <div class="is-grid">
                    <div class="col-12-sm col-4-md col-4-lg">
                        <h3>Role</h3>
                        <ul class="col-12-sm col-6-md col-4-lg">
                            <li>Illustrator</li>
                            <li>Product Designer</li>
                            <li>Marketer</li>
                        </ul>
                    </div>
                    <div class="col-12-sm col-4-md col-4-lg">
                        <h3>Duration</h3>
                        <ul class="col-12-sm col-6-md col-4-lg">
                            <li>Ongoing</li>
                        </ul>
                    </div>
                    <div class="col-12-sm col-4-md col-4-lg">
                        <h3>Tools</h3>
                        <ul class="col-12-sm col-6-md col-4-lg">
                            <li>Procreate</li>
                            <li>Adobe Illustrator</li>
                            <li>Photoshop</li>
                        </ul>
                    </div>
                </div>
                <div class="top_content_intro">
                    <h3>Introduction</h3>
                    <ul>
                        <li>
                            This is my personal drawing account established in early 2020 on Instagram. This brand aims to share the funny daily life stories of mine and with my bunnies.   
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn_" style="color: Pink;">View Live Page</a>
            </div>
        </div>
    </section>
    
    <!-- Project logo -->
    <div class="is-flex justi_cen">
        <img class="" src="images/pa-ru_logo_trans.svg" alt="A logo from Pa-ru" width="120">
    </div>
    
    <!-- Section1: The Goal of the Project -->
    <section>
        <h2 class="text_align">Project Outlines</h2>
        <!-- Summary -->
        <div class="summary_wrap">
            <div class="summary_container">
                <h4 class="summary_01">01</h4>
                <a class="summary_proce_01" href="#01">Research</a>
            </div>
            <div class="summary_container">
                <h4 class="summary_02">02</h4>
                <a class="summary_proce_02" href="#02">Web Design</a>
            </div>
            <div class="summary_container">
                <h4 class="summary_03">03</h4>
                <a class="summary_proce_03" href="#03">User Testing</a>
            </div>
        </div>
        <!-- The goal -->
        <div class="summary_container">
            <h4 class="text_align">The Goal of this project is....</h4>
            <div class="intro">
                <p>The goal of this project is to....<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur repellendus totam laudantium aperiam porro unde voluptatem ducimus et quas! Aliquam, in. Facere, nobis.
                </p>
            </div>
        </div>
    </section>

    <!-- Section2: Persona and Scenario -->
    <section id="01">
        <div class="detail_content_wrap">
            <div class="detail_content_container">
                <h3>Persona and Scenario</h3>
                <p>To understand the feature that I’m going to build in, creating fictional Persona and Scenario was the fundamental need for this project. Pa-ru is an online shop that sells accessories. My potential target customer is a woman who is looking for accessories for work and personal use. Thinking about the goals and frustration that she might have for buying accessories online, and thinking about the shopping experience that she wants to have during shopping online. </p>
            </div>
            <div class="detail_content_container">
                <div class="img-left">
                    <img class="detail_images" src="images/mooday_faceIcons_.svg" alt="">
                    <caption class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis ut aspernatur.</caption>
                </div>
            </div>
        </div>
    </section>

    <!-- Section3: User Flow -->
    <section>
        <div class="detail_content_wrap">
            <div class="detail_content_container">
                <h3>User Flow</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, perspiciatis ut, veritatis harum temporibus ullam commodi officia placeat provident maiores, itaque minima dolores?</p>
            </div>
            <div class="detail_content_container">
                <div class="img-left">
                    <img class="detail_images" src="images/mooday_faceIcons_.svg" alt="">
                    <caption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque perspiciatis ut aspernatur.</caption>
                </div>
            </div>
        </div>
    </section>

    <!-- Section4:  Wireframes and Prototype -->
    <!-- Section5: User Testing and refinement  -->

    <div class="text_align" style="margin-bottom: 33px;">
        <a href="#" class="detail_btn">Back to Projects</a>
    </div>
    
    <script src="scripts/script.js"></script>
    </main>
    <?php require('partical/global/footer.php'); ?>
</body>
</html>