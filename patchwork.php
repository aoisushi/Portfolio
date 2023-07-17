<?php

    require('Classes/Projects.php');
    include('data/details_page.php');

    $current_project = $patchwork_details;

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
            <img class="" src="images/patchwork_patchwork_logo_hori.svg" alt="A logo from Pa-ru" width="300">
        </div>
        
        <!-- Section1: The Goal of the Project -->
        <section>
            <h2 class="details_h2 text_align">Project Outlines</h2>
            
            <!-- Summary -->
            <div class="summary_wrap">
                <div class="summary_container">
                    <h4 class="summary_01">01</h4>
                    <a class="summary_proce_01" href="#01">Findings</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_02">02</h4>
                    <a class="summary_proce_02" href="#02">Solution</a>
                </div>
                <div class="summary_container">
                    <h4 class="summary_03">03</h4>
                    <a class="summary_proce_03" href="#03">Design & Development</a>
                </div>
            </div>
            <!-- The goal -->
            <div class="summary_container">
                <h4 class="text_align">Why did we start design Patchwork?</h4>
                <div class="intro">
                    <p>
                    Due to the unclarity of the learning hub system that we’re using for allocating assignments, exams and contents for the courses at school. Jerrel and I decided to create a clearer version for our peers in the class. redesigning a new system to have a better user experience for overseeing the “Assignments” and “Exams” in one page.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section 1: Project Goal -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Project Goals</h3>
                    <ul>
                        <li>📌 To design a better system to oversee the Assignments and Exams in a new interface design based on the user feedback from our peers</li>
                        <li>📌 To organize a list of “Assignments” and “Exams” in a page of “Upcoming” page</li>
                        <li>📌 To create a easy-to-navigate user flow</li>
                        <li>📌 To create a responsive web page, mobile-first website</li>
                        <li>📌 To create a database to allow users to Create, Read, Edit and Delete (C.R.U.D)</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section 2: Target audience / Persona -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Persona</h3>
                    <p>Our target audience is the term 4 students in the New Media Design and Web Development course (Spring/Summer 2023). Creating a persona helps us to illustrate the user goal and frustration for this project. </p>
                    <img src="images/persona.png" alt="persona for patchwork">
                </div>
            </div>
        </section>

        <!-- Section3: Problems and findings -->
        <section id="01">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Finding & Problems</h3>
                    <ul>
                        <li>1️⃣ It’s hard to find information for each course in the original system such as the assignment outline, the due date of the assignments and exams etc..</li>
                        <li>2️⃣ The original system is cluttered and complicated to use. There is too much unnecessary information on the system. </li>
                        <li>3️⃣ In the user’s reflection, they often request some customization for their preferences, such as: dark mode, custom color for each course, name the label and so on.</li>
                        <li>4️⃣ Too much clicks until get into the page / information what they needed </li>
                        <li>5️⃣ There is no any reminder or due date shown on the front page</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section4: Solution  -->
        <section id="02">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Solution</h3>
                    <ul>
                        <li>1️⃣ Using labels and specific colors to divide all the courses.</li>
                        <li>2️⃣ Offer a list of upcoming “Assignments” and “Exams” on one page for our users</li>
                        <li>3️⃣ Also provide “Add”, “Edit” and “Delete” function to users to revised the items details </li>
                    </ul>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/patchwork_solution.png" alt="card design for patchwork">
                        <caption>Divided all courses by labeling and customized color</caption>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section5:  Wireframes and Prototype -->
        <section id="03">
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Wireframe and Prototype</h3>
                    <p style="margin-bottom: 40px;">We create the wireframe and prototype on Figma based on the data of analyzing user feedback by a survey and interview. </p>
                    <div style="display: grid; justify-content: center;">
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="480" height="1050" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FWC9vFtEbyVOKhYzVAOXG5S%2FPatchwork%3Fpage-id%3D285%253A155%26type%3Ddesign%26node-id%3D285-1044%26viewport%3D623%252C469%252C1.59%26t%3DLuZTUp0EqJa0RVww-1%26scaling%3Dscale-down%26starting-point-node-id%3D285%253A1044%26show-proto-sidebar%3D1%26mode%3Ddesign" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        <!-- Section5:  Features -->    
        <section id="feature">
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Features and Details of the app</h3>
                    <div>
                        <ul class="detail_feature" style="line-height: 1.8;">
                            <li><a class="feat_hover" href="#sign">📌 Login / Sign up</a></li>
                            <li><a class="feat_hover" href="#dashboard">📌 Dashboard → Upcoming</a></li>
                            <li><a class="feat_hover" href="#overview">📌 Course Overview</a></li>
                            <li><a class="feat_hover" href="#crud">📌 Add → Edit → Delete</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Feature details: Signup / Login -->
            <div id="sign" class="proto_container text_align">
                <h4>Sign up / Log in function</h4>
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
                <p>Users are required to sign up as a member in order to create their own database in their account. </p>
                <div class="is-flex">
                    <div>
                        <img src="images/patchwork_signin.png" alt="Login page for patchwork">
                        <!-- <caption>A Login and Sign up process for patchwork</caption> -->
                    </div>
                </div>
            </div>

            <!-- Feature details: Dashboard and upcoming -->
            <div id="dashboard" class="proto_container text_align">
                <h4>Dashboard → Upcoming</h4>
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
                <p>After logging in to the homepage, a dashboard will appear on the front page. We are using cards to show the title of the assignments/exams, due date and so on. Users can choose the action of “mark as completed”, “edit” and “delete” by clicking the icons to change the states of the item. We decided to use card design for the layout because it looks like sewing the rags together. </p>
                <div class="is-flex">
                    <div>
                        <img src="images/patchwork_dashboard.png" alt="Dashboard for patchwork">
                        <!-- <caption>A Login and Sign up process for patchwork</caption> -->
                    </div>
                </div>
            </div>


            <!-- Feature details: Course overview -->
            <div id="overview" class="proto_container text_align">
                <h4>Course Overview</h4>
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
                <p>This page lists all the courses in rows of card design. Each card has two buttons of “Assignments” and “Content”. It links back to the D2L page to check the criteria and instruction of the assignment itself.</p>
                <div class="is-flex justi_cen">
                    <div>
                        <img src="images/patchwork_course.png" alt="Course Overview for patchwork" width="650">
                        <!-- <caption>A Login and Sign up process for patchwork</caption> -->
                    </div>
                </div>
            </div>


            <!-- Feature details: C.R.U.D -->
            <div id="crud" class="proto_container text_align">
                <h4>Add → Edit → Delete</h4>
                <a href="#feature"><ion-icon size="large" name="arrow-up-outline"></ion-icon></a>
                <p>Except for offering the existing list of upcoming assignments and exams, users are allowed to add, edit and delete items on their database. For the case if the instructor offers an extension for us or rearranges the schedule of the class. Furthermore, when users click the “mark as completed”, the card will disappear on the dashboard and move to the completed section of the filter. </p>
                <div class="is-flex">
                    <div>
                        <img src="images/patchwork_crud.png" alt="CRUD for patchwork">
                        <!-- <caption>A Login and Sign up process for patchwork</caption> -->
                    </div>
                </div>
            </div>

        </section>

        <!-- Section6: Web Development -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h3>Web Development</h3>
                    <p>After finishing the part of design, I passed it to <span><a style="text-decoration: underline; color: #EBB2B2;" href="https://jerrellustre.com/backend-projects/Jerrellustre-patchwork-ProjectLog.php" target="_blank">Jerrel</a></span> to develop the website.  </p>
                    <ul>
                        <li><h4>Languages</h4></li>
                        <li>🚀 Tailwind</li>
                        <li>🚀 PHP Laravel</li>
                        <li>🚀 SQL & MySQL </li>
                        <li>🚀 HTML</li>
                        <li>🚀 Alpine.js</li>
                    </ul>
                    <div style="margin-top: 33px;">
                        <a href="https://patchwork.jerrellustre.com/public/" target="_blank" class="detail_btn">View Live Page</a>
                    </div>
                </div>
                <div class="detail_content_container">
                    <div class="img-left">
                        <img class="detail_images" src="images/patchwork_dark_mode.png" alt="This is a user flow of Pa-ru">
                        <caption>The web version of Patchwork</caption>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section7: Key takeaways and moving forward -->
        <section>
            <div class="detail_content_wrap">
                <div class="detail_proto_container">
                    <h3>Takeaways / Moving Forward</h3>
                    <p>For the team, creating “Patchwork” served as a demonstration of what to expect when working in the web development industry. It included gathering research and feedback from peers to improve an existing design, collaboration between designer and developer, project management, and deployment of a project for real world use. Overall, we believe that Patchwork was a valuable learning experience as students starting out in this industry and we’re glad to be a part of something that is of benefit to our peers as well. </p>
                </div>
            </div>

            <div class="detail_content_wrap">
                <div class="detail_content_container">
                    <h4>Moving forward with this project in the future, we plan to…</h4>
                        <ul>
                            <li>1️⃣ Gather feedback and testing from students in order to create further improvements</li>
                            <li>2️⃣ Allow users to add assignments and exams to a “completed” category</li>
                            <li>3️⃣ Allow users to toggle between light and dark mode from within the site</li>
                            <li>4️⃣ Allow users to customize the site to their own liking. (i.e custom images for each course)</li>
                        </ul>
                        
                    </div>
                    <div class="detail_content_container">
                        <div class="img-left">
                            <img class="detail_images" src="images/patchwork_mockup.png" alt="A mock up for patchword">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <div class="text_align" style="margin-bottom: 33px;">
            <a href="project.php" class="detail_btn">Back to Projects</a>
            <!-- <a href="details_hisani.php" class="detail_btn">Next Project? </a> -->
        </div>
        
        <script src="scripts/script.js"></script>
    </main>
    <?php require('partical/global/footer.php'); ?>
</body>
</html>

