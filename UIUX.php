<?php

// Required the class file in this page.
require('Classes/Projects.php');
// Call the product datas from products.php with require statement
include('data/details.php');

?>

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
        <?php require('partical/global/header.php'); ?>
        <main>
            <section class="homepage_work">
                <div class="homepage_work_wrap">
                    <h1 class="disci_heading text_align">UI/UX</h1>
                    <!-- Container of the works  -->
                    <div class="disci_container_wrap">
                       
                    <?php foreach($uiux as $Project) {
                        require('partical/cards/works.php');
                    } ?>
                        

                    </div>
                </div>
            </section>
            <script src="scripts/script.js"></script>
        </main>
        <?php require('partical/global/footer.php'); ?>
    </div>
</body>
</html>