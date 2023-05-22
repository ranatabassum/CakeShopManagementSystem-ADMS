<?php include 'header.php';
include "../Controller/RegistrationProcess.php"
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cake Shop - Register</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
  
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action=""  method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name"  required>
                
                <?php
                  echo $nameerr
                  ?>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                
                <?php
                  echo $emailerr
                  ?>
            </div>

            <div  class="form-group">
            <label for="uname">User Name</label>
                <input type="text" id="uname" name="uname" placeholder="Enter your User name" required>
               
                <?php
                  echo $unameerr
                  ?>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter an strong password" required>
                <?php
                   echo $passerr
                  ?>
            </div>
            
            <button type="submit">Register</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>