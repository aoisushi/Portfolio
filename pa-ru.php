<?php

    require('Classes/Projects.php');
    include('data/details_page.php');

    $current_project = $paru_details;

?>
<!DOCTYPE html>
<html lang="en">
<?php include('partical/global/head.php'); ?>
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
                    <a class="summary_proce_01" href="#01">Define Goals</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_02">02</h4>
                    <a class="summary_proce_02" href="#02">Solutions</a>
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
                        Pa-ru (パール) is a Japanese word means <span style="color: #EBB2B2; font-weight: bold;">pearl</span>. The name of the shop, Pa-ru, reflects our belief that every piece of jewelry is a precious treasure, just like a pearl. 
                    </p>
                    <p>
                        Pa-ru offers good quality accessories to customers who are aged <span style="color: #EBB2B2; font-weight: bold;">between 25 and 55</span>, making them affordable even for those seeking high-class products. 
                        
                        They not only sell <span style="color: #EBB2B2; font-weight: bold;">affordable and fashionable items</span> suitable for everyday wear and work, 
                        
                        but also have a line that emphasizes the purchase of high-quality jewelry at reasonable prices, showcasing an elegant and luxurious selection.
                    </p>
                </div>
            </div>
        </section>


        <!-- Section2: Overview -->
        <section id="01">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Overview</h3>
                    <p>
                        This is an app design for a fictional company named Pa-ru. They want to create an app to offer a better online shopping experience to users since there are lots of people prefer online shopping now.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section3: Project Goals -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Project Goals</h3>
                    <ul style="line-height: 1.8;">
                        <li>🚀 To create a user-friendly interface and shopping experience for users when purchasing products</li>
                        <li>🚀 To create a shopping platform for users to purchase Pa-ru accessories anywhere and anytime</li>
                        <li>🚀 To create a convenient user flow of check-out process, login/signup process and selecting customized product</li>
                        <li>🚀 To have different pages for different level of accessories and jewelries </li>
                    </ul>
                </div>

                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/paru_homepage.png" alt="homepage of the website of Pa-ru">
                        <!-- <caption>A persona for pre-production of Pa-ru</caption> -->
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Section4: Problems and solutions -->
        <section id="02">
            <div class="detail_content_wrap">
                <div class=detail_content_container>
                    <h3>Problem and Solutions</h3>
                </div>
            </div>


            <!-- <div class="detail_content_wrap">
                <div class="is-grid detail_problem_grid">
                    <div class="col-12-sm col-6-md col-4-lg">
                        <h3 class="text_align">Problems</h3>
                    </div>
                    <div class="col-12-sm col-6-md col-4-lg" style="margin: auto;">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="col-12-sm col-6-md col-4-lg">
                        <h3 class="text_align">Solutions</h3>
                    </div>
                </div>
            </div>
             -->


            <div class="detail_content_pro_sol">
                <div class="is-grid detail_problem_grid">
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_pink">
                            <p><span style="color: #DD6F6F; font-size: 1.4rem;">1️⃣ Want to ask questions</span> 
                            <br>users need help with purchasing the products </p>
                            <p>📌 Feature 👉 <a style="text-decoration: underline; "href="#chatbox">In-app Chat box function</a></p>
                        </div>
                        
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg paru_problem_narrow" style="margin: auto; color: #EBB2B2">
                        <ion-icon size="large" name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_yellow">
                            <p><span style="color: #b99e00; font-size: 1.4rem;">Live Chat box</span>
                                <br>create a chat box function for users to ask questions. e.x: size of the ring, delivery etc.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="detail_content_pro_sol">
                <div class="is-grid detail_problem_grid">
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_blue">
                            <p><span style="color: #7497c1; font-size: 1.4rem;">2️⃣ Collect user’s data</span> 
                            <br>client wants to collect customers’ data so they can do email marketing etc</p>
                            <p>📌 Feature 👉 <a style="text-decoration: underline; "href="#sign">Sign up / Login</a></p>
                        </div>
                        
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg paru_problem_narrow" style="margin: auto; color: #7497c1">
                        <ion-icon size="large" name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_yellow">
                            <p><span style="color: #b99e00; font-size: 1.4rem;">Sign up / Log in functions</span>
                                <br>Users can choose sign up as a member to get more information about promotions </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="detail_content_pro_sol">
                <div class="is-grid detail_problem_grid">
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_pink">
                            <p><span style="color: #DD6F6F; font-size: 1.4rem;">3️⃣ Personalization items</span> 
                            <br>Don’t want a complicated interface for choosing items </p>
                            <p>📌 Feature 👉 <a style="text-decoration: underline; "href="#cus">Customized selection </a></p>
                        </div>
                        
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg paru_problem_narrow" style="margin: auto; color: #EBB2B2">
                        <ion-icon size="large" name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_yellow">
                            <p><span style="color: #b99e00; font-size: 1.4rem;">user-friendly interface for customizing items</span>
                                <br>Design a interface that is easy to choose the customzied selection for their accessories  </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="detail_content_pro_sol">
                <div class="is-grid detail_problem_grid">
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_blue">
                            <p><span style="color: #7497c1; font-size: 1.4rem;">4️⃣ Messy check out process</span> 
                            <br>User probably give up purchasing if the check out process is not clear </p>
                            <p>📌 Feature 👉 <a style="text-decoration: underline; "href="#checkout">check out process</a></p>
                        </div>
                        
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg paru_problem_narrow" style="margin: auto; color: #7497c1">
                        <ion-icon size="large" name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="col-11-sm col-4-md col-4-lg">
                        <div class="paru_bg_yellow">
                            <p><span style="color: #b99e00; font-size: 1.4rem;">Reducing the steps of check out process</span>
                                <br>Use the minimum steps to finish the check out process</p>
                        </div>
                    </div>
                </div>
            </div>
            

        </section>

        <!-- Section: Persona and Scenario -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Persona</h3>
                    <p>To understand the feature that I am going to build in, creating fictional Persona and Scenario was the fundamental need for this project. Pa-ru is an online shop that sells accessories. My potential target customer is a woman who is looking for accessories for work and personal use. Thinking about the goals and frustration that she might have for buying accessories online, and thinking about the shopping experience that she wants to have during shopping online. </p>
                    <img style="border-radius: 10px; background-color: #FCF6D5; padding: 15px;" src="images/paru_persona_desktop.png" alt="A persona and scenario of Pa-ru">
                </div>
                
            </div>
        </section>

        <!-- Section: User Flow -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>User Flow</h3>
                    <p>
                        The user flow helped me to understand the in-app shopping flow / process that the user will go through as well as to optimized the user experience from choosing customization product to check out to stay simple and clean.    
                    </p>
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
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
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
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
                <div class="is-grid">
                    <div class="col-6-sm col-6-md col-6-lg">
                        <img class="proto_img" src="images/paru_app_product.png" alt="Customized product page for Pa-ru">
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
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
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
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
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
            <a href="project.php" class="detail_btn">Back to Projects</a>
            <!-- <a href="details_hisani.php" class="detail_btn">Next Project? </a> -->
        </div>
        
        <script src="scripts/script.js"></script>
    </main>
    <?php require('partical/global/footer.php'); ?>
</body>
</html>