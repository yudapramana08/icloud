<?php
session_start();
if (empty($_SESSION['username'])){
  header('location:../index.php');
} else {
  include '../conn.php';
?><?php





//cek koneksi
if($conn->connect_error){
	die("koneksi gagal : ".$conn->connect_error);
}

?>
<style type="text/css">
     .bulat{
     width: 300px;
     height: 200px;
     border: 1px  black;
     border-radius: 30px;
}
</style>

<body >

 <div style="margin-bottom:15px;margin-right:10;" align="right">
  <form action="" method="post">



   <input type="text" name="input_cari"  class="btn btn-default" style="width:250px;" />
  
  <button type="submit" name="cari" value="Cari" class="btn btn-default">Cari</button>
   </form>

 


   </div>




<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>



<table border="0" cellpadding="10" align=center margin="10">
  <tr>
</body>


 <?php 
$input_cari = @$_POST['input_cari']; 
$cari = @$_POST['cari'];
  
   
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
      $sql = ("SELECT * from file where nama LIKE '%$input_cari%'  ") or die (mysql_error());   
              $hasil=$conn->query($sql);
              



    } else {
             
            $sql = ("SELECT * from file") or die (mysql_error());
             $hasil=$conn->query($sql);

          }
    
    } 




    else {

     $sql = ("SELECT * from file") or die (mysql_error());
             $hasil=$conn->query($sql);

    }


   // mengecek data<?php
	if($hasil->num_rows > 0){
	
   $jml_kolom=4; 
   $cnt = 0;
   
  while($data = $hasil->fetch_assoc())
  {
      if ($cnt >= $jml_kolom) 
      {
          echo "</tr><tr>";
          $cnt = 0;
    }
 
    $cnt++;

?>
     <td align=center>       
       <div>
         <img class="bulat" src='files/<?php echo $data['file']; ?>' width='300px' height='200px' style='padding:10px;'> 
       </div>     
       <table  align=center>
              <tr><td><b> <a href="detail-profil.php?id=<?php echo $data['id'];?>" title="detail"><?php echo $data['nama']; ?></b></br></td></tr>
              <tr><td><?php echo $data['waktu']; ?></br></td></tr>
              <tr><td>Keterangan :<?php echo $data['keterangan']; ?></br></td></tr>
    <tr><td> <a href="unduh.php?foto=<?php echo $data['file']; ?>" button class='btn btn-success btn-xs' title='download'><span class='glyphicon glyphicon-download'></span></a></button>
	<a href="delete.php?id=<?php echo $data['id']; ?>" button class='btn btn-danger btn-xs' title='hapus'><span class='glyphicon glyphicon-trash'></span></a></button>
    </td></tr>
    <tr><td><br></td></tr>
    
    </table>

      
      
       


<?php
  }

 ?>
</tr>
</table><br>

 
 
 
		

<?php
	}
else{ 
	echo"<center>Data tidak ditemukan</center>";
}
}

?>

