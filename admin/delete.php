<?php
session_start();

include "../conn.php";

  
  $id= $_GET['id'];

  
 
  $sql=$conn->query("DELETE from file where id='$id'");

  if ($sql){

       echo "<script>alert('data telah dihapus !!'); window.location = 'data-ku.php'</script>";
  } else {
  	 echo "gagal".$conn->error;
      }

?>
