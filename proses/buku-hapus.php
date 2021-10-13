<?php
include'../koneksi.php';
$idbuku=$_GET['idbuku'];

mysqli_query($db,
	"DELETE FROM tbbuku
	WHERE idbuku='$idbuku'"
);
header("location:../home.php?p=buku");
?>