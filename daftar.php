<?php
session_start();

include "conn.php";

  
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password']; 
  
  
  $sql=$conn->query("INSERT INTO user VALUES('','$username','$email','$password')");

  if ($sql){

       echo "<script>alert('data berhasil!!'); window.location = 'index.php'</script>";
  } else {
  	 echo "gagal".$conn->error;
      }

?>
