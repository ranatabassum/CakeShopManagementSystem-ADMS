<?php
include '../Model/sequenceModel.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}

if(isset($_POST['Employee'])){
    $ename = $shop = $aid = "";
    
        $ename = input_data($_POST['ename']);
        $shop = input_data($_POST['shop']);
        $aid = input_data($_POST['aid']);
        $res = InsertEmployee($ename,$shop,$aid);
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }

if(isset($_POST['customerDetails'])){
    $name = $address = $shop = "";
    
        $name = input_data($_POST['name']);
        $address = input_data($_POST['address']);
        $shop = input_data($_POST['shop']);
        $res = Customer('$name','$address','$shop');
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }

