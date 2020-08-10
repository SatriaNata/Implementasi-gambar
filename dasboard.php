<!DOCTYPE html>
<html>
     <?php 
     include 'koneksi.php';
     include 'Chart.php';
     ?>
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <title>Sipintar</title>
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
          crossorigin="anonymous">
          <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     </head>
     <body>
          <header>
               <div class="container-fluid bg-light">
                    <div class="row justify-content-between">
                         <div class="col-md-12">
                              <!-- <div class="bg-primary"> -->
                                   <div class="sipintar">
                                        <img src="images/Logo.jpg" width="50px">&nbsp Sipintar
                                   </div>
                                   <div class="login">
                                        <a class="btn btn-warning" href="dasboardLogin.php" type="button">Login</a>
                                   <!-- </div> -->
                              </div>
                         </div>
                    </div>
               </div>
          </header>
          <div class="container-fluid bg-light">
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
                    </div>
                    <div class="col-9">
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
          </div>
     </body>
     <footer>
          <p>Copyright &#169; 2018 Sistem Informasi Program Indonesia Pintar. All rights resered.</p>
          <p>Version 2.2.0</p>
     </footer>
</html>