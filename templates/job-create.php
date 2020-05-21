<?php include '../includes/header.php'; ?>
  <h2 class="page-header">Create job listing</h2>
  <form action="create.php" method="post">
    <div class="form-group">
      <label for="company">Company</label>
      <input name="company" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="category_id">Category</label>
      <select name="category_id" id="">
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>">
            <?php echo $category->name; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="job_title">Job Title</label>
      <input name="job_title" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="description">Job Description</label>
      <textarea name="description" type="text" class="form-control">
      </textarea>
    </div>
    <div class="form-group">
      <label for="location">Location</label>
      <input name="location" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="state">State</label>
      <input name="state" type="text" class="form-control">
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
      <input name="salary" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="contact_user">Contact User</label>
      <input name="contact_user" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="contact_email">Contact email</label>
      <input name="contact_email" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="post_date">Date</label>
      <input name="post_date" type="date" class="form-control">
    </div>
    <input type="submit" class="btn btn-lg btn-success" value="submit" name="submit">
  </form>
<?php include '../includes/footer.php'; ?>