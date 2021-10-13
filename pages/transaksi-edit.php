<?php
	$idtransaksi=$_GET['idtransaksi'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$idtransaksi'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);

	$tgl_pinjam = ['tglpinjam'];
    $tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
    $kembali = date("Y-m-d", $tujuh_hari);


	// $tglkembali = date('Y-m-d');
	// if($tglkembali!=null){
	// 	function terlambat($tgl_dateline, $tgl_kembali){

	// 		$tgl_dateline_pecah = explode("-", $tgl_dateline);
	// 		$tgl_dateline_pecah = $tgl_dateline_pecah[2]."-".$tgl_dateline_pecah[1]."-".$tgl_dateline_pecah[0];

	// 		$tgl_kembali_pecah = explode("-", $tgl_kembali);
	// 		$tgl_kembali_pecah = $tgl_kembali_pecah[2]."-".$tgl_kembali_pecah[1]."-".$tgl_kembali_pecah[0];

	// 		$selisih = strtotime($tgl_kembali_pecah)-strtotime($tgl_dateline_pecah);
	// 		$selisih = $selisih/86400;

	// 		if ($selisih>=1) {
	// 			# code...
	// 			$hasi_tgl = floor($selisih);
	// 		} else {
	// 			$hasi_tgl = 0;
	// 		}
	// 		return $hasi_tgl;
	// 		}
	// }
	// 	if($r_tampil_anggota['tglkembali']!=null){
	// 		$denda = 1000;
	// 			$tgl_dateline2 = $r_tampil_anggota['tglkembali'];
	// 			$tglkembali = date('Y-m-d');

	// 			$lambat = terlambat($tgl_dateline2, $tglkembali);
	// 			$denda1 = $lambat*$denda;

	// 			if ($lambat>0) {
	// 				# code...
	// 				echo "
	// 				<font color='red'>$lambat hari<br>(Rp $denda1)</font>
	// 				";
	// 			}else {
	// 				echo $lambat ." Hari";
	// 			}
	// 	}


?>
<div id="label-page"><h3>Form Pengembalian</h3></div>
<div id="content">
	<form action="proses/transaksi-kembali.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idtransaksi']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border" readonly></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="buku" value="<?php echo $r_tampil_anggota['judul']; ?>" class="isian-formulir isian-formulir-border" readonly></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input rows="2" cols="40" name="tglpinjam" class="isian-formulir isian-formulir-border" readonly value="<?php echo $r_tampil_anggota['tglpinjam']; ?>"></inp></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Harus Dikembalikan</td>
			<td class="isian-formulir"><input rows="2" cols="40" name="tglpinjam" class="isian-formulir isian-formulir-border" value="<?php echo $kembali; ?>"readonly></input></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Kembali</td>
			<td class="isian-formulir"><input rows="2" type="date" cols="40" name="tglkembali" class="isian-formulir isian-formulir-border"></input></td>
		</tr>
		<tr>
			<td class="label-formulir">Denda</td>
			<td class="isian-formulir"><input rows="2" cols="40" name="denda" class="isian-formulir isian-formulir-border" readonly></input></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
</div>

<!-- <?php
if($tglkembali!=null){
	function terlambat($tgl_dateline, $tgl_kembali){

		$tgl_dateline_pecah = explode("-", $tgl_dateline);
		$tgl_dateline_pecah = $tgl_dateline_pecah[2]."-".$tgl_dateline_pecah[1]."-".$tgl_dateline_pecah[0];

		$tgl_kembali_pecah = explode("-", $tgl_kembali);
		$tgl_kembali_pecah = $tgl_kembali_pecah[2]."-".$tgl_kembali_pecah[1]."-".$tgl_kembali_pecah[0];

		$selisih = strtotime($tgl_kembali_pecah)-strtotime($tgl_dateline_pecah);
		$selisih = $selisih/86400;

		if ($selisih>=1) {
			# code...
			$hasi_tgl = floor($selisih);
		} else {
			$hasi_tgl = 0;
		}
		return $hasi_tgl;
		}
}

?> -->