<?php
include ("../Model/empModel.php");
$name=$id=$sal=$work="";
$nameerr=$iderr=$salerr=$workerr="";


if(isset($_POST["Submit"])){

   
 
$name=$_POST["name"];

if(empty($name)|| !preg_match ("/^[a-zA-Z\s]+$/", $name) || strlen($name)<3){

$nameerr= " Please enter your name!";

}
else{
    
    $name= "name = ".$name;
    
}


    $id=$_POST["id"];
if(empty("$id")){

    $iderr= " Please enter ID!";
    
    }
    
    else{
       
        $id= "id = ".$id;        
    }

    $sal=$_POST["sal"];
    if(empty("$sal")){
    
        $salerr= " Please enter Salary!";
        
        }
        
        else{
           
            $sal= "sal = ".$sal;        
        }
    


        $work=$_POST["work"];
        if(empty("$work")){
        
            $workerr= " Please enter Working hours!";
            
            }
            
            else{
               
                $work= "work = ".$work;        
            }
        
    




    
       
      


    }

