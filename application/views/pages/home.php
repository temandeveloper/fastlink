<div class="master">
  <div class="jumbotron-fluid myjumbotron-fluid">
    <div class="jumbo-text-content">
      <h1 class="jumbo-h1 font-resp1">Beta Test Perdana StackCode Indonesia</h1>
      <h5 class="jumbo-h5 font-resp-p">Peluncuran perdana sebagai uji coba kinerja website StackCode Indonesia
        <br> serta untuk pengembangan Selanjutnya</h4>
      <h3 class="jumbo-h3 font-resp2">Launching Coming Soon</h3>
      <div class="box-btn1">
        <a href="#down"><button class="jumbo-btn" type="button" name="button">Let's Tour</button></a>
      </div>
    </div>
  </div>
  <div class="container mycontain">
    <div class="row">
      <div class="col mytop-title" id="Programming">
        <h2 class="mytitle font-resp2">Mari Belajar Coding di StackCode Indonesia</h2>
        <p class="myp font-resp-p">Belajar coding untuk mencari solusi dari berbagai permasalahan di sekitar kita <br>StackCode Indonesia menyediakan berbagai tutorial pemprograman yang menarik untuk di pelajari</p>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col mb-3">
        <div class="card mycard-pemprograman">
          <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/java.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Belajar Membuat Game Dengan Unity</h5>
            <a href="#" class="btn btn-light">Mulai Belajar</a>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card mycard-pemprograman">
          <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/python.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Membuat Website Dengan PHP</h5>
            <a href="#" class="btn btn-light">Mulai Belajar</a>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card mycard-pemprograman">
          <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/java.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Mempelajari Dasar Pemprograman Java</h5>
            <a href="#" class="btn btn-light">Mulai Belajar</a>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card mycard-pemprograman">
          <img class="card-img-top" src="<?php echo base_url(); ?>asset/images/python.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Belajar pemprograman Python</h5>
            <a href="#" class="btn btn-light">Mulai Belajar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col mytop-title">
        <h2 class="mytitle font-resp2">Berbagai Article dan Info Menarik Tersedia Disini</h2>
        <p class="myp font-resp-p">StackCode Indonesia menyediakan berbagai article menarik dan informasi terupdate seputar tecknologi<br>cocok buat kamu yang suka baca dan suka kepo seputar teknologi masa kini</p>
      </div>
    </div>
    <div class="row mw mz pz">
      <div class="col-8 side-kiri">
        <div class="contain-terupdate">
          <div class="title-contain">
            <h4>Sedang Populer</h4>
          </div>

          <!-- menampilkan data update limit 5x -->

          <?php foreach ($populer as $item) { ?>
          <div class="mycard-horizontal">
            <div class="mybox-img">
              <a href="article/<?php echo $item['slug'] ?>"><img src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt="" class="mycard-img"></a>
            </div>
            <div class="mycard-body">
              <a href="article/<?php echo $item['slug'] ?>"><h5 class="mycard-title"><?php echo $item['title']; ?></h5></a>
              <p class="info-text"><?php echo $item['kategori'] ?></p>
            </div>
          </div>
          <?php } ?>

          <div class="box-btn3">
            <a class="btn btn-primary fl-right" href="article/all/populer">Article Lainnya</a>
          </div>
        </div>
        <div class="title-contain">
          <h4>Info Terkini</h4>
        </div>
        <div class="row">

          <!-- menampilkan data terkini hot -->
          <?php foreach ($infoterkiniA as $item): ?>
          <div class="col mycol resp-none">
            <div class="card no-border">
              <a href="article/<?php echo $item['slug'];?>"><img class="card-img-top" src="<?php echo base_url();?>upload/<?php echo $item['foto']; ?>" alt="Card image cap"></a>
              <div class="mybody-p">
                <a href="article/<?php echo $item['slug'];?>"><p class="mg-tb-5 "><?php echo $item['title']; ?></p></a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>


        </div>
        <div class="row">
          <div class="col-6">
            <ul class="list-group">

              <!-- menampikan infoterkiniB -->
              <?php foreach ($infoterkiniB as $item): ?>
                <li class="mylist-group-item2"><div class="box-img-list resp-1"><a href="<?php echo $item['slug']; ?>"><img class="img-list" src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt=""></a>"</div><div class="mylist-group-item-box"><a href="<?php echo $item['slug']; ?>" class="list-group-item-action"><?php echo $item['title']; ?></a></div></li>
              <?php endforeach; ?>

            </ul>
          </div>
          <div class="col-6">
            <ul class="list-group">

              <!-- menampikan infoterkiniC -->
              <?php foreach ($infoterkiniC as $item): ?>
                <li class="mylist-group-item2"><div class="box-img-list resp-1"><a href="<?php echo $item['slug']; ?>"><img class="img-list" src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt=""></a>"</div><div class="mylist-group-item-box"><a href="<?php echo $item['slug']; ?>" class="list-group-item-action"><?php echo $item['title']; ?></a></div></li>
              <?php endforeach; ?>

            </ul>
          </div>
        </div>
        <div class="box-btn3">
          <a class="btn btn-primary fl-right" href="article/all/terupdate">Article Lainnya</a>
        </div>
        <div class="title-contain">
          <h4>Seputar Teknologi</h4>
        </div>
        <div class="row">

        <?php foreach ($teknologi as $item): ?>
          <div class="col-3 resp-col-6">
            <div class="card no-border">
              <a href="article/<?php echo $item['slug'];?>"><img class="card-img-top" src="<?php echo base_url();?>upload/<?php echo $item['foto']; ?>" alt="Card image cap"></a>
              <div class="mybody-p">
                <a href="article/<?php echo $item['slug'];?>"><p class="mg-tb-5 "><?php echo $item['title']; ?></p></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>

        </div>
        <div class="box-btn3">
          <a class="btn btn-primary fl-right" href="article/all/teknologi">Article Lainnya</a>
        </div>
      </div>


      <!-- ini bagian blog konten kanan -->


      <div class="col-4 side-right">
        <ul class="list-group">
          <li class="mylist-group-item mylist-item mytitle-list"><a href="article/all/aplikasi"><h5 class="my-h4">Aplikasi Pilihan</h5></a></li>
            <?php foreach ($aplikasi as $item): ?>
              <li class="mylist-group-item2">
                <div class="box-img-list">
                  <img class="img-list" src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt="">
                </div>
                <div class="mylist-group-item-box">
                  <a href="article/<?php echo $item['slug']; ?>" class="list-group-item-action"><?php echo $item['title'];?></a>
                </div>
              </li>
            <?php endforeach; ?>
        </ul>
        <ul class="list-group">
          <li class="mylist-group-item mylist-item mytitle-list"><a href="article/all/game"><h5 class="my-h4">Info Gaming</h5></a></li>
            <?php foreach ($kabargame as $item): ?>
              <li class="mylist-group-item2">
                <div class="box-img-list">
                  <img class="img-list" src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt="">
                </div>
                <div class="mylist-group-item-box">
                  <a href="article/<?php echo $item['slug']; ?>" class="list-group-item-action"><?php echo $item['title']; ?></a>
                </div>
              </li>
            <?php endforeach; ?>
        </ul>
        <ul class="list-group">
          <li class="mylist-group-item mylist-item mytitle-list"><a href="article/all/gedget"><h5 class="my-h4">Kabar Gedget</h5></a></li>
            <?php foreach ($kabargetged as $item): ?>
              <li class="mylist-group-item2">
                <div class="box-img-list">
                  <img class="img-list" src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt="">
                </div>
                <div class="mylist-group-item-box">
                  <a href="article/<?php echo $item['slug']; ?>" class="list-group-item-action"><?php echo $item['title']; ?></a>
                </div>
              </li>
            <?php endforeach; ?>
        </ul>
        <ul class="list-group">
          <li class="mylist-group-item mylist-item mytitle-list"><a href="article/all/tips"><h5 class="my-h4">Tips Unik</h5></a></li>
            <?php foreach ($tipsunik as $item): ?>
              <li class="mylist-group-item2">
                <div class="box-img-list">
                  <img class="img-list" src="<?php echo base_url(); ?>upload/<?php echo $item['foto']; ?>" alt="">
                </div>
                <div class="mylist-group-item-box">
                  <a href="article/<?php echo $item['slug']; ?>" class="list-group-item-action"><?php echo $item['title']; ?></a>
                </div>
              </li>
            <?php endforeach; ?>
        </ul>
      </div>

      <!-- ini akhir slide right -->

    </div>
  </div>
  <div class="container-fluid subcribe mybor-top mybor-bot">
    <div class="container">
      <div class="row">
        <div class="col mytop-title">
          <h2 class="mytitle font-resp3">Berlangganan Info Terupdate Website Kami</h2>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
              <small id="emailHelp" class="form-text text-muted">Kami Berjanji Tidak Akan Mengekspos Email Anda</small>
            </div>
            <div class="box-btn-sub">
              <button type="submit" class="btn btn-primary mybtn">Subcribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container" id="katamereka">
    <div class="row">
      <div class="col mytop-title">
        <h2 class="mytitle" id="down">Apa Kata Mereka</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item mycrousel">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="myh5">"Sebuah Code Bisa Merubah Dunia, Sebuah Code Bisa Menghancurkan Dunia"</h5>
                  <p>Jhon or Not</p>
                </div>
              </div>
              <div class="carousel-item mycrousel">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="myh5">"Membaca Membuka Mata Akan Ketidak Tahuan Kita Akan Suatu Hal, Selamat Datang Di Dunia Ilmu Pengetahuan(Internet)"</h5>
                  <p>JackHamer Co.Dev</p>
                </div>
              </div>
              <div class="carousel-item mycrousel active">
                <div class="carousel-caption d-none d-md-block">
                  <h5 class="myh5">"Berkarya Untuk Keluarga, Berkarya Untuk Indonesia, Berkarya Untuk Dunia <br>Welcome to StackCode Indonesia"</h5>
                  <p>Ahmad Fadil Head of StackCode Indonesia</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon myicon" aria-hidden="true"></span>
              <span class="sr-only myicon">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
    </div>
  </div>
</div>
