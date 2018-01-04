<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Perpustakaan </title>
<link rel="stylesheet" type="text/css" href="../images/style.css" />
</head>

<body>
<!-- menu main sebagai div Utama -->

<div id="main">
	<!-- menu Header -->
    <div id="header">
    <img src="../images/header1.jpg" />
    </div>
    
    <!-- menu Header -->
    <div id="menu-atas">
    	<div id="menu_user">
        <span><?php echo "Perpustakaan Fakultas Teknik"; ?></span>
        </div>
        <div id="menu_tanggal" align="right">
        <span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?>
        </span>
        </div>
    </div>
    
    
<div>    
    <!-- menu Kiri -->
 	<div id="menu-kiri">
    	<div id="bg_menu">Menu Utama
    	</div>
    	<div id="left_menu">
        	<a href="index.php" class="menu">&raquo; Home </a> <br />
        	<a href="?page=buku" class="menu">&raquo; Buku </a> <br />
        	<a href="?page=anggota" class="menu">&raquo; Anggota </a> <br />
        	<a href="?page=transaksi" class="menu">&raquo; Transaksi </a> <br />
            <a href="?page=laporan" class="menu">&raquo; Laporan </a> <br />
        	<a href="../logout.php" class="menu">&raquo; Logout </a> <br />
        </div>
    </div>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "home.php";
						break;
						
					
						
						// transaksi
						case "transaksi";
						include "../transaksi_data.php";
						break;
						case "transaksi_input";
						include "../transaksi_input.php";
						break;
						case "transaksi_proses";
						include "../transaksi_proses.php";
						break;
						case "transaksi_search";
						include "../transaksi_search.php";
						break;
						case "transaksi_proses_kembali";
						include "../transaksi_proses_kembali.php";
						break;
						case "transaksi_proses_perpanjang";
						include "../transaksi_proses_perpanjang.php";
						break;
						
						// menu buku
						case "buku";
						include "buku_data.php";
						break;
						case "buku_search";
						include "buku_search.php";
						break;
						case "detil-buku";
						include "buku_detil.php";
						break;
						
						// menu anggota
						case "anggota";
						include "anggota_data.php";
						break;
						case "anggota_detil";
						include "anggota_detil.php";
						break;
						case "anggota_search";
						include "anggota_search.php";
						break;
						
						// menu laporan
						case "laporan";
						include "../laporan.php";
						break;
						
					
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
    
    
  	<!-- menu Footer -->
    <div id="footer"><center>Perpustakaan &copy; 2017</center></div>
    
</div>

</body>
</html>

<?php } ?>