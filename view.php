<?php
  $connectionInfo = array("UID" => "simpleweb", "pwd" => "Ammu1952", "Database" => "simpleweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
  $serverName = "tcp:simplewebtp028958.database.windows.net,1433";
  $conn = sqlsrv_connect($serverName, $connectionInfo);
  
  if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection Success: connected!";
?>
