<?php

    require('Classes/Projects.php');
    include('data/details_page.php');

    $current_project = $hisani_details;

?>
<!DOCTYPE html>
<html lang="en">
<?php include('partical/global/head.php'); ?>
  <body>
    <?php require('partical/global/header.php'); ?>
    <main>

        <?php require('partical/top.php'); ?>

        <!-- Project cover -->
        <div class="hisani_cover"></div>
        
        <!-- Section1: The Goal of the Project -->
        <section>
            <h2 class="details_h2 text_align">Project Outlines</h2>
            
            <!-- Summary -->
            <div class="summary_wrap">
                <div class="summary_container">
                    <h4 class="summary_01">01</h4>
                    <a class="summary_proce_01" href="#01">Topic Intro</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_02">02</h4>
                    <a class="summary_proce_02" href="#02">Layout Design</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_03">03</h4>
                    <a class="summary_proce_03" href="#03">Hand-code</a>
                </div>
            </div>
            <!-- The goal -->
            <div class="summary_container">
                <h4 class="text_align">The Goal of this project is....</h4>
                <div class="intro">
                    <p>
                        The aim of this project is to design and hand-code 3 device sizes for mobile, tablet and desktop.<br>
                        Starting to design the layout in Figma and using HTML, CSS and JavaScript to code the website.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section2: Intro -->
        <section id="01">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>What is Hisani?</h3>
                    <p>Hisani(久日) is a fiction Omakase restaurant that located in Vancouver.<br>
                        Omakase in Japanese means "chef's choice." It refers to a dining experience where the customer entrusts the chef to choose and prepare a multi-course meal.
                    </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/hisani_mobile.png" alt="A mobile size of Hisani">
                        <caption>mobile size cover of Hisani</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section3: Design -->
        <section id="02">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Design</h3>
                    <p>
                        I started designing the layout in Figma. As the topic of this project is Omakase restaurants, the website design should look high-end and luxury since the price of Omakase are relatively high. However, considering that it is a restaurant located in Vancouver, the target audience are not only Japanese but also people who come from all around the world. Then, I decided to design a website that looks trendy and exclusive, rather than a traditional Omakase website.
                    </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/hisani_desktop.png" alt="This is a user flow of Pa-ru">
                        <caption>Desktop size for Hisani</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section4:  Wireframes and Prototype -->
        <section id="03">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Coding</h3>
                    <p>
                    I built the website's foundation using HTML, styled it with CSS, and implemented a dynamic hamburger menu using JavaScript for mobile and tablet devices. The main challenge was making the website responsive to different screen sizes, which I achieved by utilizing CSS grid and media queries. By doing so, I was able to optimize the layout for desktop, tablet, and mobile devices.
                    </p>
                </div>
            </div>
            <div class="text_align">
                <a href="#" class="live_btn">View Live Page</a>
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