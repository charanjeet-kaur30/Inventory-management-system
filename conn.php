<?php
$servername="localhost";
$username="root";
$password="";
$dbname="inventory_management_system";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
  die("Connection Error.");
}
else
{
    echo "Connection done";
}
?>