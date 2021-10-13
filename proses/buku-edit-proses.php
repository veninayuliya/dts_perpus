<?php
include'../koneksi.php';

$idbuku=$_POST['idbuku'];
$judulbuku=$_POST['judulbuku'];
$kategori=$_POST['kategori'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];


If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbbuku
		SET judulbuku='$judulbuku',kategori='$kategori',pengarang='$pengarang',penerbit='$penerbit'
		WHERE idbuku='$idbuku'"
	);
	echo "<script>
             alert('Buku Berhasil diedit')
                window.location='../home.php?p=buku';
		</script>";
}
?>