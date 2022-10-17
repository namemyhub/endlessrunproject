<?php 
    $conn = new mysqli('localhost', 'root','','gamingdb');
    
    if( $conn->connect_errno){
        die("Connection failed" . $conn->connect_errno);
    }

?>