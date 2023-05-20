<?php
         $host_name='localhost';
         $user_name='root';
         $password='';
         $db_name='etmsh';
 
         try{
             $connection=new PDO("mysql:host={$host_name}; dbname={$db_name}", $user_name,  $password);
             $this->db = $connection; // connection established
         } catch (PDOException $message ) {
             echo $message->getMessage();
         }
?>