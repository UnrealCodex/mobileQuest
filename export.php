<?php
    $host="mysql3001.mochahost.com";
    $username="abecode_admsys";
    $password="789poiQWE,.-";
    $dbname="abecode_syscheck";
    $con = new mysqli($host, $username, $password,$dbname); 

        $sql_data="select * from quest";
        $result_data=$con->query($sql_data);
        $results=array();
    $filename = "BaseDatos.csv"; // File Name
    // Download file
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $flag = false;
    while ($row = mysqli_fetch_assoc($result_data)) {
        if (!$flag) {
            // display field/column names as first row
            echo implode(",", array_keys($row)) . "\r\n";
            $flag = true;
        }
        echo implode(",", array_values($row)) . "\r\n";
    }
    ?>