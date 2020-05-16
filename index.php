<?php include_once 'config/init.php'; ?>

<?php
// Init all classes as objects so the data can be used in the app
$job = new Job;

$template = new Template('templates/frontpage.php');

// check for category returned by the form in the URL
$category = isset($_GET['category']) ? $_GET['category'] : null;

// test for the category ID and return only jobs with that category or just all jobs
// create a new getByCategory method in the job class
if($category){
        $template->jobs = $job->getByCategory($category);
} else {
        $template->title = 'Latest Jobs';
        $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;