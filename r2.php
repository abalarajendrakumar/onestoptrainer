<?php

error_reporting(0);
include'config1.php';

if(isset($_POST['register'])){
  if($_POST['pass']==$_POST['repass']){
    $result="";
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=md5($_POST['pass']);
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $clocation=$_POST['clocation'];
    $wlocation=$_POST['wlocation'];
    $mobile=$_POST['mobile'];
    $country=$_POST['country'];
    $work=$_POST['work'];
    $tm=$_POST['tm'];
   $education=$_POST['education'];
     $program=$_POST['program'];
       $key1=$_POST['key1'];
          $known=$_POST['known'];
    $sql="INSERT INTO register_login3  (uname,email,password,age,gender,clocation,wlocation,mobile,country,work,tm,education,program,key1,known)VALUES('$uname','$email','$password','$age','$gender','$clocation','$wlocation','$mobile','$country','$work','$tm','$education','$program','$key1','$known')";








if(mysqli_query($conn,$sql)){
  $result="successfully Registered login now";

  }
  else{
    $result="failed to register!";
  }
}
else{
  $result="password did not match!";
}
}
?>