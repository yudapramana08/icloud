<?php
session_start();

include "../conn.php";

  
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password']; 
 $user=$_GET['user'];
  
  
  $sql=$conn->query("UPDATE user SET username='$username',email='$email',password='$password' where username='$user' ");

  if ($sql){

       echo "<script>alert('data berhasil di edit!!'); window.location = 'data-ku.php'</script>";
  } else {
  	 echo "gagal".$conn->error;
      }

?>
