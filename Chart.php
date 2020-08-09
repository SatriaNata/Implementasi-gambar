<?php 
include 'koneksi.php';
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart_data2018);
          google.charts.setOnLoadCallback(drawChart_data2017);

          //Chart data2018
          function drawChart_data2018() {
               var data = google.visualization.arrayToDataTable([
               ['', 'Alokasi', 'Penyaluran', 'Pencairan'],
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
               legend: 'left',
               width: 900,
               height: 500,
               title: '2018',
               colors:['#5094df','#f1cd6d','#51d7b4'],
               // annotations: {
               // boxStyle: {
               //      // Color of the box outline.
               //      stroke: '#888',
               //      // Thickness of the box outline.
               //      strokeWidth: 1,
               //      // x-radius of the corner curvature.
               //      rx: 10,
               //      // y-radius of the corner curvature.
               //      ry: 10,
               //      // Attributes for linear gradient fill.
               //      gradient: {
               //      // Start color for gradient.
               //      color1: '#fbf6a7',
               //      // Finish color for gradient.
               //      color2: '#33b679',
               //      // Where on the boundary to start and
               //      // end the color1/color2 gradient,
               //      // relative to the upper left corner
               //      // of the boundary.
               //      x1: '0%', y1: '0%',
               //      x2: '100%', y2: '100%',
               //      // If true, the boundary for x1,
               //      // y1, x2, and y2 is the box. If
               //      // false, it's the entire chart.
               //      useObjectBoundingBoxUnits: true
               //      }
               // }
               // }
          };
          var chart = new google.charts.Bar(document.getElementById('barchart_material_data2018'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
          }

          //Chart data2018
          function drawChart_data2017() {
               var data = google.visualization.arrayToDataTable([
               ['', 'Alokasi', 'Penyaluran', 'Pencairan'],
               ['SD', 
               <?php 
               $alokasi_sd = mysqli_query($koneksi,"SELECT * from data2017 WHERE jenjang='SD'");
               if (mysqli_num_rows ($alokasi_sd) > 0) {
                    // output data of each row
                    while($row = $alokasi_sd->fetch_assoc()) {
                         echo  $row["alokasi"];
                    }
               }
               echo mysqli_num_rows($alokasi_sd);
               ?>, 
               <?php 
               $penyaluran_sd = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SD'");
               if(mysqli_num_rows($penyaluran_sd)>0){
                    while($row = $penyaluran_sd->fetch_assoc()){
                         echo $row["penyaluran"];
                    }
               }
               echo mysqli_num_rows($penyaluran_sd);
               ?>, 
               <?php
               $pencairan_sd = mysqli_query($koneksi, "SELECT * FROM data2017 WHERE jenjang='SD'");
               if(mysqli_num_rows($pencairan_sd)>0){
                    while($row = $pencairan_sd->fetch_assoc()){
                         echo $row["pencairan"];
                    }
               }
               echo mysqli_num_rows($pencairan_sd);
               ?>],
               ['SMP', 
               <?php 
               $alokasi_smp = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMP'");
               if(mysqli_num_rows($alokasi_smp)>0){
                    while($row = $alokasi_smp->fetch_assoc()){
                         echo $row["alokasi"];
                    }
               }
               echo mysqli_num_rows($alokasi_smp);
               ?>, 
               <?php 
               $penyaluran_smp = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMP'");
               if(mysqli_num_rows($penyaluran_smp)>0){
                    while($row = $penyaluran_smp->fetch_assoc()){
                         echo $row["penyaluran"];
                    }
               }
               echo mysqli_num_rows($penyaluran_smp);
               ?>, 
               <?php 
               $pencairan_smp = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMP'");
               if(mysqli_num_rows($pencairan_smp)>0){
                    while($row = $pencairan_smp->fetch_assoc()){
                         echo $row["pencairan"];
                    }
               }
               echo mysqli_num_rows($pencairan_smp);
               ?>],
               ['SMA', 
               <?php 
               $alokasi_SMA = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMA'");
               if(mysqli_num_rows($alokasi_SMA)>0){
                    while($row = $alokasi_SMA->fetch_assoc()){
                         echo $row["alokasi"];
                    }
               }
               echo mysqli_num_rows($alokasi_SMA);
               ?>, 
               <?php 
               $penyaluran_SMA = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMA'");
               if(mysqli_num_rows($penyaluran_SMA)>0){
                    while($row = $penyaluran_SMA->fetch_assoc()){
                         echo $row["penyaluran"];
                    }
               }
               echo mysqli_num_rows($penyaluran_SMA);
               ?>, 
               <?php 
               $pencairan_SMA = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMA'");
               if(mysqli_num_rows($pencairan_SMA)>0){
                    while($row = $pencairan_SMA->fetch_assoc()){
                         echo $row["pencairan"];
                    }
               }
               echo mysqli_num_rows($pencairan_SMA);
               ?>],
               ['SMK', 
               <?php 
               $alokasi_SMK = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMK'");
               if(mysqli_num_rows($alokasi_SMK)>0){
                    while($row = $alokasi_SMK->fetch_assoc()){
                         echo $row["alokasi"];
                    }
               }
               echo mysqli_num_rows($alokasi_SMK);
               ?>, 
               <?php 
               $penyaluran_SMK = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMK'");
               if(mysqli_num_rows($penyaluran_SMK)>0){
                    while($row = $penyaluran_SMK->fetch_assoc()){
                         echo $row["penyaluran"];
                    }
               }
               echo mysqli_num_rows($penyaluran_SMK);
               ?>, 
               <?php 
               $pencairan_SMK = mysqli_query($koneksi, "SELECT * from data2017 WHERE jenjang='SMK'");
               if(mysqli_num_rows($pencairan_SMK)>0){
                    while($row = $pencairan_SMK->fetch_assoc()){
                         echo $row["pencairan"];
                    }
               }
               echo mysqli_num_rows($pencairan_SMK);
               ?>]
          ]);

          var options = {
               legend: 'left',
               width: 900,
               height: 500,
               title: '2017',
               colors:['#5094df','#f1cd6d','#51d7b4']
          };
          var chart = new google.charts.Bar(document.getElementById('barchart_material_data2017'));

          chart.draw(data, google.charts.Bar.convertOptions(options));
          }
          </script>