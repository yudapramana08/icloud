<?php
session_start();
if (empty($_SESSION['username'])){
  header('location:../index.php');
} else {
  require '../conn.php';
  $id=$_GET['user'];
   $sql = ("SELECT * from user where username='$id'") or die (mysql_error());
             $hasil=$conn->query($sql);
               $data = $hasil->fetch_assoc();
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
          <style type="text/css">

            .bulat{
     width: 300px;
     height: 200px;
     border: 1px  black;
     border-radius: 30px;
}
</style>
</head>
<body>

<div class="container">
  <h2>Edit data</h2>
 

  <form class="form-horizontal" action="proses-editakunsaya.php?user=<?php echo $data['username']; ?>" method="post" enctype="multipart/form-data">
   <center> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">username :</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="username" value="<?php echo $data['username']; ?>" name="username" onkeyup="namaa()" required>
         <p style="color: red" id="nama1" ></p>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">email :</label>
      <div class="col-sm-4">          
        <input type="email" class="form-control" id="email" value="<?php echo $data['email']; ?>" name="email"  required>
        
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">password :</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="password" value="<?php echo $data['password']; ?>" name="password"  required>
         <p style="color: red" id="nama1" ></p>
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-15">
        <button type="submit" class="btn btn-success">Kirim</button>
      </div>
    </div>
  </form>
</div>


</body>
</html>
<?php } ?>