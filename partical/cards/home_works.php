
<div class="home_works col-12-sm col-12-md col-4-lg">
    <div class="image_container">
        <div class="image_bg">
            <a href="<?php echo $Project->link; ?>"><img src="images/<?php echo $Project->image; ?>" alt="<?php echo $Project->alt; ?>"></a>
        </div>
        <div class="image_hover">
            <a href="<?php echo $Project->link; ?>"><h4 class="hover_text">View project😆</h4></a>
        </div>
    </div>
    <div>
        <!-- <ul class="is-flex justi_cen">
            <li class="work_filter">UIUX</li>
            <li class="work_filter">Web Design</li>
        </ul> -->
    </div>
    <div class="home_content">
        <a href="<?php echo $Project->link; ?>"><h3><?php echo $Project->name; ?><br><?php echo $Project->title; ?></h3></a>
        <a href="<?php echo $Project->link; ?>"><p><?php echo $Project->subject; ?></p></a>
    </div>
</div>
