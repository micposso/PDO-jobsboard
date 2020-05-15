<?php include '../includes/header.php'; ?>
  <div class="jumbotron">
    <h1>Jumbotron heading</h1>
      <p class="lead">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus eros eget lectus malesuada, non viverra tellus consectetur. Interdum et malesuada fames ac ante ipsum primis in faucibus.
      </p>
      <p><a href="" class="btn btn-lg btn-success">Register</a></p>
    <h2>Select a job category</h2>
    <form action="">
      <select name="category" class="form-control" id="">
        <option value="0">Choose Category</option>
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>">
            <?php echo $category->name; ?>
          </option>
        <?php endforeach;  ?>
      </select>
    </form>
  </div>

  <?php foreach($jobs as $job): ?>
    <div class="row marketing">
      <div class="col-lg-6">
        <h3><?php echo $job->job_title; ?></h3>
        <p><?php echo $job->description; ?></p>
        <span><?php echo $job->post_date; ?></span> | <span><?php echo $job->cname; ?></span>
        <p><a href="" class="btn btn-lg btn-success">Apply</a></p>
      </div>
    </div>
  <?php endforeach; ?>



<?php include '../includes/footer.php'; ?>