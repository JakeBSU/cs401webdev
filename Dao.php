<?php
class Dao {
private $host = "us-cdbr-iron-east-05.cleardb.net";
private $db = "heroku_9604bb6ecbe8698";
private $user = "b9719fdd1787f7";
private $pass = "00f7255a";
public function getConnection () {
   return
     new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
         $this->pass);
 }
 public function checkUsername($username) {
   $conn = $this->getConnection(); 
   $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
   $stmt = $conn->prepare($sql);

//Bind the provided username to our prepared statement.
   $stmt->bindValue(':username', $username);

//Execute.
   $stmt->execute();

//Fetch the row.
   $returnRow = $stmt->fetch(PDO::FETCH_ASSOC);
   return $returnRow;
}
 public function createUser($username,$passwordHash,$email) {
   $conn = $this->getConnection(); 
   $sql = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
   $stmt = $conn->prepare($sql);
   
   //Bind our variables.
   $stmt->bindValue(':username', $username);
   $stmt->bindValue(':password', $passwordHash);
   $stmt->bindValue(':email', $email);

   //Execute the statement and insert the new account.
   $resultReturn = $stmt->execute();
   return $resultReturn;
}
public function loginUser($username) {
    $conn = $this->getConnection(); 
    $sql = "SELECT id, username, password FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    
    //Bind value.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch row.
    $userReturn = $stmt->fetch(PDO::FETCH_ASSOC);
    return $userReturn;
}
public function getPlayers() {
   $conn = $this->getConnection();
   //Prepare statement
   $sql = "SELECT * FROM players";
   $stmt = $conn->prepare($sql);
   //Execute statment
   $stmt->execute();
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   return $row;
}
public function getData() {
   $conn = $this->getConnection();
   //Prepare statement
   $sql = "SELECT * FROM players";
   $stmt = $conn->prepare($sql);
   //Execute statment
   $stmt->execute();
   $row = $stmt->setFetchMode(PDO::FETCH_ASSOC);
   return $row;
}
}