<?php ob_start(); ?>

<?php
$widgets = [
    "home-page-banner", "feature-2-block",
    "feature-3-block", "service-2-block",
    "job-category-block", "home-page-jobs-list",
    "job-categories-list", "countries-list",
    "organization-profile",
    "faq-block", "project-1-block",
    "team-1-block","clients-slider",  "footer-map"
];

foreach ($widgets as $widget) {
    include "template/widgets/{$widget}.php";
}
?>

<?php $contents = ob_get_clean(); ?>

<?php include "template/layout.php"; ?>