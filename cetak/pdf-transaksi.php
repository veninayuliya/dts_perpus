<?php
include'../koneksi.php';
?>

<div id="label-page" style="text-align: center;"><h3>Data Transaksi</h3></div>
<div id="content">
	<table id="tabel-tampil" align="center" border="1">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Transaksi</th>
			<th>Nama Peminjam</th>
			<th>Buku</th>
			<th>Tanggal Pinjam</th>
			<th>Tanggal Kembali</th>
			<th>Denda</th>
		</tr>
		<?php
		$sql="SELECT * FROM tbtransaksi ORDER BY idtransaksi";
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
			<td><?php echo $r_tampil_anggota['denda']; ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
<script>
		window.print();
</script>