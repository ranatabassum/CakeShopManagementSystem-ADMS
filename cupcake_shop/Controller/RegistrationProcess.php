<?php
include ("../Model/RegistrationModel.php");
$name=$pass=$uname=$email="";
$nameerr=$passerr=$unameerr=$emailerr="";


if(isset($_POST["Submit"])){

   
 
$name=$_POST["name"];

if(empty($name)|| !preg_match ("/^[a-zA-Z\s]+$/", $name) || strlen($name)<3){

$nameerr= " Please enter your name!";

}
else{
    
    $name= "name = ".$name;
    
}


    $phnNo=$_POST["uname"];
if(empty($uname)){

    $unameerr= " Please enter User Name!";
    
    }
    
    else{
       
        $uname= "uname = ".$uname;        
    }


    $email=$_POST["email"];
    
if(!empty($email)){
    $res=UniqueEmail($email);
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        
        foreach ($row as $item) 
        {
            $emailcount=$emailcount+$item;
        }
       
        }

    }
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="Please enter a valid email!";
}
elseif($emailcount!=0){
    
    $emailerr="User Email already Exists!! Please enter a unique email!";
}
else{
    $email= "Email = ".$email;
   
}
$pass=$_POST["password"];
    $uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);

    if(empty($pass) || !$uppercase || !$lowercase || !$number  || strlen($pass) < 8 ){

        $passerr= "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character!";
        
        }
        else{
            $pass= "pass = ".$pass;
           
        }
       
      


    }

