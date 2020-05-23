<?php include '../includes/header.php'; ?>
  <h2 class="page-header">Edit job listing</h2>
  <form action="edit.php?id=<?php echo $job->id; ?>" method="post">
    <div class="form-group">
      <label for="company">Company</label>
      <input name="company" type="text" class="form-control" value="<?php $job->company; ?>">
    </div>
    <div class="form-group">
      <label for="category_id">Category</label>
      <select name="category_id" id="">
        <?php foreach($categories as $category): ?>
          <?php if($jobs->category_id == $category->id): ?>
            <option value="<?php echo $category->id; ?>" selected>
              <?php echo $category->name; ?>
            </option>
          <?php else: ?>
            <option value="<?php echo $category->id; ?>">
              <?php echo $category->name; ?>
            </option>
          <?php endif; ?>

        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="job_title">Job Title</label>
      <input name="job_title" type="text" class="form-control" value="<?php $job->job_title; ?>" >
    </div>
    <div class="form-group">
      <label for="description">Job Description</label>
      <textarea name="description" type="text" class="form-control" value="<?php $job->description; ?>" >
      </textarea>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input name="location" type="text" class="form-control" value="<?php $job->location; ?>" >
    </div>
    <div class="form-group">
      <label for="state">State</label>
      <input name="state" type="text" class="form-control" value="<?php $job->state; ?>" >
    </div>
    <div class="form-group">
      <label for="level">Level</label>
      <select name="level" class="form-control">
        <option value="associate">Associate</option>
        <option value="junior">Junior</option>
        <option value="senior">Senior</option>
      </select>
    </div>
    <div class="form-group">
      <label for="salary">Salary</label>
      <input name="salary" type="text" class="form-control" value="<?php $job->salary; ?>" >
    </div>
    <div class="form-group">
      <label for="contact_user">Contact User</label>
      <input name="contact_user" type="text" class="form-control" value="<?php $job->contact_user; ?>" >
    </div>
    <div class="form-group">
      <label for="contact_email">Contact email</label>
      <input name="contact_email" type="text" class="form-control" value="<?php $job->contact_email; ?>" >
    </div>
    <div class="form-group">
      <label for="post_date">Date</label>
      <input name="post_date" type="date" class="form-control" value="<?php $job->post_date; ?>" >
    </div>
    <input type="submit" class="btn btn-lg btn-success" value="submit" name="submit">
  </form>
<?php include '../includes/footer.php'; ?>