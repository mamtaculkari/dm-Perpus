   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="30%">Judul Buku</th>
   	            <th width="20%">Pengarang</th>
   	            <th width="15%">Penerbit</th>
   	            <th width="15%">Jumlah</th>
              
              </tr>
            </thead>
            <?php
				$query = "SELECT * FROM tbl_buku ORDER by judul";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td><a href="?page=detil-buku&judul=<?php echo $data['judul']; ?>" class="detil"><?php echo $data['judul']; ?></a></td>
   	            <td><?php echo $data['pengarang']; ?></td>
   	            <td><?php echo $data['penerbit']; ?></td>
   	            <td align="center"><?php echo $data['jumlah_buku']; ?></td>
                
              </tr>
              
            <?php $no++; } ?>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> buku</td>
                    
                </tr>
            </table>
    	</div>
   	  </div>
    </div>