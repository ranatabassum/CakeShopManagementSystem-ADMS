<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Table View</title>
</head>
<body>
<?php
include '../Model/tableModel.php';
?>
<div class="title">
    <h1>Table View From Oracle</h1>
</div>
<div class="heading-table">
    <h1>Employee:</h1>
</div>
<table border="2">
    <tr>
    <th>Employee Id</th>
    <th>Employee Name</th>
    <th>Shop License</th>
    <th>A_Id</th>
    </tr>
    <?php
    $res = EmployeeShow(); //res = sql
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <h1>Admin:</h1>
</div>
<table border="2">
    <tr>
    <th>Owner Contact</th>
    <th>Owner Name</th>
    <th>Shop License</th>
    <th>Owner Email</th> 
    </tr>
    <?php
    $res = AdminShow();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <h1>Job:</h1>
</div>
<table border="2">
    <tr>
    <th>A_Id</th>
    <th>Job Title</th>
    <th>Working Hour</th>
    <th>Salary</th>
    
    </tr>
    <?php
    $res = JobShow();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <h1>Location:</h1>
</div>
<table border="2">
    <tr>
    <th>Location Id</th>
    <th>Shop Name</th>
    <th>Shop Adress</th>
    <th>Shop Email</th>
    
    </tr>
    <?php
    $res = LocationShow();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <h1>Product:</h1>
</div>
<table border="2">
    <tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Cost Price</th>
    <th>Sell Price</th>
    </tr>
    <?php
    $res =ProductShow();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

<div class="heading-table">
    <h1>Customer:</h1>
</div>
<table border="2">
    <tr>
    <th>Customer</th>
    <th>Customer Name</th>
    <th>Customer Address</th>
    <th>Shop License</th>
    </tr>
    <?php
    $res =CustomerShow();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>

</body>
</html>