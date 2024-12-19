<?php
     $db_server="localhost";
     $db_user="root";
     $db_pass="";
     $db_name="playerdb";

     $conn= new mysqli($db_server,$db_user,$db_pass,$db_name);   
    if ($conn->connect_error) {
        die("error". $conn->connect_error);
    }

?>