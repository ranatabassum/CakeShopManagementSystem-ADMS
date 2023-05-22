<?php
include'../Model/DBConnection.php';

function InsertEmployee($ename, $shop, $aid){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO Employee($ename, $shop, $aid) 
                            VALUES (emp_sequ.NEXTVAL,'$ename', '$shop', '$aid')") ;
    $res = oci_execute($sql);
    return $res;
}

function Customer($name,$address,$shop){
    $conn = connection();
    $sql = oci_parse($conn,"INSERT INTO customerDetails(CUSTOMER_SERIAL ,CUSTOMER_NAME ,CUSTOMER_ADDRESS ,SHOP_LICENSE ) 
                            VALUES (cus_sequ.nextval,'$name','$address','$shop')") ;
    $res = oci_execute($sql);
    return $res;
}