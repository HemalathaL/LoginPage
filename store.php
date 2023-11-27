<?php
 $conn= mysqli_connect('localhost','root','','login');
 if($conn)
 {
     $user=$_POST['user'];
     $pass=$_POST['pass'];
     $sql="insert into data values('$user','$pass')";
     $store=mysqli_query($conn, $sql);
     if($store)
     {
        echo "<script type='text/javascript'>alert('Data Added!!'); location='index.php';</script>";
     }
     else
     {
        echo "<script type='text/javascript'>alert('Data Not Added!!'); location='index.php';</script>";
     }
 }
 else 
{
  echo "Database Not Connected";     
}
     
     
?>