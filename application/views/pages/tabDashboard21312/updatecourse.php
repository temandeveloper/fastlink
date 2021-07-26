<!DOCTYPE html>
<html>
<head>
<title>Upload Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="author" content="frontend-grub">
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/table.css">
</head>
<body>
  <section id="main-table">
    <form class="" action="upload-news" method="post">
      <input type="submit" class="btm-fadeout" name="" value="Tambah Data">
    </form>
    <table border="1">
      <tr role="row">
        <th class="th9">Judul</th>
        <th class="th10">Slug</th>
        <th>Kategori</th>
        <th class="th11">Vote</th>
        <th class="th11">Tgl Update</th>
        <th class="th13">Control</th>
      </tr>
      <?php foreach ($berita as $news_item){ ?>
      <tr>
        <th><?php echo $news_item['title']; ?></th>
        <th><?php echo $news_item['slug']; ?></th>
        <th><?php echo $news_item['kategori']; ?></th>
        <th><?php echo $news_item['vote']; ?></th>
        <th><?php echo $news_item['tanggal']; ?></th>
        <th>
          <a href="<?php echo site_url('deleteberita/'.$news_item['id']); ?>">Delete</a>
        </th>
      </tr>
    <?php } ?>
    </table>
  </section>
</body>
</html>
