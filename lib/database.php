<?php

class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;

  private $dbh;
  private $error;
  private $stmt;

  public function __construct() {
    // Set DSN
    $dns = 'mysql:host='. $this->host . ';dbname=' . $this->dbname;

    // Set Options
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );

    // PDO instance
    try{
      $this->dbh = new PDO($dns, $this->user, $this->pass, $options);
    } catch(PDOException $e) {
      $this->error = $e->getMessage();
    }
    }

    public function query($query) {
      $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null) {
      if(is_null($type)) {
        switch(true){
          
        }
      }

    }
}