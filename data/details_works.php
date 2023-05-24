<?php

// UIUX
$paru = new Project([
    "filter" => "uiux",
    "name" => "Pa-ru",
    "title" => "Accessories Online Shop",
    "subject" => "UI/UX Website design",
    "image" => "paru_cover.jpg",
    "alt" => "Accessories online shop in UIUX mobile and desktop design",
    "link" => "details_pa-ru.php",
]);

$hisani = new Project([
    "filter" => "uiux" . " " . "web",
    "name" => "Hisani",
    "title" => "Omakase Restaurant",
    "subject" => "Mobile App",
    "image" => "hisani_cover.jpg",
    "alt" => "A design of mobile page for a omakase restaurant",
    "link" => "details_hisani.php",
]);

// Branding
$coBear = new Project([
    "filter" => "branding",
    "name" => "Cobear",
    "title" => "Beverage Company",
    "subject" => "Digital Illustration",
    "image" => "coBear_cover.jpg",
    "alt" => "A beverage company branding design",
    "link" => "details_cobear.php"
]);

$mooday = new Project([
    "filter" => "branding",
    "name" => "Mooday",
    "title" => "Mood Tracker",
    "subject" => "App design",
    "image" => "mooday_cover.jpg",
    "alt" => "A style gudie for an app design",
    "link" => "details_mooday.php"
]);

$c4choco = new Project([
    "filter" => "branding",
    "name" => "c4choco",
    "title" => "Illustration",
    "subject" => "Persional Brand",
    "image" => "c4choco_cover.png",
    "alt" => "This is Kylie's personal illustration brand",
    "link" => "details_c4choco.php"
]);


$home = [$paru, $hisani, $c4choco];
// $uiux = [$paru, $hisani];
// $branding = [$coBear, $c4choco, $mooday];
$all = [$paru, $hisani, $coBear, $c4choco, $mooday];

?>