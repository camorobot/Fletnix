
<?php
    function OpenConSqlFile($database){
        $mysql_host = "Database";
        $mysql_database = "mysql";
        $mysql_user = "root";
        $mysql_password = "Welkom01!";
        $db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);

        return $db;
    }
?>