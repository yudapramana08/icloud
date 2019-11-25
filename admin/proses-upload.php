<?php
session_start();

include "../conn.php";

  
  $fileku= $_FILES['file']['name'];
  $nama=$_POST['nama'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $nohp=$_POST['nohp'];
  $keterangan=$_POST['keterangan'];
  $tgl=date("Y-m-d H:i:s");
 
  
  move_uploaded_file($_FILES['file']['tmp_name'],"files/".$fileku );
  $sql=$conn->query("INSERT INTO file VALUES('','$fileku','$nama','$keterangan','$tgl','$tgl_lahir','$nohp')");

  if ($sql){

       echo "<script>alert('data telah dimasukan !!'); window.location = 'data-ku.php'</script>";
  } else {
  	 echo "gagal".$conn->error;
      }

?>
