<?php

    require('Classes/Projects.php');
    include('data/details_page.php');

    $current_project = $coBear_details;

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

        <?php require('partical/top.php'); ?>

        <!-- Project logo -->
        <div class="is-flex justi_cen">
            <img class="" src="images/cobear_logo_02.svg" alt="A logo from coBear" width="200">
        </div>
        
        <!-- Section1: The Goal of the Project -->
        <section>
            <h2 class="details_h2 text_align">Project Outlines</h2>
            
            <!-- Summary -->
            <div class="summary_wrap">
                <div class="summary_container">
                    <h4 class="summary_01">01</h4>
                    <a class="summary_proce_01" href="#01">Brainstorming</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_02">02</h4>
                    <a class="summary_proce_02" href="#02">Branding</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_03">03</h4>
                    <a class="summary_proce_03" href="#03">Beverage Design</a>
                </div>
            </div>
            <!-- The goal -->
            <div class="summary_container">
                <h4 class="text_align">The Goal of this project is....</h4>
                <div class="intro">
                    <p>
                        This project is to make an advertisment of a fictonal beverage company. <br>
                        The project brief is including marketing aspect, such as where do the beverage launch, who will be the target audience, etc...<br> 
                        The process of this project is define the position of the company, then design a logo for it, then design the package and poster for selling the beverage.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section2: Compony position -->
        <section id="01">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>The Company Position</h3>
                    <p>
                    CoBear is a coffee beer company that will be launched in their online shop, you may also purchase in bars, restaurants, and Liquor stores. CoBear is a combined word of “coffee” and “bear”. The fun fact about the name chosen is the pronunciation of “bear” and “beer” is similar, the owner thought it is more signature if used bear as the name. <br>

                    </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/CoBear_name.svg" alt="A persona and scenario of Pa-ru">
                        <caption>Cobear is a combined name from "coffee" and "bear"</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section3: Target Audience -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Target Audience</h3>
                    <p>As its name implies, coffee beer is a beverage that combined coffee and beer. The drinks were invented in the 1990s, during a boom in the brewing industry. Most coffee beers have an alcohol content of around 4 percent ABV, alcohol by volume. Therefore, the target audiences will be targeting the ages of 20~55, over 18 years old adults for all genders. It is geared to workers and family drinks for dinner. People who enjoy drinking coffee and beer, and also love to try something new. This will be the alternative drink to beer. Actually, the younger generation will be our main target audience so the logo and packaging design will be neutral, attractive, and outstanding. </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/drink.jpg" alt="This is a user flow of Pa-ru">
                        <caption>The age of target audiences will be 20~55, over 18 years old</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section4: Logo design -->
        <section class="02">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Logo Design</h3>
                    <p>For the logo design, there is a bear head created by the letter C. The beard also sounds like “bear” and “beer”, which actually is the form of the beer. It symbolized the form stick at their mouth when drinking beers. The logo design is combined with some neutral signs, a bear, and a beard for instance. Because bears are generally thought of as girl things, and the beard represents a male symbol. We chose Cocogoose as the typography of the logo, it’s a bold, round font style. The reason of chose this font is it’s outstanding. It emphasizes the name even when it becomes small, people can recognize the logo in the far distance. </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/cobear_logo_draft.svg" alt="A logo draft of CoBear">
                        <!-- <caption>The ages of target audiences will be 20~55, over 18 years old</caption> -->
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Final Logo</h3>
                    <p>For the color choice, we chose brown as the main color of the logo design. The reason of choose brown tone color as color because brown usually represents coffee and beer. Gradient color was also applied to the color version because it’s more stereoscopic and represented the reflection of the coffee beer.</p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                    <img class="detail_images" src="images/cobear_logo_final.svg" alt="A final designed logo for CoBear">

                        <!-- <caption>The ages of target audiences will be 20~55, over 18 years old</caption> -->
                    </div>
                </div>
            </div>
        </section>
       
        <section>
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
       
                    <h3>Poster</h3>
                    <p>
                        Finally, here are my final design of posters. I choose to do a simple design, gave it a lot of white space on the posters because I want to stay focus on the products. 
                    </p>

                <div class="cobear_final_work text_align">
                    <img class="detail_images" src="images/cobear_final_work-01.png" alt="Final Poster for CoBear" width="550">
                    <img class="detail_images" src="images/cobear_final_work-02.png" alt="Final Poster for CoBear" width="550">
                </div>


            </div>
            <!-- <div class="cobear_poster"></div> -->
        </section>

        <div class="text_align" style="margin-bottom: 33px;">
            <a href="UIUX.php" class="detail_btn">Back to Projects</a>
        </div>
        
        <script src="scripts/script.js"></script>
    </main>
    <?php require('partical/global/footer.php'); ?>
</body>
</html>