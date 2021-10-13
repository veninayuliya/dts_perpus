<?php
include'../koneksi.php';
?>

<div id="label-page" style="text-align: center;"><h3>Data Buku</h3></div>
<div id="content">
	<table id="tabel-tampil" align="center" border="1">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Status</th>
		</tr>
        <?php
		$sql="SELECT * FROM tbbuku ORDER BY idbuku";
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
		</tr>
		<?php } ?>
	</table>
</div>
<script>
		window.print();
</script>