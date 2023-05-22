<?php
include '../Model/DBConnection.php';
function view1(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from Owners_view") ;
    $res = oci_execute($sql);
    return $sql;
}
function view2(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from Cupcaketype_view") ;
    $res = oci_execute($sql);
    return $sql;
}

function view3(){
    $conn = connection();
    $sql = oci_parse($conn,"select * from conditional_cupCakeview") ;
    $res = oci_execute($sql);
    return $sql;
}