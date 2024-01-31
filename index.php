<?php ob_start(); ?>

<?php
$widgets = [
    "home-page-banner", "feature-2-block",
    "feature-3-block", "service-2-block",
    "faq-block", "project-1-block",
    "testimonials-block", "team-1-block", 
    "footer-map"
];

foreach ($widgets as $widget) {
    include "template/widgets/{$widget}.php";
}
?>


<?php $contents = ob_get_clean(); ?>

<?php include "template/layout.php"; ?>