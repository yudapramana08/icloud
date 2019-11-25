<?php
session_start();
if (empty($_SESSION['username'])){
  header('location:../index.php');
} else {
  require '../conn.php';
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function ktp(){
    var no,kata2;
    no = document.getElementById('no_ktp').value;
    if (no=="") {
      kata2="kosong";
      }else if(isNaN(no)){
      kata2="harus angka";
    
    }else if(no.length < 16){
      kata2="kurang dari 16";

    }else{
      kata2="oke valid";
    }
    document.getElementById('ktp1').innerHTML= kata2;
  }

  function namaa(){
    var nm,kata2;
    nm = document.getElementById('nama').value;
    if (nm=="") {
      kata2="kosong";
      }else if(!isNaN(nm)){
      kata2="harus huruf";
      }else{
      kata2="oke valid";
    }
    document.getElementById('nama1').innerHTML= kata2;
  }
    function alamatt(){
    var al,kata2;
    al = document.getElementById('alamat').value;
     if (al=="") {
      kata2="kosong";
     }else{
      kata2="oke valid";
    }
    document.getElementById('alamat1').innerHTML= kata2;
  }

 
  function cek(){
    var us,ps;
    no=document.getElementById('no_ktp').value;
    al=document.getElementById('alamat').value;
    if (no=="" || al=="") {
      alert("silahkan isi dengan benar ");
    };
  }
</script>
</head>
<body>

<div class="container">
  <h2>Upload file</h2>
  <form class="form-horizontal" action="proses-upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Foto :</label>
      <div class="col-sm-4">
        <input type="file" class="form-control" id="file" placeholder="Enter no ktp" name="file"  required>
        <p style="color: red" id="ktp1" ></p>
         
        
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Nama :</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="nama" placeholder="Masukan nama " name="nama" onkeyup="namaa()" required>
         <p style="color: red" id="nama1" ></p>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Tanggal lahir :</label>
      <div class="col-sm-4">          
        <input type="date" class="form-control" id="tgl_lahir" placeholder="Masukan tanggal " name="tgl_lahir"  required>
         <p style="color: red" id="nama1" ></p>
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">No HP :</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="nohp" placeholder="Masukan no hp " name="nohp"  required>
         <p style="color: red" id="nama1" ></p>
      </div>
    </div>
   
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Keterangan :</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="keterangan" placeholder="Masukan Keterangan" name="keterangan" onkeyup="alamatt()" required>
          <p style="color: red" id="alamat1" ></p>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>


</body>
</html>
<?php } ?>