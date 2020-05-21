<?php include '../includes/header.php'; ?>
  <h2 class="page-header">Create job listing</h2>
  <form action="create.php" method="post">
    <div class="form-group">
      <label for="company">Company</label>
      <input name="company" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="company">Category</label>
      <select name="category" id="">
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>">
            <?php echo $category->name; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Job Title</label>
      <input name="title" type="text" class="form-control">
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
      <label for="salary">Salary</label>
      <input name="salary" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="contact">Contact User</label>
      <input name="contact" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Contact email</label>
      <input name="email" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input name="date" type="date" class="form-control">
    </div>
    <input type="submit" class="btn btn-lg btn-success" value="submit" name="submit">
  </form>
<?php include '../includes/footer.php'; ?>