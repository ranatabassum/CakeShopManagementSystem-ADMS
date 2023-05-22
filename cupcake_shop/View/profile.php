<?php
$adminName = "Rana Tabassum";
$adminEmail = "rana.taba@example.com";
$adminPhone = "123-456-7890";
$adminRole = "Administrator";
include 'header.php';

 
?>

<!-- Include the rest of the HTML code -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin Profile</title>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <h2>Admin Profile</h2>
        <div class="profile">
            <div class="profile-info">
                <label>Name:</label>
                <p><?php echo $adminName; ?></p>

                <label>Email:</label>
                <p><?php echo $adminEmail; ?></p>

                <label>Phone:</label>
                <p><?php echo $adminPhone; ?></p>

                <label>Role:</label>
                <p><?php echo $adminRole; ?></p>
            </div>
           
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
