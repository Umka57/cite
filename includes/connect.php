<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect = new mysqli('localhost','root','','jdmshopdb');
    if(!$connect){
        die('Error in database connection');
    }
    error_reporting(-1);
?>