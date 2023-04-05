<!-- Work1_Image-->
<div class="disci_container align_center">
    <div class="img_left">
        <a href="<?php echo $Project->link; ?>"><img src="images/<?php echo $Project->image; ?>" alt="<?php echo $Project->alt; ?>"></a>
    </div>
    <!-- Work1_Content -->
    <div class="disci_content">
        <a href="<?php echo $Project->link; ?>"><h2><?php echo $Project->name; ?></h2></a>
        <a href="<?php echo $Project->link; ?>"><h4><?php echo $Project->title; ?></h4></a>
        <a href="<?php echo $Project->link; ?>"><p style="margin-bottom: 20px;"><?php echo $Project->subject; ?></p></a>
        <div style="margin-bottom: 55px; margin-top: 18px;"><a href="<?php echo $Project->link; ?>" class="btn">View Full Project!!</a></div>
    </div>
