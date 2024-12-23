<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Data</title>
</head>
<body>
    
<?php
include('conn.php');

if(isset($_POST['update']))
{
  $item_id=$_POST['id'];
  $item_name=$_POST['item'];
  $item_quantity=$_POST['quantity'];
  $item_price=$_POST['price'];

  $sql="UPDATE items_detail SET item=' $item_id', quantity=' $item_quantity', price='$item_price' WHERE id=$item_id  ";

  $result=$conn->query($sql);
  if($result==true)
  {
    echo "Data updated successfully";
    // header('Location: view.php');
  }
}


if(isset($_GET['id']))
{
    $item_id=$_GET['id'];
  $sql="SELECT *FROM employees WHERE id='$item_id' ";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
  {
    while($rows = $result-> fetch_assoc())
    {
        $id=$rows['id'];
       $item=$rows['item'];
       $quantity=$rows['quantity'];
       $price=$rows['price'];
    }
}


  ?>

<h3>UPDATE FORM FOR EMPLOYEE DETAILS UPDATIONS</h3>
  <form action="" method="post">
     <p>
        Name: <br>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="emp_id" value="<?php echo $id; ?>"><br>
        Email: <br>
        <input type="email" name="email"  value="<?php echo $email; ?>"><br>
        City: <br>
        <input type="text" name="city"  value="<?php echo $city; ?>"> <br> <br> 
        <button  type="submit" value="update" name="update">UPDATE</button>
     </p>
  </form>

</body>
</html>

<?php
// }
// else
// {
//   header('Location: view.php');
// }
 }
?> 