<?php
function OpenCon($database){
    $dbhost = "Database";
    $dbuser = "root";
    $dbpass = "Welkom01!";
    $db = $database;

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    
    return $conn;
}
 
function CloseCon($conn){
    $conn -> close();
}
   
?>