<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
<form id="myform" action="add_item.php" method="post">
        <h1 style="color: green;">Login form</h1>
        <label for="name">Username:</label>
        <p><input type="text" name="name" id="name" required></p>
        <label for="password">Password:</label>
        <p><input type="password" name="password" id="name" required></p>
       <button id="btn" style="color: green;" type="submit" name="submit">Login</button>
    </form>
</body>
</html>