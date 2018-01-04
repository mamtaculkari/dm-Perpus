<!DOCTYPE html>
<html>
<head>
  <title></title>

<script src="../chart/Chart.bundle.js"></script>

</head>
<body>

   <?php
   include '../conn/koneksi.php';
   include 'transaksi_fungsi.php';
   ?>
      <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Transaksi
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        
        <div class="grafik">


        <style type="text/css">
            .container {
                width: 100%;
                margin: 15px auto;
            }
        </style>
        <div class="container">
            <canvas id="myChart" width="100" height="40"></canvas>
        </div>
        <?php 
$query1 = "SELECT COUNT(t.id_transaksi) as jumlah, b.judul FROM fact_tbl_transaksi t, tbl_tgl_pinjam p, tbl_buku b WHERE p.tahun = '2016' AND t.id_tgl_pinjam = p.id_tgl_pinjam AND t.id_buku = b.id_buku GROUP BY t.id_buku";
$query2 = "SELECT COUNT(t.id_transaksi) as jumlah, b.judul FROM fact_tbl_transaksi t, tbl_tgl_pinjam p, tbl_buku b WHERE p.tahun = '2017' AND t.id_tgl_pinjam = p.id_tgl_pinjam AND t.id_buku = b.id_buku GROUP BY t.id_buku";
$query3 = "SELECT COUNT(t.id_transaksi) as jumlah, b.judul FROM fact_tbl_transaksi t, tbl_tgl_pinjam p, tbl_buku b WHERE p.tahun = '2018' AND t.id_tgl_pinjam = p.id_tgl_pinjam AND t.id_buku = b.id_buku GROUP BY t.id_buku";

  $exec1 = mysql_query($query1);
  $exec2 = mysql_query($query2);
  $exec3 = mysql_query($query3);

  $d2016 = mysql_fetch_row($exec1);
  $d2017 = mysql_fetch_row($exec2);
  $d2018 = mysql_fetch_row($exec3); 
         ?>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["2016","2017","2018"],
                    datasets: [
                      {
                            label: 'Laravel Advance',
                            data: [<?php echo "$d2016[0]"; ?>,<?php echo "$d2017[0]"; ?>,<?php echo "$d2018[0]"; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',//1
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 99, 132, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(255,99,132,1)',
                                'rgba(255,99,132,1)'
                            ],
                            borderWidth: 1
                        },
                        <?php 
                          $d2016 = mysql_fetch_row($exec1);
                          $d2017 = mysql_fetch_row($exec2);
                          $d2018 = mysql_fetch_row($exec3); 
                        ?>
                        {
                            label: 'Bahasa Indonesia',
                            data: [<?php echo "$d2016[0]"; ?>,<?php echo "$d2017[0]"; ?>,<?php echo "$d2018[0]"; ?>],
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.2)',//2
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(54, 162, 235, 0.2)'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        },
                        <?php 
                          $d2016 = mysql_fetch_row($exec1);
                          $d2017 = mysql_fetch_row($exec2);
                          $d2018 = mysql_fetch_row($exec3); 
                        ?>
                        {
                            label: 'KALKULUS',
                            data: [<?php echo "$d2016[0]"; ?>,<?php echo "$d2017[0]"; ?>,<?php echo "$d2018[0]"; ?>],
                            backgroundColor: [
                                'rgba(255, 206, 86, 0.2)',//3
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(255, 206, 86, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 206, 86, 1)'
                            ],
                            borderWidth: 1
                        },
                        <?php 
                          $d2016 = mysql_fetch_row($exec1);
                          $d2017 = mysql_fetch_row($exec2);
                          $d2018 = mysql_fetch_row($exec3); 
                        ?>
                        {
                            label: 'Artikel kesehatan',
                            data: [<?php echo "$d2016[0]"; ?>,<?php echo "$d2017[0]"; ?>,<?php echo "$d2018[0]"; ?>],
                            backgroundColor: [
                                'rgba(150, 55, 70, 0.2)',//3
                                'rgba(150, 55, 70, 0.2)',
                                'rgba(150, 55, 70, 0.2)'
                            ],
                            borderColor: [
                                'rgba(150, 55, 70, 1)',
                                'rgba(150, 55, 70, 1)',
                                'rgba(150, 55, 70, 1)'
                            ],
                            borderWidth: 1
                        }

                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>

        </div>    
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="25%">Judul Buku</th>
   	            <th width="25%">Peminjam</th>
   	            <th width="15%">Tgl Pinjam</th>
   	            <th width="15%">Tgl Kembali</th>
              </tr>
            </thead>
            <?php
				$query = "SELECT b.judul, a.nama, p.hari, p.bulan, p.tahun, k.hari, k.bulan, k.tahun
							FROM tbl_buku b, tbl_anggota a, tbl_tgl_pinjam p, tbl_tgl_kembali k, fact_tbl_transaksi f
							WHERE b.id_buku = f.id_buku 
							AND f.id_anggota = a.id_anggota
							AND f.id_tgl_pinjam = p.id_tgl_pinjam
							AND f.id_tgl_kembali = k.id_tgl_kembali
							ORDER BY b.judul ASC";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				while ($data=mysql_fetch_row($sql)) {
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
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Transaksi</td>
                    
                </tr>
            </table>
			<script src="chart/Chart.bundle.js"></script>
			<div class="grafik">
				
			</div>
    	</div>
   	  </div>
    </div>

</body>
</html>