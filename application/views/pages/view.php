<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $news_item['title'];?></title>
    <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/mystyle.css">
  </head>
  <body class="view">
  <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-header fixed-top myshadow">
      <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>asset/images/mylogo.png" style="height: 45px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
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
    <div class="container view-container">
      <div class="row">
        <div class="col-8 side-kiri">
          <div class="content main-view">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/projekWebsite">Home</a></li>
                <li class="breadcrumb-item"><a href="#">News</a></li>
                <li class="breadcrumb-item"><a href="#"><?php echo $news_item['kategori']; ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $news_item['title']; ?></li>
              </ol>
            </nav>
            <div class="content">
              <h2 class="title-view font-resp3"><?php echo $news_item['title']; ?></h2>
              <label class="tgl-update"><?php echo $news_item['tanggal']; ?></label>
              <!-- tinggi box-content-img masih otomatis -->
              <div class="box-content-img">
                <img class="content-img" src="<?php echo base_url(); ?>upload/<?php echo $news_item['foto']; ?>" alt="">
              </div>
              <div class="content-text">
                <p><?php echo $news_item['text']; ?></p>
              </div>
            </div>
          </div>
          <div class="share">
          <div class="addthis_inline_share_toolbox"></div>
          </div>
          <div class="vote">
            <h6 class="vote-title">Berikan penilaian anda, bantu kami menemukan apa yang anda suka</h6>
            <div class="boxstar">
              <button class="vote-btn" type="submit" name="vote1"><i class="fa fa-star star"></i></button>
              <button class="vote-btn" type="submit" name="vote2"><i class="fa fa-star star" aria-hidden="true"></i></button>
              <button class="vote-btn" type="submit" name="vote3"><i class="fa fa-star star" aria-hidden="true"></i></button>
              <button class="vote-btn" type="submit" name="vote4"><i class="fa fa-star star" aria-hidden="true"></i></button>
              <button class="vote-btn" type="submit" name="vote5"><i class="fa fa-star star" aria-hidden="true"></i></button>
            </div>
          </div>
          <div class="komentar">
            <div id="disqus_thread">
            </div>
          </div>
        </div>

        <div class="col-4" id="kanan-view">
          <div class="card card-view">
            <div class="card-body">
              <img class="myimg" src="<?php echo base_url(); ?>asset/images/mylogo.png" style="height: 45px;">
              <br><p class="card-text view-p-card">StackCode Indonesia membagikan berbagai article menarik, tutorial pemprograman dan informasi terupdate seputar tecknologi cocok buat kamu yang suka baca dan suka kepo seputar teknologi masa kini</p>
              <a href="/projekWebsite" class="card-link">Selanjutnya</a>
            </div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item mylist-group-item active mytitle-list">Article Lainnya</li>
            <!-- menampilkan article lainnya -->
            <?php foreach ($articlelainnya as $item): ?>
              <li class="list-group-item mylist-group-item"><a class="linklainnya" href="<?php echo base_url();?>article/<?php echo $item['slug']; ?>"><?php echo $item['title']; ?></a></li>
            <?php endforeach; ?>

          </ul>
        </div>
      </div>
    </div>
    <!-- myscript javascript -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- script share -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ca2cfb78a82260e"></script>
    <!-- script komentar -->
    <script>

      /**
      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
      /*
      var disqus_config = function () {
      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      };
      */
      (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      s.src = 'https://stackcodeindonesia.disqus.com/embed.js';
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
      })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </body>
</html>
