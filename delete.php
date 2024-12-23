<?php
include('conn.php');

if(isset($_GET['id']))
{
    $emp_id=$_GET['id'];

    $sql="DELETE FROM items_detail WHERE id=3";
    $result=$conn->query($sql);
    if($result==true)
    {
      echo "Data deleted successfully";
    }
    
    else
    {
      echo "Error: $sql" . $conn->connect_error;
    }
}

?>