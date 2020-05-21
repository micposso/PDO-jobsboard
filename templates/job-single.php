<?php include '../includes/header.php'; ?>
  <div class="jumbotron">
    <h1><?php echo $job->job_title; ?></h1>
      <p class="lead">
      <?php echo $job->description; ?></p>
      <small><?php echo $job->contact_user; ?></small>
      <small><?php echo $job->post_date; ?></small>
      <p><a href="" class="btn btn-lg btn-success">Apply</a></p>
  </div>
<?php include '../includes/footer.php'; ?>