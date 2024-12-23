<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View List</title>
</head>
<body>
    <h2>Item List</h2>
    <table style="border-style:groove">
    <tr>
            <th>Id</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    

<?php
include('conn.php');

$sql="SELECT * FROM items_detail";
$result=$conn->query($sql);

if($result-> num_rows > 0)
{
   while($rows=$result->fetch_assoc())
   {
?>

   <tr>
    <td><?php echo $rows['id']; ?></td>
    <td><?php echo $rows['item']; ?></td>
    <td><?php echo $rows['quantity']; ?></td>
    <td><?php echo $rows['price']; ?></td>
    <td>
     <a style="color:green" href="update.php?id=<?php echo $rows['id'];?> "> Edit</a>
     &nbsp;
     <a style="color:red" href="delete.php?id=<?php echo $rows['id'];?> "> Delete</a>
   </td>
  </tr>

<?php  
}

}

?> 
    </table>
</body>
</html>