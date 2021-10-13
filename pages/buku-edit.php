<?php
	$idbuku=$_GET['idbuku'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$idbuku'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="idbuku" class="isian-formulir isian-formulir-border" readonly value="<?php echo $r_tampil_anggota['idbuku']; ?>"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judulbuku" class="isian-formulir isian-formulir-border" value="<?php echo $r_tampil_anggota['judulbuku']; ?>"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir"><input type="text" name="kategori" class="isian-formulir isian-formulir-border" value="<?php echo $r_tampil_anggota['kategori']; ?>"></td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><input type="text" name="pengarang" class="isian-formulir isian-formulir-border" value="<?php echo $r_tampil_anggota['pengarang']; ?>"></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><input rows="2" cols="40" name="penerbit" class="isian-formulir isian-formulir-border" value="<?php echo $r_tampil_anggota['penerbit']; ?>"></input></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>