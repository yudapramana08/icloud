<?php
session_start();

include "../conn.php";

  
  $fileku= $_FILES['file']['name'];
  $nama=$_POST['nama'];
  $tgl_lahir=$_POST['tgl_lahir'];
  $nohp=$_POST['nohp'];
  $keterangan=$_POST['keterangan'];
  $tgl=date("Y-m-d H:i:s");
  $id=$_GET['id'];
 
  if ($fileku!="") {
   move_uploaded_file($_FILES['file']['tmp_name'],"files/".$fileku );
 
  $sql=$conn->query("UPDATE file SET file='$fileku',nama='$nama',keterangan='$keterangan',waktu='$tgl',tgl_lahir='$tgl_lahir',nohp='$nohp'
    WHERE id=$id");
   if ($sql){

       echo "<script>alert('data telah dimasukan !!'); window.location = 'data-ku.php'</script>";
  } else {
     echo "gagal".$conn->error;
      }
  }else{
       move_uploaded_file($_FILES['file']['tmp_name'],"files/".$fileku );
 
  $sql=$conn->query("UPDATE file SET nama='$nama',keterangan='$keterangan',waktu='$tgl',tgl_lahir='$tgl_lahir',nohp='$nohp'
    WHERE id=$id");
    if ($sql){

       echo "<script>alert('data telah dimasukan !!'); window.location = 'data-ku.php'</script>";
  } else {
     echo "gagal".$conn->error;
      }

  }
  
 

?>
