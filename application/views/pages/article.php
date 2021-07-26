<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>StackCode Indonesia</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/mystyle.css">
  </head>
  <body>
    <div class="notif shadow-lg">
      <div class="notif-body1">
        <h2 class="notif-text">Hello</h2>
      </div>
      <div class="notif-body2">
        <h2 class="notif-text">World!</h2>
        <h2 class="notif-text">User</h2>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-header fixed-top shadow">
      <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>asset/images/mylogo.png" style="height: 45px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>article/all/terupdate">Terupdate</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>article/all/teknologi">Teknologi</a></li>
          <li class="nav-item"><a class="nav-link" href="#Programming">Programming</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>article/all/tips">Tips</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>article/all/gedget">Gedget</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>article/all/game">Game</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>article/all/aplikasi">Aplikasi</a></li>
        </ul>
        <ul class="navbar-nav mr-auto"></ul>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook top-icon" aria-hidden="true"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram top-icon" aria-hidden="true"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube top-icon" aria-hidden="true"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-github top-icon" aria-hidden="true"></i></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-envelope top-icon" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </nav>
    <div class="jumbotron-fluid myjumbotron2">
      <img class="img-jumbo" src="<?php echo base_url() ?>asset/images/educ1.jpg" alt="">
      <div class="mytext-jombotron">
        <h1>Article Terpopuler</h1>
        <p>Berbagai Article Populer Terupdate Kami</p>
      </div>
    </div>
    <div class="container mycontain">
      <div class="row">
        <?php foreach ($contentpage as $item): ?>
        <div class="col mb-4">
          <div class="card mycard-pemprograman">
            <a href="<?php echo base_url();?>article/<?php echo $item['slug']; ?>"><img class="card-img-top" src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt="Card image cap"></a>
            <div class="card-body">
              <a href="<?php echo base_url();?>article/<?php echo $item['slug']; ?>"><h6 class="card-title"><?php echo $item['title']; ?></h6></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
