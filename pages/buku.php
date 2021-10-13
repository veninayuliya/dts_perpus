<div id="label-page"><h3>Data Buku</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="home.php?p=buku-input" class="tombol">Tambah Buku</a></p>
	<table id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Status</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		<?php
		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idbuku']; ?></td>
			<td><?php echo $r_tampil_anggota['judulbuku']; ?></td>
			<td><?php echo $r_tampil_anggota['kategori']; ?></td>
			<td><?php echo $r_tampil_anggota['pengarang']; ?></td>
			<td><?php echo $r_tampil_anggota['penerbit']; ?></td>
			<td><?php echo $r_tampil_anggota['status']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a href="home.php?p=buku-edit&idbuku=<?php echo $r_tampil_anggota['idbuku'];?>" class="tombol">Edit</a></div>
				<div class="tombol-opsi-container"><a href="proses/buku-hapus.php?idbuku=<?php echo $r_tampil_anggota['idbuku']; ?>" class="tombol" onclick="return confirm('Hapus Data?')">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<!--  -->