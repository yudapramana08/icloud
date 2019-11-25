<?php
session_start();
if (empty($_SESSION['username'])){
    header('location:../index.php');
} else {
    include "../conn.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detail Data Kelahiran</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Alpha.IT">
    <meta name="keywords" content="Sistem Informasi Kependudukan">
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="../css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

            .bulat{
     width: 300px;
     height: 200px;
     border: 1px solid black;
     border-radius: 30px;
}
</style>
      </head>
            <body class="skin-black">
                <!-- header logo: style can be found in header.less -->
               
                    <aside class="right-side">
  <?php
                    $query = $conn->query("SELECT * FROM file WHERE id='$_GET[id]'");
                    $data  = mysqli_fetch_array($query);
                    ?>
                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                    <b>Detail Data profil<br></b>
                                     <center><img class="bulat" src='files/<?php echo $data['file']; ?>' width='300px' height='200px' style='padding:20px;'></center>

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->
                  
                                <!-- </div> -->
                                <div class="panel-body">
                      <table id="example" class="table table-hover table-bordered">

                     
               
                      <tr>
                    <td>Nama</td>
                    <td><?php echo $data['nama']; ?></td>
                    </tr>
                       <tr>
                    <td>Tanggal lahir</td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    </tr>
                       <tr>
                    <td>No HP</td>
                    <td><?php echo $data['nohp']; ?></td>
                    </tr>
                       <tr>
                    <td>Keterangan</td>
                    <td><?php echo $data['keterangan']; ?></td>
                    </tr>
                   </table>

                <div class="text-right">
                   
                   
                     <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip"  href="fpdf/cetak.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-print"></span></a>
                     <a class="btn btn-sm btn-success" data-placement="bottom" data-toggle="tooltip" title="Edit data" href="edit-profil.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-edit"></span></a>
                     <a class="btn btn-sm btn-danger" data-placement="bottom" data-toggle="tooltip" title="Hapus data" href="delete.php?id=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-trash"></a><br><br>
                  


                <a href="data-ku.php" class="btn btn-sm btn-primary"> Kembali <i class="fa fa-arrow-circle-left"></i></a>
                </div>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>
              <!-- row end -->
                </section><!-- /.content -->
               
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


</body>
</html>
<?php }?>