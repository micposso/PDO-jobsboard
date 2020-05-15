<?php include_once 'config/init.php'; ?>

<?php
// Init all classes as objects so the data can be used in the app
$job = new Job;

$template = new Template('templates/frontpage.php');

$template->title = 'Latest Jobs';
$template->jobs = $job->getAllJobs();
$template->categories = $job->getCategories();

echo $template;