<?php include '../includes/header.php'; ?>
  <div class="jumbotron">
    <h1><?php echo $job->job_title; ?></h1>
      <p class="lead">
      <?php echo $job->description; ?></p>
      <small><?php echo $job->contact_user; ?></small>
      <small><?php echo $job->post_date; ?></small>
      <p><a href="" class="btn btn-lg btn-success">Apply</a></p>
  </div>
  <div>
    <a href="index.php">go back</a>
  </div>
  <div class="well">
    <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-lg btn-success">Edit</a>
    <form method="post" action="job.php" style="display: inline;">
      <input type="hidden" name="delete_id" value="<?php echo $job->id; ?>">
      <input type="submit" class="btn btn-danger" value="delete">
    </form>
  </div>
<?php include '../includes/footer.php'; ?>