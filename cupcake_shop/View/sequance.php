<?php include 'header.php'; ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Sequence.css">
    <title>Sequence</title>
</head>
<body>

<h1>Employee insertion</h1>
<form action="../Controller/sequenceCheck.php" method="post">
            <label for="ename">Employee Name:</label>
            <input id="ename" type="text" name="ename" required>
            <br>
            <br>
            <label for="shop">Shop License:</label>
            <input id="shop" type="text" name="shop" required>
            <br>
            <label for="aid">A_Id:</label>
            <input id="aid" type="text" name="aid" required>
            <br>
            <br>
            <input class="submit" type="submit" name="location" value="Register">
</form>

<h1>Customer insertion</h1>
<form action="../Controller/sequenceCheck.php" method="post">
            <label for="name">Name:</label>
            <input id="name" type="text" name="name" required>
            <br>
            <br>
            <label for="address">Address:</label>
            <input id="address" type="text" name="address" required>
            <br>
            <br>
            <label for="shop">Shop License:</label>
            <input id="shop" type="text" name="shop" required>
            <br>
            <br>         
            <input class="submit" type="submit" name="customer" value="Register">
            <br>
            <br>
</form>
</body>
</html>