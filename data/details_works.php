<?php

// UIUX
$paru = new Project([
    "name" => "Pa-ru",
    "title" => "Accessories Online Shop",
    "subject" => "UI/UX Study Case",
    "image" => "paru_cover.jpg",
    "alt" => "Accessories online shop in UIUX mobile and desktop design",
    "link" => "details_uiux_pages.php"
]);

$hisani = new Project([
    "name" => "Hisani",
    "title" => "Omakase Restaurant",
    "subject" => "Mobile App",
    "image" => "hisani_cover.jpg",
    "alt" => "A design of mobile page for a omakase restaurant"
]);

// Branding
$coBear = new Project([
    "name" => "Cobear",
    "title" => "Beverage Company",
    "subject" => "Digital Illustration",
    "image" => "coBear_cover.jpg",
    "alt" => "A beverage company branding design"
]);

$mooday = new Project([
    "name" => "Mooday",
    "title" => "Mood Tracker",
    "subject" => "App design",
    "image" => "mooday_cover.jpg",
    "alt" => "A style gudie for an app design"
]);

$c4choco = new Project([
    "name" => "c4choco",
    "title" => "Illustration",
    "subject" => "Persional Brand",
    "image" => "c4choco_cover.png",
    "alt" => "This is Kylie's personal illustration brand",
    "link" => "details_c4choco.php"
]);


$home = [$paru, $hisani, $coBear];
$uiux = [$paru, $hisani];
$branding = [$coBear, $c4choco, $mooday];


?>