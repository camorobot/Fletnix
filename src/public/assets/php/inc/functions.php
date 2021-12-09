<?php
    function getDatabaseEntertainment($Entertainment){
        $conn_getDatabaseEntertainment = OpenCon('Fletnix_2');
        $sql_getDatabaseEntertainment = "SELECT * FROM Movies WHERE Entertainment=?";
        $stmt_getDatabaseEntertainment = $conn_getDatabaseEntertainment->prepare($sql_getDatabaseEntertainment); 
        $stmt_getDatabaseEntertainment->bind_param("s", $Entertainment);
        $stmt_getDatabaseEntertainment->execute();
        $result_getDatabaseEntertainment = $stmt_getDatabaseEntertainment->get_result();
        while ($row_getDatabaseEntertainment = $result_getDatabaseEntertainment->fetch_assoc()) {
            return $row_getDatabaseEntertainment;
        }
    }
?>