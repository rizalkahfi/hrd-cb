<?php
$serverName = "develop-PC"; //serverName\instanceName
$connectionInfo = array( "Database"=>"hrd_cb", "UID"=>"dev", "PWD"=>"ngepetluh");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

$name = $_POST['usr'];
$pass = $_POST['pswd'];
$params = array( 
    array(&$name, SQLSRV_PARAM_IN),
	array(&$pass, SQLSRV_PARAM_IN),
    );
$sql = "EXEC interview @Name=?, @Pass=?";
$stmt = sqlsrv_prepare($conn, $sql, $params);
sqlsrv_execute($stmt);
$row = sqlsrv_fetch_array($stmt);
$result = $row["UserExists"];

 echo json_encode($result);
 if ($result=='true'){
	header("Location:home.php");
 }
 else{
	 header("Location: index.php");
 }
?>