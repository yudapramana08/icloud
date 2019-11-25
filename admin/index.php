<?php
session_start();
if (empty($_SESSION['username'])){
  header('location:../index.php');
} else {
 include "../conn.php";
 $kamu=$_SESSION['username'];
?>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

  <body style="background-color:white">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Icloud</a>
    </div>
    <ul class="nav navbar-nav">
      <li>
          
                  <a href="" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt"></span> Drive ku
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                     <li role="presentation"><a role="menuitem" tabindex="-1" href="data-ku.php" target="iframe_a">tampil data saya</a></li>
                 
                  </ul>
             
      </li>

       <li>
          
                  <a href="" data-toggle="dropdown"><span class="glyphicon glyphicon-download-alt"></span> Upload
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="upload.php" target="iframe_a">Upload file</a></li>                 
                    </ul>
             
      </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
           <li>
          
                  <a href="" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Option
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>    
                      <li><a href="akun-saya.php"  target="iframe_a"><span class="glyphicon glyphicon-user" ></span> Akun saya</a></li>                
                    </ul>
             
      </li>

         
    </ul>
  </div>
</nav>
&nbspselamat datang <font color='blue'><b><?php echo $kamu?></b></font>
<iframe height="89%" width="100%" src="data-ku.php" name="iframe_a" style="border:none;"></iframe>

</body>


</html>
<?php } ?>