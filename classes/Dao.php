<?php

class Dao {

  private $host = "us-cdbr-iron-east-04.cleardb.net";
  private $db = "heroku_dfc52d28c33df9d";
  private $user = "b9194a2da51666";
  private $pass = "71fdda0e";


  public function getConnection () {
    return
    new PDO("mysql:host={$this->host};dbname={$this->db}"
  }

// mysql://b9194a2da51666:71fdda0e@us-cdbr-iron-east-04.cleardb.net/heroku_dfc52d28c33df9d?reconnect=true
