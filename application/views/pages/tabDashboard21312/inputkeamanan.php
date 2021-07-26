<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="frontend-grub">
    <link rel="stylesheet" href="../asset/css/dsh-input.css">
  </head>
  <body>
    <section id="main-table">
      <button type="button" class="btm-fadeout" name="button">Tambah Data</button>
      <table border="1">
        <tr role="row">
          <th class="th1">No Induk</th>
          <th class="th2">Nama</th>
          <th class="th3">Jenis Kelamin</th>
          <th class="th4">tgl lahir</th>
          <th class="th5">Alamat</th>
          <th class="th6">Foto</th>
          <th class="th7">Control</th>
        </tr>
        <?php foreach ($santri as $santri_item): ?>
        <tr>
          <th><?php echo $santri_item['nomer_induk']; ?></th>
          <th><?php echo $santri_item['nama_santri']; ?></th>
          <th><?php echo $santri_item['kelamin']; ?></th>
          <th><?php echo $santri_item['tanggal_lahir']; ?></th>
          <th><?php echo $santri_item['kabupaten']; ?></th>
          <th><img src="../upload/santri/<?php echo $santri_item['foto']?>" height="50px"/></th>
          <th><a href="<?php echo site_url('editsantri/'.$santri_item['id']); ?>">Edit</a>
            <br><a href="<?php echo site_url('deletesantri/'.$santri_item['id']); ?>">Delete</a>
          </th>
        </tr>

      <?php endforeach; ?>
      </table>
    </section>
    <div class="bg-blur">
      <div id="form1">
        <div class="form-layer2">
          <div class="judul">
            <h1>Form Input Data Santri</h1>
          </div>
          <div class="isi">
            <?php echo form_open_multipart('MainController/do_upload');?>
              <table>
                  <tr>
                    <td class="keterangan"><h4>Nomor induk</h4></td>
                    <td><input type="number" name="nomer_induk" class="input" placeholder="Masukan Nomor Induk" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Nomor Santri</h4></td>
                    <td><input type="number" name="nomor_santri" class="input" placeholder="Masukan Nomor Santri"required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Nama Lengkap</h4></td>
                    <td><input type="text" name="nama_santri" class="input" placeholder="Masukan Nama Lengkap"required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Jenis Kelamin</h4></td>
                    <td>
                      <select class="pilihan" name="kelamin">
                        <option>-</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Tempat lahir</h4></td>
                    <td><input type="text" name="tempat_lahir" class="input" placeholder="Masukan Tempat Lahir" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Tanggal Lahir</h4></td>
                    <td><input type="date" name="tanggal_lahir" class="input" placeholder="Masukan Tanggal Lahir" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Nama Ayah</h4></td>
                    <td><input type="text" name="nama_bapak" class="input" placeholder="Masukan Nama Ayah" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Nama ibu</h4></td>
                    <td><input type="text" name="nama_ibu" class="input" placeholder="Masukan Nama Ibu" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Pekerjaan Orang Tua</h4></td>
                    <td><input type="text" name="pekerjaan_ayah" class="input2" placeholder="Pekerjaan Ayah" required=""><input type="text" name="pekerjaan_ibu" class="input2" placeholder="Pekerjaan Ibu" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Anak Ke</h4></td>
                    <td>
                      <input type="number" name="anakke" class="input" value="" placeholder="Anak Ke" required="">
                    </td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Alamat</h4></td>
                    <td>
                      <input type="text" name="provinsi" class="input3" placeholder="Provinsi" required="">
                      <input type="text" name="kabupaten" class="input3" placeholder="Kabupaten" required="">
                      <input type="text" name="kecamatan" class="input3" placeholder="Kecamatan" required="">
                      <input type="text" name="desa" class="input3" placeholder="Desa" required="">
                      <input type="text" name="dusun" class="input3" placeholder="Dusun" required="">
                      <input type="text" name="rt" class="input4" placeholder="RT" required="">
                      <input type="text" name="rw" class="input4" placeholder="RW" required="">
                    </td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Tanggal Masuk</h4></td>
                    <td><input type="date" name="tgl_masuk" class="input" placeholder="Tgl Masuk Pondok" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Nomer HP</h4></td>
                    <td><input type="number" name="nomor_hp" class="input" placeholder="Nomer HP" required=""></td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Diniyah</h4></td>
                    <td>
                      <select class="pilihan" name="diniyah">
                        <option>-</option>
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
                        <option>-</option>
                        <option>Rekayasa Perangkat Lunak</option>
                        <option>Akomodasi Perhotelan</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td class="keterangan"><h4>Masukan Foto</h4></td>
                    <td>
                      <input type="file" name="foto" value="" required="">

                    </td>
                  </tr>
                  <tr>
                    <td class="keterangan"></td>
                    <td>
                      <input type="submit" class="btm-submit" name="" value="Simpan">
                    </td>
                  </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="../asset/js/jquery.js"></script>
    <script src="../asset/js/popup_input.js"></script>
  </body>
</html>
