
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Inventory page</title>
</head>
<body>

    <button id="click" onclick="return showform()">Add Item</button>
    <form id="form2" action="view.php" method="post">

        <label  for="item">itemName:</label>
        <p><input type="text" name="item" id="item"><span id="fitem"></span></p>
        <label for="quantity">Quantity:</label>
        <p><input type="text" name="quantity" id="quantity"><span id="fquantity"></span></p>
        <label for="price">Price:</label>
        <p><input type="text" name="price" id="price"><span id="fprice"></span></p>
        <button id="bttn" type="submit" name="submit">submit</button>

    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="validate.js"></script>
</body>
</html>

<?php
include('conn.php');

if(isset($_POST['submit']))
{
  $item=$_POST['item'];
  $quantity=$_POST['quantity'];
  $price=$_POST['price'];
 
// $sql="CREATE TABLE items_detail(
//               id int(10) primary key auto_increment, 
//                item varchar(40), 
//                quantity int(10), 
//                price double
//                )";
 $sql="INSERT INTO items_details (item, quantity, price) VALUES ('".$item."','".$quantity."','".$price."')";
 echo $sql;
 if($conn->query($sql) == true)
 {
   echo "New Record added successfully";
   header('Location: view.php');
 }

 else
 {
   echo "Error occurred $sql" . $conn->connect_error;
 }

 $conn->close();

}


?>
