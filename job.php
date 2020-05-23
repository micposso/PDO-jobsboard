<?php include_once 'config/init.php'; ?>

<?php
// Init all classes as objects so the data can be used in the app
$job = new Job;

//check for post value coming from delete form
if(isset($_POST['delete_id'])) {
  $delete_id = $_POST['delete_id'];
  // check if function delete is available on the job class
  if($job->delete($delete_id)) {
    redirect('index.php', 'job is deleted', 'success');
  } else {
    redirect('index.php', 'there as a problem deleting the job', 'error');
  }
}

$template = new Template('templates/job-single.php');

// check for job id returned by job link in the URL
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;