<?php

// UIUX 
$paru = new Project([
    "filter" => "uiux",
    "name" => "Pa-ru",
    "title" => "Accessories Online Shop",
    "subject" => "E-commerce App design",
    "image" => "paru_cover.jpg",
    "alt" => "Accessories online shop in UIUX mobile and desktop design",
    "link" => "pa-ru.php"
]);

// Web Dev
$hisani = new Project([
    "filter" => "uiux" . " " . "web",
    "name" => "Hisani",
    "title" => "Omakase Restaurant",
    "subject" => "Mobile-first single-page website",
    "image" => "hisani_cover.jpg",
    "alt" => "A design of mobile page for a omakase restaurant",
    "link" => "hisani.php"
]);

$choffe = new Project([
    "filter" => "uiux" . " " . "web",
    "name" => "Choffe",
    "title" => "Waffles + Coffee Shop",
    "subject" => "Website Design and Development",
    "image" => "choffe_cover.png",
    "alt" => "A single land page for Choffe, a waffle and coffee shop",
    "link" => "choffe.php"
]);


// Branding
$c4choco = new Project([
    "filter" => "branding",
    "name" => "c4choco",
    "title" => "Illustration",
    "subject" => "My Persional Brand",
    "image" => "c4choco_cover.png",
    "alt" => "This is Kylie's personal illustration brand",
    "link" => "c4choco.php"
]);

$coBear = new Project([
    "filter" => "branding",
    "name" => "Cobear",
    "title" => "Beverage Company",
    "subject" => "Digital Illustration",
    "image" => "coBear_cover.jpg",
    "alt" => "A beverage company branding design",
    "link" => "cobear.php"
]);

$mooday = new Project([
    "filter" => "branding",
    "name" => "Mooday",
    "title" => "Mood Tracker",
    "subject" => "Style Guide for App Design",
    "image" => "mooday_cover.jpg",
    "alt" => "A style gudie for an app design",
    "link" => "mooday.php"
]);



$home = [$paru, $choffe, $c4choco];
// $uiux = [$paru, $hisani];
// $branding = [$coBear, $c4choco, $mooday];
$all = [$paru, $hisani, $coBear, $c4choco, $mooday, $choffe];

?>