<?php

    require('Classes/Projects.php');
    include('data/details_page.php');

    $current_project = $choffe_details;

?>
<!DOCTYPE html>
<html lang="en">
<?php include('partical/global/head.php'); ?>
  <body>
    <?php require('partical/global/header.php'); ?>
    <main>

        <?php require('partical/top.php'); ?>

        <div class="is-flex justi_cen">
            <img class="" src="images/Choffe logo_hor.svg" alt="A logo from Choffe" width="250">
        </div>
        <!-- Section1: The Goal of the Project -->
        <section>
            <h2 class="details_h2 text_align">Project Outlines</h2>
            
            <!-- Summary -->
            <div class="summary_wrap">
                <div class="summary_container">
                    <h4 class="summary_01">01</h4>
                    <a class="summary_proce_01" href="#01">Idea Plan</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_02">02</h4>
                    <a class="summary_proce_02" href="#02">Brand Design</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_03">03</h4>
                    <a class="summary_proce_03" href="#03">Web Development</a>
                </div>
            </div>
            <!-- The goal -->
            <div class="summary_container">
                <h4 class="text_align">About Choffe</h4>
                <div class="intro">
                    <p>
                    Choffe is a fictional coffee shop that pretends to exist in Metro Vancouver. The name 'Choffe' is a creative combination of 'Choco' and 'Coffee.' They are passionate about serving the best waffles and coffee in town, using only the finest ingredients and brewing techniques.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section2: Idea Plan -->
        <section id="01">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Idea Plan</h3>
                    <p>The idea of this project is because I have always wanted to create my own coffee shop, so this landing page could possibly be my pre-business website. I have also incorporated elements that I like, such as coffee and waffles. The name is a combination of my pet rabbit Choco's name and the word "coffee".
                    </p>

                    <!-- <p>This website is primarily customer-oriented. Although it does not include an online shop functionality, the purpose is to show customers the menu and introduction of the coffee shop.</p> -->
                    <p>The process of this project starts with from creating the brand design to web development. In the project, I want to showcase some fundamental knowledge about web development, such as working with HTML and JavaScript, as well as utilizing Tailwind, the frameworks CSS.</p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/door_mock_up.jpg" alt="A door mock up for Choffe">
                        <caption>Choffe, the shop of selling waffles and coffes</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- The Process -->
        <section id="">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Project Plan</h3>
                    <div class="choffe_project_plan">
                        <ul>
                            <li><h4>🧇 Design</h4></li>
                            <li>Logo Design ➡️ Color scheme decision ➡️ Graphic design ➡️ Creating prototype on Figma</li>
                            
                            <li><h4>🧇 Coding</h4></li>
                            <li>Started Tailwind installation ➡️ Create the website structure in HTML ➡️ Styling with Tailwind ➡️ Adding plugin </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



        <!-- Section3: Brand Design -->
        <section id="02">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Brand Design</h3>
                    <p>
                    For the logo design, I created a floral pattern that resembles a waffle a the main logo/icon. The floral element actually represents the shape of a waffle and also symbolizes the thick paper filter used in pour-over coffee brewing. The perspective is from a top-down view.
                    </p>
                    <p>Using an orange color scheme as the primary color is because orange-yellow tones can stimulate people's appetite, and it also represents the color of waffles.</p>

                    <img class="detail_images" src="images/choffe_styleguide.jpg" alt="Style guide, the introuction about the design of Choffe">
                </div>

            </div>
        </section>

        <!-- Section4:  Wireframes and Prototype -->
        <section id="03">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Web Development</h3>
                    <p>
                    For the part of web development, I used Tailwind CSS to complete the styling of the entire website this time. The challenge I'm facing is learning how to use Tailwind to code the hamburger menu, using and applying a plugin to create the slider section. 
                    </p>

                    <div>
                        <!-- <h4>Website structure</h4> -->
                        <p>As this website primarily aims to provide information to users about the products available in store so the website doesn’t contain e-commerce services. However, the website's navigation consists of sections such as About, Menu, Shop, and Contact, which not only allow users to learn about the services and products offered by the store, but also offers shop information such as location and opening hour to users.</p>
                    </div>

                    <!-- <div>
                        <h4>Breakpoint</h4>
                        <p>In order to have a better user experience of the website, I used media queries to make the three different device sizes responsively and used grid for the basic layout of the website. </p>
                        <p>Since Tailwind CSS follows a mobile-first approach, I utilized the default breakpoints provided by Tailwind and specifically targeted the medium (md) and large (lg) breakpoints to address tablet and desktop sizes respectively.</p>
                        <p>In terms of layout and design, I employed a grid system to ensure responsiveness across different devices. The grid system was primarily configured using the medium (md) and large (lg) breakpoints to create a responsive design for tablet and desktop sizes. By using grid-based layout techniques, I aimed to provide a consistent and visually pleasing experience for users across various devices.</p>
                    </div> -->
                </div>

                
            </div>
            <div class="text_align">
                <a href="https://aoisushi.github.io/choffe/dist/index.html" class="live_btn" target="_blank">View Live Page</a>
            </div>

        </section>

        <div class="text_align" style="margin-bottom: 33px;">
            <a href="project.php" class="detail_btn">Back to Projects</a>
        </div>
        
        <script src="scripts/script.js"></script>
    </main>
    <?php require('partical/global/footer.php'); ?>
</body>
</html>