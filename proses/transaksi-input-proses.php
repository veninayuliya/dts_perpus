<?php
include'../koneksi.php';
$idtransaksi=$_POST['idtransaksi'];
$nama=$_POST['nama'];
$buku=$_POST['buku'];
$tglpinjam=$_POST['tglpinjam'];

if(isset($_POST['simpan'])){

// echo $idtransaksi,$nama,$buku,$tglpinjam;

$sql ="INSERT INTO tbtransaksi (`idtransaksi`, `nama`, `judul`, `tglpinjam`, `tglkembali`, `denda`)
		VALUES('$idtransaksi','$nama','$buku','$tglpinjam','','')";
$query = mysqli_query($db, $sql);
$anggota = "UPDATE `tbanggota` SET `status` = 'Sedang Meminjam' WHERE `tbanggota`.`nama` = '$nama'";
$query2 = mysqli_query($db, $anggota);
// // INSERT INTO `tb_transaksi` (`idtransaksi`, `nama`, `judul`, `tglpinjam`, `tglkembali`, `denda`) VALUES ('TR001', 'yay', 'ye', '2021-08-17', '', '')
//header("location:../index.php?p=transaksi");
echo "<script>
             alert('Peminjam Berhasil di Tambah...')
                window.location='../home.php?p=transaksi';
		</script>";
}
?>