<?php
  
  session_start();
  include 'config1.php';

  $_SESSION['message']='';

  if(isset($_POST['login'])){
    $uname=$_POST['username'];
    $pass=md5($_POST['password']);
    $sql="SELECT * FROM register_login3 WHERE uname='$uname' AND password='$pass'";

    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
      $_SESSION['username']=$uname;
      header("location:index-2.php");

    }
    else{
      $_SESSION['message']="Wrong password!";

    }
  }

    ?>