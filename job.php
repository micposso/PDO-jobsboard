<?php include_once 'config/init.php'; ?>

<?php
// Init all classes as objects so the data can be used in the app
$job = new Job;

$template = new Template('templates/job-single.php');

// check for job id returned by job link in the URL
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;