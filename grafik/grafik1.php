 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dm_perpus3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT t.tanggal_bulan, SUM(p.pencatatan_jumlah*b.barang_harga) as Total_Harga
FROM pencatatan p, barang b, tanggal t
WHERE b.barang_id=p.barang_id
AND p.tanggal_id=t.tanggal_id
GROUP BY t.tanggal_bulan";

$result = $conn->query($sql);
$index=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<canvas id='laptop".$index."' width='1px'>".$row["Total_Harga"]."</canvas>";
		$index++;
    }
} else {
    echo "0 results";
}
$conn->close();
?> 


<html>
    <head>
        <title>Belajarphp.net - ChartJS</title>
        <style type="text/css">
            .container1 {
                width: 50%;
				float: left;
            }
        </style>
		<script src="char.js"></script>
    </head>
    <body>
        <div class="container1">
            <canvas id="speedChart" width="100" height="100" style="float:left"></canvas>
			
        </div>
        <script>
            var speedCanvas = document.getElementById("speedChart");
			var laptop1 = document.getElementById("laptop1").innerHTML;
			var laptop2 = document.getElementById("laptop2").innerHTML;
			var laptop3 = document.getElementById("laptop3").innerHTML;
			var laptop4 = document.getElementById("laptop4").innerHTML;
			var laptop5 = document.getElementById("laptop5").innerHTML;
			var laptop6 = document.getElementById("laptop6").innerHTML;
			var laptop7 = document.getElementById("laptop7").innerHTML;
			var laptop8 = document.getElementById("laptop8").innerHTML;
			var laptop9 = document.getElementById("laptop9").innerHTML;
			var laptop10 = document.getElementById("laptop10").innerHTML;
			var laptop11 = document.getElementById("laptop11").innerHTML;
			var laptop12 = document.getElementById("laptop12").innerHTML;

			Chart.defaults.global.defaultFontFamily = "Lato";
			Chart.defaults.global.defaultFontSize = 18;

			var dataFirst = {
				label: "Total Penjualan",
				data: [laptop1, laptop2, laptop3, laptop4, laptop5, laptop6, laptop7, laptop8, laptop9, laptop10, laptop11, laptop12],
				lineTension: 0.3,
				fill: false,
				borderColor: 'red',
				backgroundColor: 'transparent',
				pointBorderColor: 'red',
				pointBackgroundColor: 'lightgreen',
				pointRadius: 5,
				pointHoverRadius: 15,
				pointHitRadius: 30,
				pointBorderWidth: 2,
				pointStyle: 'rect'
			  };
/*
			var dataSecond = {
				label: "Car B - Speed (mph)",
				data: [kemputer1, kemputer2, kemputer3, kemputer4, kemputer5, kemputer6, kemputer7, kemputer8, kemputer9, kemputer10, kemputer11, kemputer12],
				lineTension: 0.3,
				fill: false,
				borderColor: 'purple',
				backgroundColor: 'transparent',
				pointBorderColor: 'purple',
				pointBackgroundColor: 'lightgreen',
				pointRadius: 5,
				pointHoverRadius: 15,
				pointHitRadius: 30,
				pointBorderWidth: 2
			  };
			  
			  var data3 = {
				label: "Car B - Speed (mph)",
				data: [notebook1, notebook2, notebook3, notebook4, notebook5, notebook6, notebook7, notebook8, notebook9, notebook10, notebook11, notebook12],
				lineTension: 0.3,
				fill: false,
				borderColor: 'black',
				backgroundColor: 'transparent',
				pointBorderColor: 'black',
				pointBackgroundColor: 'lightgreen',
				pointRadius: 5,
				pointHoverRadius: 15,
				pointHitRadius: 30,
				pointBorderWidth: 2
			  };
*/
			var speedData = {
			  labels: ["Januari", "Februari", "Maret", "April", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
			  //datasets: [dataFirst, dataSecond, data3]
			  datasets: [dataFirst]
			};

			var chartOptions = {
			  legend: {
				display: true,
				position: 'top',
				labels: {
				  boxWidth: 80,
				  fontColor: 'black'
				}
			  }
			};

			var lineChart = new Chart(speedCanvas, {
			  type: 'line',
			  data: speedData,
			  options: chartOptions
			});
        </script>
		
    </body>
</html>