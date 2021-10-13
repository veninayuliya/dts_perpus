<?php
include'../koneksi.php';

$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

If(isset($_POST['kembali'])){
	// mysqli_query($db,
	// 	"UPDATE tbtransaksi
	// 	SET nama='$nama',jeniskelamin='$jenis_kelamin',alamat='$alamat'
	// 	WHERE idanggota='$id_anggota'"
	// );

	$transaksi = "UPDATE `tbtransaksi` SET `tglkembali` = '2021-08-31' WHERE `tbtransaksi`.`idtransaksi` = 'TR004'";
	$query2 = mysqli_query($db, $anggota);

	echo "<script>
	alert('Buku Berhasil di Kembalikan...')
	   window.location='../home.php?p=transaksi';
	</script>";
}
?>