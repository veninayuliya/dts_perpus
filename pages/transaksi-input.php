<?php
    $tgl_pinjam = date("Y-m-d");
    $tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
    $kembali = date("Y-m-d", $tujuh_hari);
?>
<div class="panel panel-default">
<div align="center" font="7" class="panel-heading">
    Tambah Data Transaksi
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
        <form method="POST" action="proses/transaksi-input-proses.php">
        <div class="form-group">
        <?php
            include 'koneksi.php';

            // mengambil data barang dengan kode paling besar
            $query = mysqli_query($db, "SELECT max(idtransaksi) as kodeTerbesar FROM tbtransaksi");
            $data = mysqli_fetch_array($query);
            $kodeTransaksi = $data['kodeTerbesar'];

            // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
            // dan diubah ke integer dengan (int)
            $urutan = (int) substr($kodeTransaksi, 3, 3);

            // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
            $urutan++;

            // membentuk kode barang baru
            // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
            // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
            // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG
            $huruf = "TR";
            $kodeTransaksi = $huruf . sprintf("%03s", $urutan);
            ?>
              <label>Kode Transaksi</label>
              <input class="form-control" type="text" name="idtransaksi" id="id" value="<?php echo $kodeTransaksi; ?>" readonly />
        </div>
           <div class="form-group">
              <label>Buku</label>
               <select class="form-control" name="buku">
                <?php $sql = $db->query("SELECT * FROM `tbbuku` WHERE `status` = 'Tersedia'");
                      while ($data = $sql->fetch_assoc()) {
                      # code...
                      echo "<option value='$data[judulbuku]'>$data[judulbuku]</option>";
                      }
                 ?>
                </select>
            </div>
           <div class="form-group">
                <label>Nama Anggota</label>
                <select class="form-control" name="nama">
                <?php $sql = $db->query("SELECT * FROM `tbanggota` WHERE `status` = 'Tidak Meminjam'");
                      while ($data = $sql->fetch_assoc()) {
                      # code...
                      echo "<option value='$data[nama]'>$data[idanggota].$data[nama]</option>";
                      }
                   ?>
                </select>
            </div>
            <div class="form-group">
              <label>Tanggal Pinjam</label>
              <input class="form-control" type="text" name="tglpinjam" id="tglpinjam" value="<?php echo $tgl_pinjam; ?>" readonly />
            </div>
            <!-- <div class="form-group">
                <label>Tanggal Kembali</label>
                <input class="form-control" type="text" name="tgl_kembali" id="tgl" value="<?php echo $kembali; ?>" readonly />
             </div> -->

           </div>
            <input type="submit" name="simpan" onclick="return confirm('Simpan Data?')" value="Simpan" style="margin-left: 15px" class="btn btn-primary">
         </div>
        </div>
         </form>
        </div>
</div>
</div>
</div>
