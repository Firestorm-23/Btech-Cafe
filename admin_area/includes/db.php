<?php 
// After uploading to online server, change this connection accordingly

$con = mysqli_connect("pmcbankk.mysql.database.azure.com","rupesh2312","Bhimsen85%","ecommerce");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
