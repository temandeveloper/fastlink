<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="AhmadFadil">
    <title>Welcome to Home</title>
  </head>
  <body>
    <div class="menu-1">
      <a href="?halaman=databaseyayasan2">klik disi</a>
    </div>
      <?php
      $page = @$_GET['halaman'];
      if ($page == "home") {
        echo "ini adalah home";
      }elseif ($page == "databaseyayasan2") {
        include"tabDashboard/inputpage.php";
      }elseif ($page == "databasekeuangan") {
        echo "ini database keuangan";
      }elseif ($page == "databasesekolah") {
        echo "ini database sekolah";
      }elseif ($page == "databasekeamanan") {
        echo "database keamanan";
      }elseif ($page == "laporan") {
        echo "ini adalah laporan";
      }elseif ($page == "updatewebsite") {
        include"tabDashboard/updatepage.php";
      }elseif ($page == "log") {
        echo "ini adalah log";
      }elseif ($page == "inputkeamanan") {
        include"tabDashboard/inputkeamanan.php";
      }else {
        echo "Selamat Datang";
      }
       ?>
  </body>
</html>
