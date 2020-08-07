<!DOCTYPE html>
<html>
     <?php 
     include 'koneksi.php';
     ?>
     <head>
          <title>Sipintar</title>
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
          crossorigin="anonymous">
          <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
          <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
          <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
          <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
          <header class="header">
               <div>
                    <div class="sipintar ">
                         <img src="images/Logo.jpg" width="50px">&nbsp Sipintar
                    </div>
                    <div class="login ">
                         <a class="btn btn-warning" href="dasboardLogin.php" type="button">Login</a>
                    </div>
               </div>
               </br>
               </br>
          </header>
     </head>
     <body>
          <div class="row">
               <div class="col-3">
                    <input type="checkbox" id="check">
                    <label for="check">
                         <i class="fas fa-caret-right" id="btn"></i>
                         <i class="fas fa-caret-left" id="cancel"></i>
                    </label>
                    <div class="sidebar">
                         <ul>
                              <li><a href="#">Perkembangan Pencairan &nbsp <i class="fas fa-angle-down"></i></a></li>
                              <li><a href="#">Penyaluran Dana PIP 2018 &nbsp<i class="fas fa-angle-down"></i></a></li>
                              <li><a href="#">Penyaluran Dana PIP 2017 &nbsp<i class="fas fa-angle-down"></i></a></li>
                              <li><a href="#">Penyaluran Dana PIP 2016 &nbsp<i class="fas fa-angle-down"></i></a></li>
                              <li><a href="#">Penyaluran Dana PIP 2015 &nbsp<i class="fas fa-angle-down"></i></a></li>               
                         </ul>
                    </div>
               </div >
               <div class="col ">
                    <h3>Status penyaluran pencairan</h3>
                    <br>
                    <div id="barchart_material_data2018" ></div>
                    <div class="data">
                         <table class="tabel" width="900px" style="border:1px solid black;">
                              
                              <thead style="border:1px solid black;">
                                   <tr style="border:1px solid black;"> 
                                        <th>Jenjang</th>
                                        <th>Alokasi</th>
                                        <th>Penyaluran</th>
                                        <th>%</th>
                                        <th>Pencairan</th>
                                        <th>%</th>
                                   </tr>
                              </thead>
                              <tbody style="border:1px solid black;">
                                   <?php 
                                   $no = 1;
                                   $data = mysqli_query($koneksi,"select * from data2018");
                                   while($d=mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                             <td><?php echo $d['jenjang']; ?></td>
                                             <td><?php echo number_format($d['alokasi'],0,',','.'); ?></td>
                                             <td><?php echo number_format($d['penyaluran'],0,',','.'); ?></td>
                                             <td><?php echo number_format($d['penyaluran']/$d['alokasi']*100,2);?> %</td>
                                             <td><?php echo number_format($d['pencairan'],0,',','.'); ?></td>
                                             <td><?php echo number_format($d['pencairan']/$d['penyaluran']*100,2);?>%</td>
                                        </tr>
                                        <?php 
                                   }
                                   ?>
                                   <tr style="border:1px solid black;">
                                        <td>Total</td>
                                        <td> 17.927.308</td>
                                        <td> 11.848.905</td>
                                        <td> 66.09%</td>
                                        <td> 9.633.306</td>
                                        <td> 81.30%</td>
                                   </tr>
                              </tbody>
                         </table>
                         <br>
                         <div id="barchart_material_data2017"></div>
                         <table class="tabel" width="900px" style="border:1px solid black;">
                              
                              <thead style="border:1px solid black;">
                                   <tr style="border:1px solid black;"> 
                                        <th>Jenjang</th>
                                        <th>Alokasi</th>
                                        <th>Penyaluran</th>
                                        <th>%</th>
                                        <th>Pencairan</th>
                                        <th>%</th>
                                   </tr>
                              </thead>
                              <tbody style="border:1px solid black;">
                                   <?php 
                                   $no = 1;
                                   $data = mysqli_query($koneksi,"select * from data2017");
                                   while($d=mysqli_fetch_array($data)){
                                        ?>
                                        <tr>
                                             <td><?php echo $d['jenjang']; ?></td>
                                             <td><?php echo number_format($d['alokasi'],0,',','.'); ?></td>
                                             <td><?php echo number_format($d['penyaluran'],0,',','.'); ?></td>
                                             <td><?php echo number_format($d['penyaluran']/$d['alokasi']*100,2);?> %</td>
                                             <td><?php echo number_format($d['pencairan'],0,',','.'); ?></td>
                                             <td><?php echo number_format($d['pencairan']/$d['penyaluran']*100,2);?>%</td>
                                        </tr>
                                        <?php 
                                   }
                                   ?>
                                   <tr style="border:1px solid black;">
                                        <td>Total</td>
                                        <td><?php ?> 17.927.308</td>
                                        <td> 11.848.905</td>
                                        <td> 66.09%</td>
                                        <td> 9.633.306</td>
                                        <td> 81.30%</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </body>
     </br>
     <footer>
          <p>Copyright &#169; 2018 Sistem Informasi Program Indonesia Pintar. All rights resered.</p>
          <p>Version 2.2.0</p>
     </footer>
</html>