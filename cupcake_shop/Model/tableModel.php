<?php
include'../Model/DBConnection.php';


function EmployeeShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from employee") ;
     $res = oci_execute($sql);
     return $sql;
}

function AdminShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from owner") ;
     $res = oci_execute($sql);
     return $sql;
}

function JobShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from SalarayScale") ;
     $res = oci_execute($sql);
     return $sql;
}

function LocationShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from shopdetails") ;
     $res = oci_execute($sql);
     return $sql;
}

function ProductShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from product") ;
     $res = oci_execute($sql);
     return $sql;
}

function CustomerShow(){
    $conn = connection();
     $sql = oci_parse($conn,"select * from customerDetails") ;
     $res = oci_execute($sql);
     return $sql;
}

?>