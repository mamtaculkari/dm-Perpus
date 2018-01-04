<?php
include "conn/koneksi.php";

$tgl_pinjam		= isset($_POST['tgl_pinjam']) ? $_POST['tgl_pinjam'] : "";
$tgl_kembali	= isset($_POST['tgl_kembali']) ? $_POST['tgl_kembali'] : "";

$dapat_buku		= $_POST['buku'];
$id				= $pecah_buku[0];
$buku			= $_POST['buku'];

$dapat_mhs		= isset($_POST['peminjam']) ? $_POST['peminjam'] : "";
$pecah_mhs		= explode (".", $dapat_mhs);
$id_mhs 		= $pecah_mhs[0];
$mhs			= $pecah_mhs[1];

$ket			= isset($_POST['ket']) ? $_POST['ket'] : "";

if($buku == "") {
	echo "<script>alert('Pilih bukunya terlebih dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=input-transaksi'>";
} elseif ($mhs == "" || $dapat_mhs == "") {
	echo "<script>alert('Pilih peminjamnya terlebih dahulu');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=input-transaksi'>";
	
} else {
	$query=mysql_query("SELECT * FROM tbl_buku WHERE id = '$buku'");
	while ($hasil=mysql_fetch_array($query)) {
		$sisa=$hasil['jumlah_buku'];
	} 
		if ($sisa == 0) {
		echo "<script>alert('Stok bukunya telah habis, tidak bisa melakukan transaksi, tambahkan stok buku segera');</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	
	} else {
		$qt = mysql_query("INSERT INTO tbl_transaksi VALUES (null, '$buku','$id_mhs', '$mhs', '$tgl_pinjam', '$tgl_kembali', 'Pinjam', '$ket')") or die ("Gagal Masuk".mysql_error());
		$qu			= mysql_query("UPDATE tbl_buku SET jumlah_buku=(jumlah_buku-1) WHERE id = '$buku' ");		
		if ($qt&&$qu) {
	        echo "<script>alert('Transaksi Sukses');</script>";
	        	echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
		} else {
			echo "<script>alert('Transaksi Gagal');</script>";
				echo "<meta http-equiv='refresh' content='0; url=?page=input-transaksi'>";
	
		}
	}
}
?>
