<?php





   // membaca id file dari link

   $foto = $_GET['foto'];



   // membaca informasi file dari tabel berdasarkan id nya




   // header yang menunjukkan nama file yang akan didownload

   header("Content-Disposition: attachment; filename=".$foto);

   

   // // header yang menunjukkan ukuran file yang akan didownload

   // header("Content- : ".$data['size']);



   // header yang menunjukkan jenis file yang akan didownload

   header("Content-type: "."jpg");



   // proses membaca isi file yang akan didownload dari folder 'data'

   $fp  = fopen("files/".$foto, 'r');

   $content = fread($fp, filesize('files/'.$foto));

   fclose($fp);



   // menampilkan isi file yang akan didownload

   echo $content;

   exit;

?>