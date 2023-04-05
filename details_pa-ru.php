<?php

    require('Classes/Projects.php');
    include('data/details_page.php');

    $current_project = $paru_details;

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
            <img class="" src="images/pa-ru_logo_trans.svg" alt="A logo from Pa-ru" width="120">
        </div>
        
        <!-- Section1: The Goal of the Project -->
        <section>
            <h2 class="details_h2 text_align">Project Outlines</h2>
            
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
                <h4 class="text_align">What is Pa-ru..?</h4>
                <div class="intro">
                    <p>
                        Pa-ru in Japanese means pearl. The reason that we name the shop Pa-ru is because we treat every single jewelry as treasure as peral.<br>
                        In this project, I designed a desktop and mobile version for Pa-ru.<br>
                        Every devices has their own feature.<br>
                        The feature of the mobile will be mainly showcased in this page. 
                    </p>
                </div>
            </div>
        </section>

        <!-- Section2: Persona and Scenario -->
        <section id="01">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Persona</h3>
                    <p>To understand the feature that I am going to build in, creating fictional Persona and Scenario was the fundamental need for this project. Pa-ru is an online shop that sells accessories. My potential target customer is a woman who is looking for accessories for work and personal use. Thinking about the goals and frustration that she might have for buying accessories online, and thinking about the shopping experience that she wants to have during shopping online. </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/paru_persona_desktop.png" alt="A persona and scenario of Pa-ru">
                        <caption>A persona for pre-production of Pa-ru</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section3: User Flow -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>User Flow</h3>
                    <p>User flow is the process that users will experience on the website. The user flow that I created for this project is a shopping process on Pa-ru website. As I created 2 devices which are mobile and desktop for this project. For desktop, I mainly focus on the shopping experience. On the other hand, for mobile, not only for the shopping experience, but also includes functions of searching, chat box, barcode scanning in-shop, signing up, and menu etc..</p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/paru_app_userflow.png" alt="This is a user flow of Pa-ru">
                        <caption>This is the path of the check out process</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section4: Feature of the app  -->
        <section id="feature">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Features of the app</h3>
                    <div>
                        <ul class="detail_feature" style="line-height: 1.8;">
                            <li><a class="feat_hover" href="#sign">📌 Sign up / Log in function</a></li>
                            <li><a class="feat_hover" href="#cus">📌 Customized products</a></li>
                            <li><a class="feat_hover" href="#checkout">📌 Check out Process</a></li>
                            <li><a class="feat_hover" href="#chatbox">📌 In-app Chat box function</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section5:  Wireframes and Prototype -->
        <section id="02">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Prototype</h3>
                    <p>After that, prototypes for desktop and app were created, containing different features based on the information from persona and scenario. To make the features responsive, I added interaction to each page, connecting all the pages, and using components to make buttons functionals. </p>
                </div>
            </div>

            <div id="sign" class="proto_container text_align">
                <h4>Sign up / Log in function</h4>
                <a href="#feature"><img class="back_to_top" src="images/right.svg" width="30"></a>
                <div class="is-grid">
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_login.png" alt="Login page for Pa-ru">
                        <caption>Login in page for Pa-ru</caption>
                    </div>
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_signup.png" alt="Sign in page for Pa-ru">
                        <caption>Sign in page for Pa-ru</caption>
                    </div>
                </div>
            </div>

            <div id="cus" class="proto_container text_align">
                <h4>Customized products</h4>
                <a href="#feature"><img class="back_to_top" src="images/right.svg" width="30"></a>
                <div class="is-grid">
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_prodcut.png" alt="Customized product page for Pa-ru">
                        <caption>Product page, customer can customize their selection in this page</caption>
                    </div>
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_checkout.png" alt="The confirm and check out page for Pa-ru">
                        <caption>After selecting their customization, the check out page will show up the detail </caption>
                    </div>
                </div>
            </div>

            <div id="checkout" class="proto_container text_align">
                <h4>Check out Process</h4>
                <a href="#feature"><img class="back_to_top" src="images/right.svg" width="30"></a>
                <div class="is-grid">
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_checkoutprocess.png" alt="Check out process for Pa-ru">
                        <caption>In check out process, there would be a few step that required to select</caption>
                    </div>
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_checkoutprocess_2.png" alt="Second step in check out process for Pa-ru">
                        <caption>The second process would be payment method</caption>
                    </div>
                </div>
            </div>
            <div id="chatbox" class="proto_container text_align">
                <h4>In-app Chat box functino</h4>
                <a href="#feature"><img class="back_to_top" src="images/right.svg" width="30"></a>
                <div class="is-grid">
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_chatbox.png" alt="Chat box function for Pa-ru">
                        <caption>Pa-ru app offer a online chat box function for customers</caption>
                    </div>
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_chatbox_2.png" alt="Chat box function for Pa-ru">
                        <caption>Pa-ru app offer a online chat box function for customers</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section6: User Testing and refinement  -->
        <section id="03">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
       
                    <h3>User Testing and Refinement</h3>
                    <p>
                        In this project, I'm using Maze for the tool of the user testing.
                        In this usability testing, some missions would be set to ask users to finish a few tasks of signing up, add items to the wishlist, test about the chat box function etc. After that, I set some questionnaires for asking user suggestions and comments; Setting rating in the test of asking their satisfaction with the app.
                    </p>

                    <p>
                        Overall, users are satisfied about using the app. They like the interface design, the navigation is clear and easy to use. However, it shows some bugs on Maze but not on Figma. It leads to some rates of the tasks having dropped off and causing confusion to users. 
                    </p>
                 <img class="detail_images" src="images/paru_finding.png" alt="The user testing result at Maze">

            </div>
        </section>
        <!-- <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Finding</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iusto perferendis quae commodi.</p>
                    <img class="detail_images" src="images/mooday_faceIcons_.svg" alt="">
                </div>
                <div class="detail_content_container">
                    <h3>Method</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iusto perferendis quae commodi.</p>
                    <img class="detail_images" src="images/mooday_faceIcons_.svg" alt="">
                </div>
            </div>
        </section> -->
        
        <div class="text_align" style="margin-bottom: 33px;">
            <a href="UIUX.php" class="detail_btn">Back to Projects</a>
            <!-- <a href="details_hisani.php" class="detail_btn">Next Project? </a> -->
        </div>
        
        <script src="scripts/script.js"></script>
    </main>
    <?php require('partical/global/footer.php'); ?>
</body>
</html>