<?php

    require('Classes/Projects.php');
    include('data/details_page.php');

    $current_project = $mooday_details;

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
            <img class="" src="images/mooday_logo2.svg" alt="A logo from Mooday" width="250">
        </div>
        
        <!-- Section1: The Goal of the Project -->
        <section>
            <h2 class="details_h2 text_align">Project Outlines</h2>
            
            <!-- Summary -->
            <div class="summary_wrap">
                <div class="summary_container">
                    <h4 class="summary_01">01</h4>
                    <a class="summary_proce_01" href="#01">Define the goal</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_02">02</h4>
                    <a class="summary_proce_02" href="#02">Logo Design</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_03">03</h4>
                    <a class="summary_proce_03" href="#03">Style guide</a>
                </div>
            </div>
            <!-- The goal -->
            <div class="summary_container">
                <h4 class="text_align">My role in this project..</h4>
                <div class="intro">
                    <p>My main role in this project is graphic desinger and UIUX designer. <br>
                        I mainly design the style guide to make the thing cohisive in this project.
                    </p>
                </div>
            </div>
        </section>

        <!-- Group member -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Group Members</h3>
                    
                    <div class="mooday_members_container">
                        
                        <div class="mooday_members">
                            <img src="images/mooday_members-02.svg" alt="A member icon from mooday - Jerrel" width="80">
                            <div>
                                <h4>Jerrel</h4>
                                <p>Project Manager</p>
                            </div>
                        </div>

                        <div class="mooday_members">
                            <img src="images/mooday_members-03.svg" alt="A member icon from mooday - Haerin" width="80">
                            <div>
                                <h4>Haerin</h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>

                    
                        <div class="mooday_members">
                            <img src="images/mooday_members-04.svg" alt="A member icon from mooday - Kylie" width="80">
                            <div>
                                <h4>Kylie</h4>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                        
                        <div class="mooday_members">
                            <img src="images/mooday_members-05.svg" alt="A member icon from mooday - Victor" width="80">
                            <div>
                                <h4>Victor</h4>
                                <p>Web developer</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Section1: Goal -->
        <section id="01">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <div>
                        <h3>About Mooday</h3>
                        <p>
                            Mooday is a combine words from Mood and Day, its an mood tracking and journal app that allows users to mark down their daily moods by inserting mooday’s emojis and overseeing your moods by selecting a period, for example, you can check you daily mood by selecting a week or a month.
                        </p>
                    </div>
                   
                    <div>
                        <h3>Brainstorming</h3>
                        <p>
                            For the first week, we had a meeting for brainstorming about choosing a topic that we were going to work on. We started brainstorming and gathering the information on Figma, and doing some research for the app design and user flow.  
                        </p>
                    </div>

                    <div>
                        <h3>Gantt Charts and workflow timeline</h3>
                        <p>
                            One of the most important things on Waterfall Methodologies is scheduling the workflow in timeline for 5 weeks project in the first place. Project owner will be responsive to this job, we as a member should report to the leader how long the task would take to complete. 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="02">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Logo Design</h3>
                    <p>
                        We decided to have a remarkable and cute design after having our meeting in the first beginning. Since there are many of journal and schedule apps in the market, one way to make our app outstanding is having some customized design elements so I hand-drawing a mascot for our app.
                    </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/mooday_logo.svg" alt="A logo for mooday">
                        <caption> I created a mascot which is a yellow monster with a smiley face and it was drawn by myself on procreate.</caption>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Designing Face Icons</h3>
                    <p>
                        There are the mood emojis that exclusive in Mooday, including normal, happy, sad and other basic moods in daily life.<br>
                        Different color represents different moods of them. Yellow as normal, Pink as happy, Blue as sad, Orange as angry, Green as bored and Dark blue as depressed.
                    </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/mooday_faceIcons_.svg" alt="Face expression icon for mooday">
                        <caption></caption>
                    </div>
                </div>
            </div>
        </section>
       
        <section id="03">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <div>
                        <h3>Color Scheme</h3>
                        <p>
                            In terms of color scheme, we have decided to use yellow and green as the main colors because these two colors give people a gentle, friendly, and natural feeling.
                        </p>
                    </div>
                    <img src="images/mooday_colors.svg" alt="Color palette for Mooday">
                    <caption>Color scheme for Mooday</caption>
        </section>

        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Designing Face Icons</h3>
                    <p>
                        We used some customized icons for Mooday. Those icon will appeal as a navigation menu in the bottom.
                    </p>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/mooday_navicon.svg" alt="Face expression icon for mooday">
                        <caption></caption>
                    </div>
                </div>
            </div>
        </section>
        
        
        <div class="text_align" style="margin-bottom: 33px;">
            <a href="branding.php" class="detail_btn">Back to Projects</a>
        </div>
        
        <script src="scripts/script.js"></script>
    </main>
    <?php require('partical/global/footer.php'); ?>
</body>
</html>