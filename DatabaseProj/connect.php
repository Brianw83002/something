<?php
$serverName = "DESKTOP-MLDR1IG\SQLEXPRESS";  // Use double backslashes (\)
$connectionOptions = [
    "Database"=>"DemoDB",
    "Uid"=>"something",
    "PWD"=>"something"
];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn==false)
    die(print_r(sqlsrv_errors(), true));
else echo 'CONNECTION SUCCESS!<br>';


?>
