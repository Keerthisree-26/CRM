<?php 
$hostName="localhost";
$dbUser="root";
$dbPassword="root";
$dbName='crm_db';
$conn = mysqli_connect($hostName,$dbUser,$dbPassword,$dbName);
if(!$conn){
die("something went wrong");
}
?>
