<?php include_once 'config/init.php'; ?>

<?php
// Init all classes as objects so the data can be used in the app
$job = new Job;

$template = new Template('templates/job-create.php');

// need to get categories so they can be selected from a dropdown
$template->categories = $job->getCategories();

echo $template;