<?php

 class Users extends Dbh
 {
     //view
     protected function getUser($id)
     {
         $sql = "SELECT * FROM users WHERE id = ?";
         $stmt = $this->conn()->prepare($sql);
         $stmt->execute([$id]);

         $results = $stmt->fetchAll();
         return $results;
     }

     //insert
     protected function setUser($name, $email, $birth)
     {
         $sql = "INSERT INTO users(
            name, email, birth
       ) 
       VALUE(
           ?, ?, ?
       );";

         $stmt = $this->conn()->prepare($sql);
         $stmt->execute([$name, $email, $birth]);
     }
 }