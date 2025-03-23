<div class="col-12-sm col-6-md col-6-lg">
    <div class="card-container">

        <!-- image -->
        <div class="image-cover">
            <a href="<?php echo $Project->link; ?>">
                <img src="images/<?php echo $Project->image; ?>" alt="<?php echo $Project->alt; ?>">
            </a>
        </div>
        
        <!-- title -->
        <div class="card-content">
            <a href="<?php echo $Project->link; ?>">
                <h3 class="h4 blue">
                    <?php echo $Project->name; ?>
                </h3>
            </a>

            <!-- subtitle -->
            <a href="<?php echo $Project->link; ?>">
                <p class="p text">
                    <?php echo $Project->subject; ?>
                </p>
            </a>

            <!-- tags -->
            <div class="work-tags-container">
                <?php foreach($Project->attr as $attr_item): ?>
                <span class="tag"><?php echo $attr_item; ?></span>
                <?php endforeach; ?>
            </div>  
        </div>
    </div>
</div>
