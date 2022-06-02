<?php

 class Test extends Dbh
 {
     public function getUsersTest1()
     {
         $sql = "SELECT * FROM users";

         $stmt = $this->connect()->query($sql);
         while ($data = $stmt->fetch()) {
             echo '<tr>
            <td>'. $data['id'] .'</td>
             <td>'. $data['name'] .'</td>
             <td>'. $data['email'] .'</td>
             <td>'. $data['birth'] .'</td>
             </tr>';
         }
     }

     public function getUsersTest2()
     {
         $sql = "SELECT * FROM users LIMIT 3;";
         
         $stmt = $this->connect()->query($sql);
         while ($data = $stmt->fetch()) {
             echo $data['email'] . '<br>';
         }
     }

     //query preparado
     public function getUsersTest3($name, $email)
     {
         $sql = "SELECT * FROM users WHERE name=? AND email=? ;";
         //en vez de ejecutar query, preparamos conecion con prepare()
         $stmt = $this->connect()->prepare($sql);
         //ejecutamos introduciendo las variables en el mismo orden que en $SQL - ?($id) ?($name)
         $stmt->execute([$name, $email]);
         //fetch - muestra solo una fila, para preparar TODAS filas usamos fetchAll()
         $names = $stmt->fetchAll();

         foreach ($names as $name) {
             echo $name['name'] . '<br>';
         }
     }

     public function getUsersTest4($name, $email)
     {
         $sql = "SELECT * FROM users WHERE name=? OR email=? ;";
         $stmt=$this->connect()->prepare($sql);
         $stmt->execute([$name, $email]);
         $names=$stmt->fetchAll();
         foreach ($names as $name) {
             echo '<div style="margin-bottom: 10px">'
             . $name['name'] .'<br>'
              . $name['email'] .'</div>';
         }
     }

     //insert
     public function setUsersTest1($name, $email, $birth)
     {
         $sql = "INSERT INTO users(
              name, email, birth
         ) 
         VALUE(
             ?, ?, ?
         );";

         $stmt = $this->connect()->prepare($sql);
         $stmt->execute([$name, $email, $birth]);
     }



     //update
     public function updateUsersTest1($name, $email, $birth, $id)
     {
         $sql = "UPDATE `users` SET `name` = ?, `email` = ?, `birth` = ? WHERE `users`.`id` = ?";
         $stmt = $this->connect()->prepare($sql);
         $stmt->execute([$name, $email, $birth, $id]);
     }
 }