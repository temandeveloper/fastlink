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
        <h3>Form Input Data Santri</h3>
      </div>
      <div class="main">
          <?php echo form_open_multipart('MainController/do_upload2');?>
          <table>
                <tr>
                  <td><input type="text" name="title" class="input" placeholder="Masukan Judul Berita" required=""></td>
                </tr>
                <tr>
                  <td><input type="text" name="slug" class="input" placeholder="Masukan Slug Berita" required=""></td>
                </tr>
                <tr>
                  <select class="input" name="kategori">
                    <option value="Teknologi">Teknologi</option>
                    <option value="Gedget">Gedget</option>
                    <option value="Aplikasi">Aplikasi</option>
                    <option value="Tips">Tips</option>
                    <option value="Umik">Unik</option>
                    <option value="Game">Game</option>
                    <option value="Info">Info</option>
                    <option value="Hot">Hot</option>
                  </select>
                  <td></td>
                </tr>
                <tr>
                  <td><textarea class="tinymce" name="text" rows="10" cols="80"></textarea></td>
                </tr>
                <tr>
                  <td>
                      <input type="file" name="userfile" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="submit" value="Publish">
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
