<div class="cards itemBox <?php echo $Project->filter; ?>">
    <!-- image -->
    <div>
        <a href="<?php echo $Project->link; ?>">
            <img src="images/<?php echo $Project->image; ?>" alt="<?php echo $Project->alt; ?>">
        </a>
    </div>
    <!-- content -->
    <div class="project_content">
        <a href="<?php echo $Project->link; ?>"><h2><?php echo $Project->name; ?></h2></a>
        <a href="<?php echo $Project->link; ?>"><h4><?php echo $Project->title; ?></h4></a>
        <a href="<?php echo $Project->link; ?>"><p><?php echo $Project->subject; ?></p></a>
        <!-- tags -->
        <div>
            <span class="tags">
                Design
            </span>
            
        </div>
    </div>
</div>
