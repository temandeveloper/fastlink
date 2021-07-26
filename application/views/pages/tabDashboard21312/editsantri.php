<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="backend-grub">
    <link rel="stylesheet" href="../asset/css/dsh-edit.css">
  </head>
  <body>
    <section id="main-table">
      <div class="isi">
        <?php echo form_open('MainController/updatesantri/'.$santri_item['id']);?>
          <table>
              <tr>
                <td class="keterangan"><h4>Nomor induk</h4></td>
                <td><input type="number" name="nomer_induk" class="input" value="<?php echo $santri_item['nomer_induk']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Nomor Santri</h4></td>
                <td><input type="number" name="nomor_santri" class="input" value="<?php echo $santri_item['nomor_santri']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Nama Lengkap</h4></td>
                <td><input type="text" name="nama_santri" class="input" value="<?php echo $santri_item['nama_santri']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Jenis Kelamin</h4></td>
                <td>
                  <select class="pilihan" name="kelamin">
                    <option><?php echo $santri_item['kelamin']; ?></option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Tempat lahir</h4></td>
                <td><input type="text" name="tempat_lahir" class="input" value="<?php echo $santri_item['tempat_lahir']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Tanggal Lahir</h4></td>
                <td><input type="date" name="tanggal_lahir" class="input" value="<?php echo $santri_item['tanggal_lahir']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Nama Ayah</h4></td>
                <td><input type="text" name="nama_bapak" class="input" value="<?php echo $santri_item['nama_bapak']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Nama ibu</h4></td>
                <td><input type="text" name="nama_ibu" class="input" value="<?php echo $santri_item['nama_ibu']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Pekerjaan Orang Tua</h4></td>
                <td><input type="text" name="pekerjaan_ayah" class="input2" value="<?php echo $santri_item['pekerjaan_ayah'] ?>" required=""><input type="text" name="pekerjaan_ibu" class="input2" placeholder="Pekerjaan Ibu" value="<?php echo $santri_item['pekerjaan_ibu'] ?>"></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Anak Ke</h4></td>
                <td>
                  <input type="number" name="anakke" class="input" value="<?php echo $santri_item['anakke']; ?>" required="">
                </td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Alamat</h4></td>
                <td>
                  <input type="text" name="provinsi" class="input3" value="<?php echo $santri_item['provinsi']; ?>" required="">
                  <input type="text" name="kabupaten" class="input3" value="<?php echo $santri_item['kabupaten']; ?>" required="">
                  <input type="text" name="kecamatan" class="input3" value="<?php echo $santri_item['kecamatan']; ?>" required="">
                  <input type="text" name="desa" class="input3" value="<?php echo $santri_item['desa']; ?>" required="">
                  <input type="text" name="dusun" class="input3" value="<?php echo $santri_item['dusun']; ?>" required="">
                  <input type="text" name="rt" class="input4" value="<?php echo $santri_item['rt']; ?>" required="">
                  <input type="text" name="rw" class="input4" value="<?php echo $santri_item['rw']; ?>" required="">
                </td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Tanggal Masuk</h4></td>
                <td><input type="date" name="tgl_masuk" class="input" value="<?php echo $santri_item['tgl_masuk']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Nomer HP</h4></td>
                <td><input type="number" name="nomor_hp" class="input" value="<?php echo $santri_item['nomor_hp']; ?>" required=""></td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Diniyah</h4></td>
                <td>
                  <select class="pilihan" name="diniyah">
                    <option><?php echo $santri_item['diniyah']; ?></option>
                    <option>1 Ula</option>
                    <option>2 Ula</option>
                    <option>3 Ula</option>
                    <option>4 Ula</option>
                    <option>1 Wustho</option>
                    <option>2 Wustho</option>
                    <option>1 Ulya</option>
                    <option>2 Ulya</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Jurusan</h4></td>
                <td>
                  <select class="pilihan" name="jurusan">
                    <option><?php echo $santri_item['jurusan']; ?></option>
                    <option>Rekayasa Perangkat Lunak</option>
                    <option>Akomodasi Perhotelan</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="keterangan"><h4>Masukan Foto</h4></td>
                <td>
                  <input type="file" name="foto" value="<?php echo $santri_item['foto']; ?>">
                    <?php echo $santri_item['foto']; ?>
                </td>
              </tr>
              <tr>
                <td class="keterangan"></td>
                <td>
                  <input type="submit" class="btm-submit" name="" value="Simpan">
                </td>
              </tr>
          </table>
        <?php echo form_close(); ?>
      </div>
    </section>
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/popup_input.js"></script>
  </body>
</html>
