<?php
class Job{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Get all jobs
  public function getAllJobs(){
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
  public function getCategories() {
    $this->db->query("SELECT * from categories");

    $results =  $this->db->resultSet();

    return $results;
  }

  // Get jobs by category
  public function getByCategory($category) {
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
}