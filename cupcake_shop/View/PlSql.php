<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/PlSql.css">

    <title>PLSQL</title>
</head>
<body>
<?php
include '../View/Header.php';
include '../Model/PlsqlModel.php';
?>
<div class="title">
    <h1>Functions and Procedures</h1>
</div>

<!-- 1st ques -->
<div class="heading-table">
    <p>	Create a Function to display maximum Salary of an employee from SalaryScale table.</p>
</div>

<table border="2">
    <tr>
    <th>Maximum Salary of the employee is: 1200000 </th>
    </tr>
</table>

<!-- 2nd ques -->
<div class="heading-table">
    <p>Create a function to find a customer name who belongs in "Mymensingh" from MenuCardOrder table</p>
</div>

<table border="2">
    <tr>
    <th>Customer name who is from Mymensingh: Opee </th>
    </tr>
</table>

<!-- 2nd ques -->
<div class="heading-table">
    <p>Create a function to sum all the bills has paid from Bill Table</p>
</div>

<table border="2">
    <tr>
    <th>Total Bill Amount: 706 </th>
    </tr>
</table>

<!-- 1st ques -->
<div class="heading-table">
    <p>	Create a procedure to find A_ID of an employee with maximum amount of salary from  Salarayscale Table.</p>
</div>

<table border="2">
    <tr>
    <th>The employee with the highest salary has A_ID : 4 <br>
    The maximum salary is 1200000 </th>
    </tr>
</table>



</body>
</html>