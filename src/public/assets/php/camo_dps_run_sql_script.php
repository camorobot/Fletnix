<?php

     require './db_connection_execute_sql.php';
     $db = OpenConSqlFile("mysql");

     $query = file_get_contents("../sql/test.sql");
     $stmt = $db->prepare($query);

     if ($stmt->execute()){
          echo "Success";
     }else{ 
          echo "Fail";
     }
?>