<!DOCTYPE html>
<html>
     <head>
          <meta>
          <title>Sipintar</title>
          <?php 
          include 'koneksi.php';
          ?>
          <link rel="stylesheet" href="css/style.css">
          <link 
          rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
          crossorigin="anonymous">
          <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
          <script src="https://kit.fontawesome.com/a076d05399.js"></script>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
          <header class="header">
               <div>
                    <div class="sipintar ">
                         <img src="images/Logo.jpg" width="50px">&nbsp Sipintar
                    </div>
                    <div class="login ">
                         <a class="btn btn-warning" href="#" type="button">Login</a>
                    </div>
               </div>
          </header>
     </head>
     <body>
          
          <input type="checkbox" id="check">
          <label for="check">
               <i class="fas fa-caret-right" id="btn"></i>
               <i class="fas fa-caret-left" id="cancel"></i>
          </label>
          <div class="sidebar">
               <!-- <li><a href="#"><i class="fas fa-qrcode">Perkembangan Pencairan</i></a></li> -->
               <ul>
                    <li><a href="#">Perkembangan Pencairan &nbsp <i class="fas fa-angle-down"></i></a></li>
                    <li><a href="#">Penyaluran Dana PIP 2018 &nbsp <i class="fas fa-angle-down">
                         <!-- <li>1</li>
                         <li>2</li>
                         <li>3</li> -->
                    </i></a></li>
                    <li><a href="#">Penyaluran Dana PIP 2017 &nbsp<i class="fas fa-angle-down"></i></a></li>
                    <li><a href="#">Penyaluran Dana PIP 2016 &nbsp<i class="fas fa-angle-down"></i></a></li>
                    <li><a href="#">Penyaluran Dana PIP 2015 &nbsp<i class="fas fa-angle-down"></i></a></li>
                    
               </ul>
          </div>
          <div class="grafik">
          <div id="barchart_material" style="width: 900px; height: 500px;"></div>
          <table border="1" class="data">
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
          <section>
               
          </section>
          
     </body>
</html>