<?php

$weon = new Project([
    // "filter" => "uiux",
    "name" => "WE/ON - App design for generating fashion tips with live weather",
    "subject" => "A weather-based fashion app offering real-time outfit recommendations.",
    "image" => "weon_cover.jpg",
    "alt" => "WE/ON, web app",
    "link" => "weon.php",
    "attr" => ["Product Design", "Web Dev"]
]);

$mili = new Project([
    // "filter" => "uiux",
    "name" => "MiLi - Optimizing UX for a Tech accessary company",
    "subject" => "Optimized UX for a tech accessories store, improving navigation, branding, and conversions.",
    "image" => "mili-cover.webp",
    "alt" => "MiLi, a E-commerce landing page design for smart tech products company",
    "link" => "mili.php",
    "attr" => ["UX Research", "Web Dev", "Design System"]
]);

$home = [$weon, $mili];
// below is a string that orignally for all case studies on a "Work" page
// $all = [$paru, $hisani, $coBear, $c4choco, $choffe, $patchwork];

?>