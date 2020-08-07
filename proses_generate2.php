<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="ChartJS/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>2018</h2>
	</center>


	<?php 
	include 'koneksi.php';
	?>
     <div id="barchart_material" style="width: 900px; height: 500px;"></div>

	<br/>
	<br/>

	<table border="1">
		<thead>
               <h2 style="text-align:center;">Data 2018</h2>
			<tr> 
				<th>Jenjang</th>
				<th>Alokasi</th>
				<th>Penyaluran</th>
				<th>Pencairan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from data2018");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<!-- <td><?php echo $no++; ?></td> -->
					<td><?php echo $d['jenjang']; ?></td>
					<td><?php echo $d['alokasi']; ?></td>
					<td><?php echo $d['penyaluran']; ?></td>
					<td><?php echo $d['pencairan']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
     </table>
     <br>
     <table border="1">
		<thead>
          <h2 style="text-align:center;">Data 2017</h2>
			<tr>
				<th>Jenjang</th>
				<th>Alokasi</th>
				<th>Penyaluran</th>
				<th>Pencairan</th>
			</tr>
          </thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from data2017");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<!-- <td><?php echo $no++; ?></td> -->
					<td><?php echo $d['jenjang']; ?></td>
					<td><?php echo $d['alokasi']; ?></td>
					<td><?php echo $d['penyaluran']; ?></td>
					<td><?php echo $d['pencairan']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Alokasi', 'Penyaluran', 'Pencairan'],
          ['SD', 
          <?php 
          $alokasi_sd = mysqli_query($koneksi,"SELECT * from data2018 WHERE jenjang='SD'");
		if (mysqli_num_rows ($alokasi_sd) > 0) {
			// output data of each row
			while($row = $alokasi_sd->fetch_assoc()) {
				echo  $row["alokasi"];
			}
		}
          echo mysqli_num_rows($alokasi_sd);
          ?>, 
          <?php 
          $penyaluran_sd = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SD'");
          if(mysqli_num_rows($penyaluran_sd)>0){
               while($row = $penyaluran_sd->fetch_assoc()){
                    echo $row["penyaluran"];
               }
          }
          echo mysqli_num_rows($penyaluran_sd);
          ?>, 
          <?php
          $pencairan_sd = mysqli_query($koneksi, "SELECT * FROM data2018 WHERE jenjang='SD'");
          if(mysqli_num_rows($pencairan_sd)>0){
               while($row = $pencairan_sd->fetch_assoc()){
                    echo $row["pencairan"];
               }
          }
          echo mysqli_num_rows($pencairan_sd);
          ?>],
          ['SMP', 
          <?php 
          $alokasi_smp = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMP'");
          if(mysqli_num_rows($alokasi_smp)>0){
               while($row = $alokasi_smp->fetch_assoc()){
                    echo $row["alokasi"];
               }
          }
          echo mysqli_num_rows($alokasi_smp);
          ?>, 
          <?php 
          $penyaluran_smp = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMP'");
          if(mysqli_num_rows($penyaluran_smp)>0){
               while($row = $penyaluran_smp->fetch_assoc()){
                    echo $row["penyaluran"];
               }
          }
          echo mysqli_num_rows($penyaluran_smp);
          ?>, 
          <?php 
          $pencairan_smp = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMP'");
          if(mysqli_num_rows($pencairan_smp)>0){
               while($row = $pencairan_smp->fetch_assoc()){
                    echo $row["pencairan"];
               }
          }
          echo mysqli_num_rows($pencairan_smp);
          ?>],
          ['SMA', 
          <?php 
          $alokasi_SMA = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMA'");
          if(mysqli_num_rows($alokasi_SMA)>0){
               while($row = $alokasi_SMA->fetch_assoc()){
                    echo $row["alokasi"];
               }
          }
          echo mysqli_num_rows($alokasi_SMA);
          ?>, 
          <?php 
          $penyaluran_SMA = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMA'");
          if(mysqli_num_rows($penyaluran_SMA)>0){
               while($row = $penyaluran_SMA->fetch_assoc()){
                    echo $row["penyaluran"];
               }
          }
          echo mysqli_num_rows($penyaluran_SMA);
          ?>, 
          <?php 
          $pencairan_SMA = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMA'");
          if(mysqli_num_rows($pencairan_SMA)>0){
               while($row = $pencairan_SMA->fetch_assoc()){
                    echo $row["pencairan"];
               }
          }
          echo mysqli_num_rows($pencairan_SMA);
          ?>],
          ['SMK', 
          <?php 
          $alokasi_SMK = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMK'");
          if(mysqli_num_rows($alokasi_SMK)>0){
               while($row = $alokasi_SMK->fetch_assoc()){
                    echo $row["alokasi"];
               }
          }
          echo mysqli_num_rows($alokasi_SMK);
          ?>, 
          <?php 
          $penyaluran_SMK = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMK'");
          if(mysqli_num_rows($penyaluran_SMK)>0){
               while($row = $penyaluran_SMK->fetch_assoc()){
                    echo $row["penyaluran"];
               }
          }
          echo mysqli_num_rows($penyaluran_SMK);
          ?>, 
          <?php 
          $pencairan_SMK = mysqli_query($koneksi, "SELECT * from data2018 WHERE jenjang='SMK'");
          if(mysqli_num_rows($pencairan_SMK)>0){
               while($row = $pencairan_SMK->fetch_assoc()){
                    echo $row["pencairan"];
               }
          }
          echo mysqli_num_rows($pencairan_SMK);
          ?>]
        ]);

        var options = {
          chart: {
            title: '',
          },
          // bars: 'horizontal' // Required for Material Bar Charts.
        };
        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
</body>
</html>