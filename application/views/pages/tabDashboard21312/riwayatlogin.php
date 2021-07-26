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
          <th class="th1">Id</th>
          <th class="th2">Username</th>
          <th class="th3">Tanggal Login</th>
          <th class="th4">Control</th>
        </tr>
        <?php foreach ($log as $log_item){ ?>
        <tr>
          <th><?php echo $log_item->id; ?></th>
          <th><?php echo $log_item->username; ?></th>
          <th><?php echo $log_item->tanggal; ?></th>
          <th><a href="<?php echo site_url('deletelog/'.$log_item->id); ?>">Delete</a></th>
        </tr>

      <?php } ?>
      </table>
    </section>
  </body>
</html>
