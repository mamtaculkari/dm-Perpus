<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navbar</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    
    <div class="container" width='100%'>
        <div class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Data Transaksi</a>
                </div><!-- /navbar-header -->
                    
                <div class="collapse navbar-collapse" id="mynavbar-content">
                    <ul class="nav navbar-nav">
                        
                        <li><a href="?grafik=satu">Total Penjualan</a></li>
                        <li><a href="?grafik=dua">Jumlah Penjualan</a></li>
                        <li><a href="?grafik=tiga">Pembelian 3 terbanyak</a></li>
						<li><a href="?grafik=empat">Pembelian Favorit</a></li>
                    </ul>
                </div><!-- /collapse navbar-collapse -->

            </div><!-- /container-fluid -->
			
        </div><!-- /navbar navbar-default -->
		
		<?php
			if($_GET["grafik"]=="satu")
				include "grafik1.php";
			else if($_GET["grafik"]=="dua")
				include "grafik2.php";
			else if($_GET["grafik"]=="tiga")
				include "grafik3.php";
			else if($_GET["grafik"]=="empat")
				include "grafik4.php";
		?>
		
    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>