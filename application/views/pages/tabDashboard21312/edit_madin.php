<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload News</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/input.css">
  </head>
  <body>
    <div class="container">
      <div class="title-side">
        <h3>Ubah Top Images</h3>
      </div>
      <div class="content">
          <?php echo form_open_multipart('MainController/madinupdate/'.$madin_item['id']);?>
          <table>
                <tr>
                  <td><input type="text" name="title" class="input" placeholder="Masukan Judul Berita" required=""></td>
                </tr>
                <td><input type="text" name="telp" class="input" placeholder="Masukan Telp" required=""></td>
              </tr>
              <tr>
                <td><input type="email" name="email" class="input" placeholder="Masukan Email" required=""></td>
              </tr>
              <tr>
                <td><input type="text" name="alamat" class="input" placeholder="Masukan Alamat" required=""></td>
              </tr>
              <tr>
                <td><input type="text" name="maps" class="input" placeholder="Masukan Google Maps" required=""></td>
              </tr>
                <tr>
                  <td><textarea class="tinymce" name="article" rows="10" cols="80"></textarea></td>
                </tr>
                <tr>
                  <td>
                      <input type="file" name="userfile" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" value="SIMPAN">
                  </td>
                </tr>
            </table>
            <?php echo form_close(); ?>
        </div>
      </div>
      <script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>asset/js/tinymce/tinymce.min.js"></script>
      <script src="<?php echo base_url(); ?>asset/js/tinymce/init-tinymce.js"></script>
  </body>
</html>
