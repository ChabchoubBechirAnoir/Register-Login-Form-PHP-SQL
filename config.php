<?php

$db_host = "sql311.thefreecpanel.com";
$db_user = "freecp_24144264";
$db_pass = "punju123";
$db_name = "freecp_24144264_pesbuk";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Anoir Chabchoub: " . $e->getMessage());
}