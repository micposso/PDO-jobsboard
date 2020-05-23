<?php
class Job
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Get all jobs
  public function getAllJobs()
  {
    $this->db->query("SELECT jobs.*, categories.name AS cname
                      FROM jobs
                      INNER JOIN categories
                      ON jobs.category_id = categories.id
                      ORDER BY post_date DESC
                      ");
    // assign result set
    $results = $this->db->resultSet();

    return $results;
  }

  // Get categories function
  public function getCategories()
  {
    $this->db->query("SELECT * from categories");

    $results =  $this->db->resultSet();

    return $results;
  }

  // Get jobs by category
  public function getJobByCategory($category)
  {
    // New SQL query using WHERE to return only jobs that match the ID of the category from the form
    $this->db->query("SELECT jobs.*, categories.name AS cname
                      FROM jobs
                      INNER JOIN categories
                      ON jobs.category_id = categories.id
                      WHERE jobs.category_id = $category
                      ORDER BY post_date DESC
                      ");

    $results =  $this->db->resultSet();

    return $results;
  }

  public function getCategory($category_id)
  {
    $this->db->query("SELECT * FROM categories WHERE id = :category_id");
    $this->db->bind(':category_id', $category_id);

    // Assign Row
    $row = $this->db->single();

    return $row;
  }

  // Get Job
  public function getJob($id)
  {
    $this->db->query("SELECT * FROM jobs WHERE id = :id");

    $this->db->bind(':id', $id);

    // Assign Row
    $row = $this->db->single();

    return $row;
  }

  // Create job
  public function create($data)
  {
    // Insert Query
    $this->db->query("INSERT INTO jobs (category_id, company, job_title, description, salary, location, contact_user, contact_email, state, level, post_date) 
                      VALUES (:category_id, :company, :job_title, :description, :salary, :location, :contact_user, :contact_email, :state, :level, :post_date)");
    // Bind Data
    $this->db->bind(':category_id', $data['category_id']);
    $this->db->bind(':company', $data['company']);
    $this->db->bind(':job_title', $data['job_title']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':location', $data['location']);
    $this->db->bind(':salary', $data['salary']);
    $this->db->bind(':contact_user', $data['contact_user']);
    $this->db->bind(':contact_email', $data['contact_email']);
    $this->db->bind(':state', $data['state']);
    $this->db->bind(':level', $data['level']);
    $this->db->bind(':post_date', $data['post_date']);

    //execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // delete job
  public function delete($id)
  {
    $this->db->query("DELETE from jobs WHERE id = $id");

    //execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // Create job
  public function update($id, $data)
  {
    // Insert Query
    $this->db->query("UPDATE jobs
                       SET (category_id = :category_id, 
                            company = :company, 
                            job_title = :job_title, 
                            description = :description, 
                            salary = :salary, 
                            location = :location, 
                            contact_user = :contact_user, 
                            contact_emai = :contact_email, 
                            state = :state, 
                            level = :level, 
                            post_date = :post_date)");
    // Bind Data
    $this->db->bind(':category_id', $data['category_id']);
    $this->db->bind(':company', $data['company']);
    $this->db->bind(':job_title', $data['job_title']);
    $this->db->bind(':description', $data['description']);
    $this->db->bind(':location', $data['location']);
    $this->db->bind(':salary', $data['salary']);
    $this->db->bind(':contact_user', $data['contact_user']);
    $this->db->bind(':contact_email', $data['contact_email']);
    $this->db->bind(':state', $data['state']);
    $this->db->bind(':level', $data['level']);
    $this->db->bind(':post_date', $data['post_date']);

    //execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
