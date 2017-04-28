<?php
$serverName = "develop-PC"; //serverName\instanceName
$connectionInfo = array( "Database"=>"hrd_cb", "UID"=>"dev", "PWD"=>"ngepetluh");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>