<html>
<head>
<title>Upload Form</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/input.css">
</head>
<body>
<div class="container">
  <div class="main">
    <h3>Your file was successfully uploaded!</h3>
    <ul>
    <?php foreach ($upload_data as $item => $value):?>
    <li><?php echo $item;?>: <?php echo $value;?></li>
    <?php endforeach; ?>
    </ul>
    <form class="" action="kembali-upload" method="post">
      <input type="submit" name="" value="Kembali">
    </form>
  </div>
</div>
</body>
</html>
