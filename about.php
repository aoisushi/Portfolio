<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kylie Chan | UI/UX Designer</title>
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
                <!-- About Me -->
                <section class="aboutMe">
                    <div class="about_hero_wrap">
                        <div class="is-flex justi_cen">
                            <div class="about_hero_container">
                                <div class="about_hero_photo"></div>
                            </div>
                        </div>
                        <div class="about_hero_content">
                            <h1>About Kylie💛🦁</h1>
                            <p>My name is Kylie, I’m a UIUX designer and Illustrator who originally comes from Hong Kong. I'm currently studying New Media and Web Development at BCIT. I’m looking forward to working as a UIUX designer in Canada. </p>
                        </div>
                     </div>
                </section>
        </div>
                <!-- My vlaue -->
                <section class="myValue">
                    <h2 class="is-flex justi_cen about_spacing">✨My Values</h2>
                    <div class="values_wrap is-grid">
                        <!-- first value -->
                        <div class="values col-12-sm col-4-md col-4-lg">
                            <h4 class="values_h4 bg_yel text_align">Fun/Create🐰</h4>
                            <p class="values_p bg_yel">I always want to design something with a sense of humor and fun in my design pieces. Being creative and original is one of my biggest topics and values in my design career.</p>
                        </div>
                        <!-- second value -->
                        <div class="values col-12-sm col-4-md col-4-lg">
                            <h4 class="values_h4 bg_blue text_align">Collaborative🐰</h4>
                            <p class="values_p bg_blue">I enjoy working with others. Because it's fun that I can learn different knowledge and have a new perspective of seeing things when I am working and communicating with peers.</p>
                        </div>
                        <!-- third value -->
                        <div class="values col-12-sm col-4-md col-4-lg">
                            <h4 class="values_h4 bg_pink text_align">Flexibility🐰</h4>
                            <p class="values_p bg_pink">I can be flexible to design different styles of design to fulfill my client’s needs. I also good at combining clients’ needs and my idea in the design.</p>
                        </div>
                    </div>
                    <div class="is-flex justi_cen"><img class="div_3dots" src="images/3dots.svg" alt="diving line"></div>
                </section>
                <!-- My Skills -->
                <section class="mySkills">
                    <h2 class="is-flex justi_cen about_spacing">✨Skills</h2>
                    <!-- first value -->
                    <div class="skills_wrap">
                        <div class="skills_container col-12-sm col-4-md col-4-lg">
                            <h4 class="is-flex justi_cen about_spacing">💼 UIUX</h4>
                            <div class="skills_scp">
                                <ul class="circle bg_pink skills_item">
                                    <li>💼 Persona</li>
                                    <li>💼 User Testing</li>
                                    <li>💼 App Design</li>
                                    <li>💼 Web Design</li>
                                </ul>
                            </div>
                        </div>
                    <!-- second value -->
                    <div class="skills_container col-12-sm col-4-md col-4-lg">
                        <h4 class="is-flex justi_cen about_spacing">💼 Marketing</h4>
                        <div class="skills_scp">
                            <ul class="circle bg_yel skills_item">
                                <li>💼 Branding</li>
                                <li>💼 Digital Marketing</li>
                                <li>💼 Social Media</li>
                                <li>💼 SEO</li>
                            </ul>
                        </div>
                    </div>
                    <!-- thrid value -->
                    <div class="skills_container col-12-sm col-4-md col-4-lg">
                        <h4 class="is-flex justi_cen about_spacing">💼 Web Develop</h4>
                        <div class="skills_scp">
                            <ul class="circle bg_blue skills_item">
                                <li>💼 HTML</li>
                                <li>💼 CSS</li>
                                <li>💼 JavaScipt</li>
                                <li>💼 PHP & SQL</li>
                            </ul>
                        </div>
                    </div>
                </div>
                </section>
                <!-- <section>
                    <div class="text_aglin">
                        <h2>You can Talk with me in...</h2>
                            <div class="is-flex">
                                <button class="btn">Cantonese</button>
                                <button class="btn">Mandarin</button>
                                <button class="btn">Japanese</button>
                                <button class="btn">English</button>    
                            </div>
                    </div>
                </section> -->
                <!-- Contact Me -->
                <section class="contactMe">
                    <div class="contactMe_container about_spacing text_align">
                        <img class="contant_image" src="images/personal-logo-refine-03.png" alt="Kylie's circle logo">
                        <div class="contact_content">
                            <h3>Keep In Touch</h3>
                            <p s>Let's work together</p>
                            <a class="btn" href="mailto:kylieaoichan@gmal.com">E-mail Me</a>
                            <a class="btn" href="https://www.linkedin.com/in/kyliechan731/">LinkedIn</a>
                        </div>
                    </div>
                </section>
                <script src="scripts/script.js"></script>
            </main>
        <?php require('partical/global/footer.php') ?>
    </div>
</body>
</html>