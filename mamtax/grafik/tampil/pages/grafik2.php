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

$sql = "SELECT t.tanggal_bulan as tgl, SUM(p.pencatatan_jumlah) as jumlah 
FROM pencatatan p, tanggal t 
WHERE p.tanggal_id= t.tanggal_id
AND p.barang_id=1
GROUP BY t.tanggal_bulan";

$sql2 = "SELECT t.tanggal_bulan as tgl, SUM(p.pencatatan_jumlah) as jumlah 
FROM pencatatan p, tanggal t 
WHERE p.tanggal_id= t.tanggal_id
AND p.barang_id=2
GROUP BY t.tanggal_bulan";

$sql3 = "SELECT t.tanggal_bulan as tgl, SUM(p.pencatatan_jumlah) as jumlah 
FROM pencatatan p, tanggal t 
WHERE p.tanggal_id= t.tanggal_id
AND p.barang_id=3
GROUP BY t.tanggal_bulan";

$result = $conn->query($sql);
$index=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($index != $row["tgl"] )
		{
			echo "<canvas id='laptop".$index."' width='1px'>0</canvas>";
			$index++;
		}
		echo "<canvas id='laptop".$index."' width='1px'>".$row["jumlah"]."</canvas>";
			
		$index++;
    }
} else {
    echo "0 results";
}

$result = $conn->query($sql2);
$index=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($index != $row["tgl"] )
		{
			echo "<canvas id='notebook".$index."' width='1px'>0</canvas>";
			$index++;
		}
		echo "<canvas id='notebook".$index."' width='1px'>".$row["jumlah"]."</canvas>";
			
		$index++;
    }
} else {
    echo "0 results";
}

$result = $conn->query($sql3);
$index=1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($index != $row["tgl"] )
		{
			echo "<canvas id='kemputer".$index."' width='1px'>0</canvas>";
			$index++;
		}
		echo "<canvas id='kemputer".$index."' width='1px'>".$row["jumlah"]."</canvas>";
			
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
            .container {
                width: 50%;
				float: left;
            }
        </style>
		<script src="char.js"></script>
    </head>
    <body>
        <div class="container">
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
			
			var notebook1 = document.getElementById("notebook1").innerHTML;
			var notebook2 = document.getElementById("notebook2").innerHTML;
			var notebook3 = document.getElementById("notebook3").innerHTML;
			var notebook4 = document.getElementById("notebook4").innerHTML;
			var notebook5 = document.getElementById("notebook5").innerHTML;
			var notebook6 = document.getElementById("notebook6").innerHTML;
			var notebook7 = document.getElementById("notebook7").innerHTML;
			var notebook8 = document.getElementById("notebook8").innerHTML;
			var notebook9 = document.getElementById("notebook9").innerHTML;
			var notebook10 = document.getElementById("notebook10").innerHTML;
			var notebook11 = document.getElementById("notebook11").innerHTML;
			var notebook12 = document.getElementById("notebook12").innerHTML;
			
			var kemputer1 = document.getElementById("kemputer1").innerHTML;
			var kemputer2 = document.getElementById("kemputer2").innerHTML;
			var kemputer3 = document.getElementById("kemputer3").innerHTML;
			var kemputer4 = document.getElementById("kemputer4").innerHTML;
			var kemputer5 = document.getElementById("kemputer5").innerHTML;
			var kemputer6 = document.getElementById("kemputer6").innerHTML;
			var kemputer7 = document.getElementById("kemputer7").innerHTML;
			var kemputer8 = document.getElementById("kemputer8").innerHTML;
			var kemputer9 = document.getElementById("kemputer9").innerHTML;
			var kemputer10 = document.getElementById("kemputer10").innerHTML;
			var kemputer11 = document.getElementById("kemputer11").innerHTML;
			var kemputer12 = document.getElementById("kemputer12").innerHTML;
			
			Chart.defaults.global.defaultFontFamily = "Lato";
			Chart.defaults.global.defaultFontSize = 18;

			var dataFirst = {
				label: "Laptop",
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

			var dataSecond = {
				label: "Kemputer",
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
				label: "Notebook",
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

			var speedData = {
			  labels: ["Januari", "Februari", "Maret", "April", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
			  datasets: [dataFirst, dataSecond, data3]
			  //datasets: [dataFirst]
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