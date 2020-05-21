<?php include_once 'config/init.php'; ?>

<?php
// Init all classes as objects so the data can be used in the app
$job = new Job;

// check if form is submitted
if(isset($_POST['submit'])) {
  // grab all data from form and put it in an array
  $data = array();
  $data['company'] = $_POST['company'];
  $data['category_id'] = $_POST['category_id'];
  $data['job_title'] = $_POST['job_title'];
  $data['description'] = $_POST['description'];
  $data['location'] = $_POST['location'];
  $data['salary'] = $_POST['salary'];
  $data['contact_user'] = $_POST['contact_user'];
  $data['contact_email'] = $_POST['contact_email'];
  $data['state'] = $_POST['state'];
  $data['level'] = $_POST['level'];
  $data['post_date'] = $_POST['post_date'];

  // check all data came through and redirect to homepage or throw error
  if($job->create($data)) {
    redirect('index.php', 'Your job was created', 'success');
  } else {
    redirect('index.php', 'Something was wrong', 'error');
  }
}

$template = new Template('templates/job-create.php');

// need to get categories so they can be selected from a dropdown
$template->categories = $job->getCategories();

echo $template;