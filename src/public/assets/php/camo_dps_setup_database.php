<?php
    require './db_connection_execute_sql.php';

    $db = OpenConSqlFile("mysql");
    $query = file_get_contents("../sql/Muziekdatabase_CreateScript.sql");
    $stmt = $db->prepare($query);
    $stmt->execute();

    $db = OpenConSqlFile("muziekdatabase");
    $query = file_get_contents("../sql/Muziekdatabase_InsertScript.sql");
    $stmt = $db->prepare($query);
    $stmt->execute();

    header('Location: /');
?>