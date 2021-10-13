<?php
include'../koneksi.php';
?>

<div id="label-page" style="text-align: center;"><h3>Data Anggota</h3></div>
<div id="content">
	<table id="tabel-tampil" align="center" border="1">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>



		<?php
		$sql="SELECT * FROM tbanggota ORDER BY idanggota";
		$q_tampil_anggota = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td/pdf-buku.phpd><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
<script>
		window.print();
</script>