<?php
include'koneksi.php';
$tgl=date('Y-m-d');
?>
<!DOCTYPE html>
<html>
</body>
</html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body >
	<div class="container">
    <header>
           <div class="logo">
            <img width="200" height="200" alt="" class="header-image" src="images/logo-polsri.png"><br>
               <b>Perpustakaan Politeknik Negeri Sriwijaya</b>
           </div>

       </header>
       <nav>
    <ul>
        <li><a href="home.php?p=beranda">Beranda</a></li>
        <li><a href="#">Entry Data Dan Transaksi</a>
            <ul>
                <li><a href="home.php?p=anggota">Data Anggota</a></li>
                <li><a href="home.php?p=buku">Data Buku</a></li>
                <li><a href="home.php?p=transaksi">Transaksi Peminjaman</a></li>
            </ul>
        </li>
        <li><a href="#">Laporan</a>
            <ul>
                <li><a href="cetak/pdf-anggota.php" target="_blank">Lap.Data Anggota</a></li>
                <li><a href="cetak/pdf-buku.php" target="_blank">Lap.Data Buku</a></li>
                <li><a href="cetak/pdf-transaksi.php">Transaksi Peminjaman</a></li>
            </ul>
        </li>
        <li><a href="logout.php">Logout</a>
        </li>
    </ul>
	</nav>

		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		<footer>
			<img src="">
			Sistem Informasi Perpustakaan (sipus) | Praktikum
		</footer>
	</div>
</body>
</html>