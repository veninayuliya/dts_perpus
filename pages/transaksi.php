<div id="label-page"><h3>Data Transaksi</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="home.php?p=transaksi-input" class="tombol">Tambah Transaksi</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Transaksi</th>
			<th>Nama Peminjam</th>
			<th>Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Denda</th>
			<th id="label-opsi">Opsi</th>
		</tr>

		<?php
		$sql="SELECT * FROM tbtransaksi ORDER BY idtransaksi DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idtransaksi']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['judul']; ?></td>
			<td><?php echo $r_tampil_anggota['tglpinjam']; ?></td>
			<td><?php echo $r_tampil_anggota['tglkembali']; ?></td>
			<td>

			</td>
			<td>

				<div class="tombol-opsi-container"><a href="home.php?p=transaksi-edit&idtransaksi=<?php echo $r_tampil_anggota['idtransaksi'];?>" class="tombol">Kembali</a></div>
				<div class="tombol-opsi-container"><a href="proses/transaksi-hapus.php?idtransaksi=<?php echo $r_tampil_anggota['idtransaksi']; ?>" class="tombol" onclick="return confirm('Hapus Data?')">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<!--  -->