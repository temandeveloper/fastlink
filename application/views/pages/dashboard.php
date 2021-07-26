<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="AhmadFadil">
    <title>Welcome to Home</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/dashboard-style.css">
  </head>
  <body>
    <div class="popup_logout">
      <div class="formlogout">
        <h3>Perhatian !</h3>
        <h4>Dengan ini anda akan keluar dan menghapus SESSiON Login anda. Apakah anda yakin ?</h4>
        <div class="form">
          <form class="btm" action="Login/logout" method="post">
            <input type="submit" name="" value="YA">
          </form>
          <button class="btm" id="popup_close" type="button" name="button">TIDAK</button>
        </div>
      </div>
    </div>
      <header>
        <div class="user-login">
          <h3>Administrator</h3>
          <button id="logout" type="button" name="button">Logout</button>
        </div>
        <div id="judul">
          <div class="title">
            <img src="<?php echo base_url(); ?>asset/images/admin.png" width="30" height="30"/>
            <h2>Dashboard <span id="admin">Admin</span></h2>
          </div>
        </div>
        <div class="nav">
          <ul>
            <li class="dropdown" id="post-update" onclick="onToggleUpdate()"><img src="<?php echo base_url(); ?>asset/images/home.png" width="20" height="20"/>
              <span>Post Update</span>
              <br><a class="link-down" href="?halaman=onlineCourse">Online Course</a>
              <br><a class="link-down" href="?halaman=updatewebsite">Article</a>
            </li>
            <li class="dropdown" id="post-about" onclick="onToggleAbout()"><img src="<?php echo base_url(); ?>asset/images/home.png" width="20" height="20"/>
              <span>Post About</span>
              <br><a class="link-down" href="?halaman=slideupdate">Slide Kutipan</a>
            </li>
            <li class="dropdown"><img src="<?php echo base_url(); ?>asset/images/database.png" width="20" height="20"/><a href="#">Subcriber</a>
            </li>
            <li class="dropdown"><img src="<?php echo base_url(); ?>asset/images/update.png" width="20" height="20"/><a href="#">AddUser</a>
            </li>
            <li class="dropdown"><img src="<?php echo base_url(); ?>asset/images/update.png" width="20" height="20"/><a href="?halaman=riwayatlogin">Log Login</a>
            </li>
          </ul>
        </div>
      </header>
      <div id="tab-menu">
        <div class="main-isi">
          <?php
          $page = @$_GET['halaman'];
          if ($page == "slideupdate") {
            include"tabDashboard/slideupdate.php";
          }elseif ($page == "riwayatlogin") {
            include"tabDashboard/riwayatlogin.php";
          }elseif ($page == "updatewebsite") {
            include"tabDashboard/updatepage.php";
          }elseif ($page == "updatecourse"){
            include"tabDashboard/updatecourse.php";
          }else {
            echo "ZERO GROUND UNIDENTIFIED 404";
          }
           ?>
         </div>
       </div>
       <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/dashboard.js"></script>
       <script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
       <script src="<?php echo base_url(); ?>asset/js/popup.js"></script>
  </body>
</html>
