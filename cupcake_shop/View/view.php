<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/View.css">
    <title>View</title>
</head>
<body>
<?php

include '../View/Header.php';
include '../Model/ViewModel.php';
?>
<div class="title">
    <h1>View</h1>
</div>
<div class="heading-table">
    <p>Create a view called Owners_VIEW based on Owner_Name and OWNER_EMAIL from the Owner Table </p>
</div>
<table border="2">
    <tr>
    <th>Owner Name</th>
    <th>Owner Emai</th>
    </tr>
    <?php
    $res = view1();
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
    <p>Create a view called Cupcaketype_view based on Cupcake_Name and Ingredients from the cupCakeDetailsTable</p>
</div>
<table border="2">
    <tr>
    <th>Cupcake Name</th>
    <th>Ingredients</th>
    </tr>
    <?php
    $res = view2();
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
    <p>Create a view called conditional_cupCakeview to show the Cupcake_Name and Ingredients 
        where cupcake is lasting 4 days from cupCakeDetails Table. </p>
</div>
<table border="2">
    <tr>
    <th>Cupcake Name</th>
    <th>Ingredients</th>
    </tr>
    <?php
    $res = view3();
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