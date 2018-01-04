<?php
include '../conn/koneksi.php';

$nim= $_GET['nim'];
$query = mysql_query("DELETE FROM tbl_anggota WHERE nim='$nim'");
if ($query) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	}


?>