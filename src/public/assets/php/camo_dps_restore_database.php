<?php
    require './db_connection_execute_sql.php';

    $db = OpenConSqlFile("mysql");
    $file= glob("../sql/camo_dps_restore/*.sql");

    foreach($file as $filew){
        echo $filew;
        echo '<br>';

        $files[] = $filew; 
        $query = file_get_contents($filew);
        $stmt = $db->prepare($query);
        $stmt->execute();
    }
    header('Location: /');

?>