<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="frontend-grub">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/table.css">
  </head>
  <body>
    <section id="main-table">
      <table border="1">
        <tr role="row">
          <th class="th1">Tanggal</th>
          <th class="th2">Title</th>
          <th class="th3">Article</th>
          <th class="th6">Foto</th>
          <th class="th7">Control</th>
        </tr>
        <?php foreach ($slide as $item): ?>
        <tr>
          <th><?php echo $item->tanggal; ?></th>
          <th><?php echo $item->nama; ?></th>
          <th><?php echo $item->text; ?></th>
          <th><img src="<?php echo base_url(); ?>upload/<?php echo $item->foto;?>" width="100px"/></th>
          <th><a href="<?php echo site_url('editslide/'.$item->id); ?>">Edit</a></th>
        </tr>
      <?php endforeach; ?>
      </table>
    </section>
    <script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/popup_input.js"></script>
  </body>
</html>
