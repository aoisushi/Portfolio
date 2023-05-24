<?php

require('Classes/Projects.php');
include('data/details_works.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php include('partical/global/head.php'); ?>
<body>
    <div class="wrapper">
        <?php require('partical/global/header.php'); ?>
        <main>
            <section>
                <div class="project_heading is-flex justi_cen">
                    <h1>Projects</h1>
                </div>
                <div class="filter">
                    <ul>
                        <li class="list active" data-filter="all">ALL</li>
                        <li class="list " data-filter="uiux">UIUX</li>
                        <li class="list " data-filter="web">Web Dev</li>
                        <li class="list " data-filter="branding">Branding</li>
                    </ul>
                </div>

                <div class="projects_container">

                    <?php 
                        foreach($all as $Project) {
                            require('partical/cards/works.php');
                        }
                    ?>

                </div>
            </section>
        </main>
        <?php require('partical/global/footer.php'); ?>
    </div>
    
    <script src="scripts/script.js"></script>
    <!-- filter script -->
    <!-- Insert jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
    crossorigin="anonymous"></script>

    <!-- jQuery code -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.list').click(function(){
                const value = $(this).attr('data-filter');
                if (value == 'all'){
                    $('.itemBox').show('1000');
                }
                else {
                    $('.itemBox').not('.' + value).hide('1000');
                    $('.itemBox').filter('.' + value).show('1000');
                }
            })
        })

        // add active class on selected item
        $('.list').click(function(){
            $(this).addClass('active').siblings().removeClass('active');
        })
    </script>

</body>
</html>