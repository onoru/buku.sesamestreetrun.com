<?php
    $host    = "localhost";
    $user    = "pradana";
    $pass    = "Zhafira041215";
    $dbname = "tokobuku";
    
    $conn = mysqli_connect($host, $user, $pass) or die('Could not connect to mysql server.' );
    
    mysqli_select_db($conn, $dbname) or die('Could not select database.');
    
    $baseurl="http://localhost/tokobuku/";
?>