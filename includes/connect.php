<?php
    $connect = mysqli_connect('localhost','root','','jdmshopdb');
    if(!$connect){
        die('Error in database connection');
    }
