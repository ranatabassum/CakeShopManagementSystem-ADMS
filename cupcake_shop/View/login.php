<?php include 'header.php'; 
include "../Controller/LoginCheck.php" ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cake Shop - Login</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form>
            <div class="form-group">
                <label for="uname">User namename:</label>
                <input type="uname" id="uname" name="uname" required>
                <?php
                echo $unameerr
                  ?>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <?php
                echo $passerr
                  ?>
            </div>
            <button type="submit">Login</button>
            <p class="register-link">Don't have an account? <a href="register.php">Register here</a></p>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
