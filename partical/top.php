<section>
    <div class="details_heading text_align justi_cen">
        <h1><?php echo $current_project->project_name; ?></h1>
        <h4><?php echo $current_project->project_title; ?></h4>
        <p><?php echo $current_project->project_subject; ?></p>
    </div>

</section>

<!-- Yellow section -->
<section class="bg_yel art_sections artifact-overview">
            <div class="top_container">
                <div class="arti_hero_bg is-flex justi_cen">
                    <!-- Head photo -->
                    <img src="images/<?php echo $current_project->image_url; ?>" alt="<?php echo $current_project->alt; ?>" width="180">
                </div>
                <!-- Content -->
                <div class="top_content">
                    <div class="is-grid">
                        <div class="col-12-sm col-4-md col-4-lg">
                            <h3>Role</h3>
                            <ul class="col-12-sm col-6-md col-4-lg">
                                <li><?php echo $current_project->role; ?></li>
                            </ul>
                        </div>
                        <div class="col-12-sm col-4-md col-4-lg">
                            <h3>Duration</h3>
                            <ul class="col-12-sm col-6-md col-4-lg">
                                <li><?php echo $current_project->duration; ?></li>
                            </ul>
                        </div>
                        <div class="col-12-sm col-4-md col-4-lg">
                            <h3>Tools</h3>
                            <ul class="col-12-sm col-6-md col-4-lg">
                                <li><?php echo $current_project->tools; ?></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="top_content_intro">
                        <h3>Introduction</h3>
                        <ul>
                            <li>
                                <?php echo $current_project->introduction; ?>
                            </li>
                        </ul>
                    </div>
                    
                    <a href="<?php echo $current_project->live; ?>" class="live_btn">View Live Page</a>
                </div>
            </div>
        </section>