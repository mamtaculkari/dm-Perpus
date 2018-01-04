<html>
<body onLoad="window.print();">
   <?php
   include 'conn/koneksi.php';
   ?>
   
		<p align="center">LAPORAN DATA PERPUSTAKAAN FAKULTAS TEKNIK</p>
   	      <table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	       
   	          <tr>
   	            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
   	            <th width="30%" align="center" class="style1" bgcolor="#CCCCCC">Judul Buku</th>
   	            <th width="19%" align="center" class="style1" bgcolor="#CCCCCC">Peminjam</th>
   	            <th width="18%" align="center" class="style1" bgcolor="#CCCCCC">Tgl Pinjam</th>
   	            <th width="18%" align="center" class="style1" bgcolor="#CCCCCC">Tgl Kembali</th>
              </tr>

            <?php
				$query = "SELECT b.judul, a.nama, p.hari, p.bulan, p.tahun, k.hari, k.bulan, k.tahun
							FROM tbl_buku b, tbl_anggota a, tbl_tgl_pinjam p, tbl_tgl_kembali k, fact_tbl_transaksi f
							WHERE b.id_buku = f.id_buku 
							AND f.id_anggota = a.id_anggota
							AND f.id_tgl_pinjam = p.id_tgl_pinjam
							AND f.id_tgl_kembali = k.id_tgl_kembali
							ORDER BY b.judul ASC";
				$sql = mysql_query($query);
				$no = 1;
				while ($data=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td><?php echo "$data[0]"; ?></a></td>
   	            <td><?php echo "$data[1]"; ?></td>
   	            <td align="center"><?php echo "$data[2]-$data[3]-$data[4]"; ?></td>
   	            <td align="center"><?php echo "$data[5]-$data[6]-$data[7]"; ?></td>
                
              </tr>    
            <?php $no++; } ?>
           
            </tbody>
          </table>
</body>
</html>