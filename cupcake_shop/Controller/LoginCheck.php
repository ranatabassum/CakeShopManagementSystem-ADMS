<?php
include ("../Model/LoginModel.php");
$email=$pass="";
$emailerr=$passerr="";


if(isset($_POST["uname"])){
 
$uname=$_POST["uname"];

if(empty($uname) ){

$emailerr= " Please enter an User name!";

}
else{
    
    $count++;
    
}

$pass=$_POST["pass"];

if(empty($pass)){

$passerr= " Please enter a Password!";

}
else{
    echo "Hello";
    
  
    $count++;
    
}


       
        if($count==2){
            $res=Login($uname,$pass);
           if($res){
           
          
        //   $_SESSION['aid']=$res['ADMINID'];
        //   $_SESSION['fname']=$res['FNAME'];
        //   $_SESSION['lname']=$res['LNAME'];
        //   $_SESSION['age']=$res['AGE'];
        //   $_SESSION['gender']=$res['GENDER'];
        //   $_SESSION['phn']=$res['PHNNO'];
        //   $_SESSION['email']=$res['EMAIL'];
        //   $_SESSION['city']=$res['CITY'];
        //   $_SESSION['street']=$res['STREET'];

          $loginerr="Login Successful";
    
           header("location: ../View/Dashboard.php");
           }  
           else{
            $loginerr="Wrong User Id or Password!! Login Failed!!";
          
        }
          
        }
        
        

           
       


}
?>