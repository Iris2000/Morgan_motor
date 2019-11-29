<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
    include 'header.php';
    include 'DB.php';
?>
<style>
    h2 {
      font-size: 40px;
      font-weight: 300;
      text-transform: uppercase;
      font-family: georgia;
      color: #ffffff;
    }
    .column {
      opacity: 1;
      display: block;
      width: -webkit-fill-available;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
    }
    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      left: 50%;
      transform: translate(-50%, -300%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }
    .column:hover .middle {
      opacity: 1;
    }
    .learn-more {
      font-size: 16px;
      padding: 16px 32px;
    }
    h3{
      font-size: 15px;
      font-weight: bold;
      font-style: oblique;
      color: #ffb500;
    }
    h4{
      font-size: 16px;
      font-weight: normal;
      font-style: oblique;
      color: #ffb500;
    }
    p{
      font-size: 12px;
      font-weight: normal;
      font-style: oblique;
      color: #ffffff;
      padding-left: 10px;
    }
    body {
      margin: 0;
      line-height: 1;
      font-family: sans-serif, Helvetica;
      background-color: #232323;
    }
    .coverpicture{
      float:right;
      width: 50%;
    }
    .specs{
      background-color: #a60e0e;
    }
    table {
      border-radius: 1em;
      overflow: hidden;
    }

    th, td {
      padding: 1em;
    }
</style>
<body>
  <?php
      $detail = $_POST['button'];
  ?>
      <?php if ($detail == '5'): ?>
      <?php  $sqlA = "SELECT * FROM cars WHERE (Cars_ID=5)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=5)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){

                $resAs=$rowA;
            }
        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){

                $resBs[$counterB]=$rowB;
                $counterB++;
            }
        }
        ?>
        <img src="images/Plus6_logo.png" style="float: left; margin-bottom: 30px; padding: 30px;">
        <img class="coverpicture" src="images/plus6.jpg">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h3>Power</h3>
        <p><?php echo $resAs['Powers']?></p>
        <h3>Top Speed</h3>
        <p><?php echo $resAs['Top_Speed']?></p>
        <h3>0 - 100 km/h (0 - 62 mph)</h3>
        <p><?php echo $resAs['kmh']?></p>
        <h3>Combined CO2</h3>
        <p><?php echo $resAs['Combine_CO2']?></p>
        <h4><?php echo $resAs['Description']?></h4>
        <br><br><br>

            <div class="table-responsive">
              <table class="table" align="center" style="width: 1500px; text-align: center; margin-top: 30px; margin-bottom: 30px; text-transform: uppercase;">
                <thead style="font-family: 'Nunito Sans'; font-weight: 300; background-color: black; color: #8b4513;">
                  <tr>
                    <th>Type</th>
                    <th>Engine</th>
                    <th>Gearbox</th>
                    <th>Max Power</th>
                    <th>Max Torque</th>
                    <th>Performance</th>
                    <th>Top Speed</th>
                    <th>Combine MPG</th>
                    <th>Dry Weight</th>
                    <th>List Price</th>
                    <th>VAT</th>
                    <th>List Price Inc VAT</th>
                  </tr>
                </thead>
                <?php $row=1; ?>
                <?php foreach ($resBs as $resB): ?>
                  <?php if ($row%2==0): ?>
                    <tbody style="background-color: #bbbbbb; color: #182928; font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                  <?php endif; ?>
                <?php if ($row%2!=0): ?>
                  <tbody style="background-color: #fdfbf7; color: #182928;font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                <?php endif; ?>
                  <tr>
                    <td><?php echo $resB['Type']?></td>
                    <td><?php echo $resB['Engine']?></td>
                    <td><?php echo $resB['Gearbox']?></td>
                    <td><?php echo $resB['MaxPower']?></td>
                    <td><?php echo $resB['MaxTorque']?></td>
                    <td><?php echo $resB['Performance']?></td>
                    <td><?php echo $resB['TopSpeed']?></td>
                    <td><?php echo $resB['CombinedMPG']?></td>
                    <td><?php echo $resB['DryWeight']?></td>
                    <td><?php echo $resB['ListPrice'] ?></td>
                    <td><?php echo $resB['VAT'] ?></td>
                    <td><?php echo $resB['ListPriceIncVAT'] ?></td>
                  </tr>
                </tbody>
                <?php $row++; ?>
                <?php endforeach; ?>
              </table>
            </div>
      <?php endif; ?>


      <?php if ($detail == '4'): ?>
        <?php $sqlA = "SELECT * FROM cars WHERE (Cars_ID=4)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=4)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){

                $resAs=$rowA;
            }

        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){

                $resBs[$counterB]=$rowB;
                $counterB++;
            }

        }
        print_r ($resAs);
        echo "<br><br>";
        print_r ($resBs);
        ?>

        <img src="https://www.morgan-motor.com/wp-content/uploads/2019/05/roadsterlogo-white.png" style="float: left; margin-bottom: 30px; padding: 30px;">
        <img class="coverpicture" src="images/roadster.jpg">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h3>Power</h3>
        <p><?php echo $resAs['Powers']?></p>
        <h3>Top Speed</h3>
        <p><?php echo $resAs['Top_Speed']?></p>
        <h3>0 - 100 km/h (0 - 62 mph)</h3>
        <p><?php echo $resAs['kmh']?></p>
        <h3>Combined CO2</h3>
        <p><?php echo $resAs['Combine_CO2']?></p>
        <h4><?php echo $resAs['Description']?></h4>
        <br><br><br>

            <div class="table-responsive">
              <table class="table" align="center" style="width: 1500px; text-align: center; margin-top: 30px; margin-bottom: 30px; text-transform: uppercase;">
                <thead style="font-family: 'Nunito Sans'; font-weight: 300; background-color: black; color: #8b4513;">
                  <tr>
                    <th>Engine</th>
                    <th>Gearbox</th>
                    <th>Max Power</th>
                    <th>Max Torque</th>
                    <th>Performance</th>
                    <th>Top Speed</th>
                    <th>Combine MPG</th>
                    <th>Dry Weight</th>
                    <th>List Price</th>
                    <th>VAT</th>
                    <th>List Price Inc VAT</th>
                  </tr>
                 </thead>
                <?php $row=1; ?>
                <?php foreach ($resBs as $resB): ?>
                  <?php if ($row%2==0): ?>
                    <tbody style="background-color: #bbbbbb; color: #182928; font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                  <?php endif; ?>
                <?php if ($row%2!=0): ?>
                  <tbody style="background-color: #fdfbf7; color: #182928;font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                <?php endif; ?>
                  <tr>
                    <td><?php echo $resB['Engine']?></td>
                    <td><?php echo $resB['Gearbox']?></td>
                    <td><?php echo $resB['MaxPower']?></td>
                    <td><?php echo $resB['MaxTorque']?></td>
                    <td><?php echo $resB['Performance']?></td>
                    <td><?php echo $resB['TopSpeed']?></td>
                    <td><?php echo $resB['CombinedMPG']?></td>
                    <td><?php echo $resB['DryWeight']?></td>
                    <td><?php echo $resB['ListPrice'] ?></td>
                    <td><?php echo $resB['VAT'] ?></td>
                    <td><?php echo $resB['ListPriceIncVAT'] ?></td>
                  </tr>
                </tbody>

                <?php $row++; ?>
                <?php endforeach; ?>
              </table>
            </div>
      <?php endif; ?>


      <?php if ($detail == '3'): ?>
        <?php
            $sqlA = "SELECT * FROM cars WHERE (Cars_ID=3)";//table name
            $resultA = mysqli_query($conn, $sqlA);
            $queryResultsA = mysqli_num_rows($resultA);
            $sqlB = "SELECT * FROM specs WHERE (Cars_ID=3)";//table name
            $resultB = mysqli_query($conn, $sqlB);
            $queryResultsB = mysqli_num_rows($resultB);

            if($queryResultsA > 0){
                $resAs=array();

                while($rowA = mysqli_fetch_assoc($resultA)){

                    $resAs=$rowA;
                }

            }
            if($queryResultsB > 0){
                $resBs=array();
                $counterB=0;

                while($rowB = mysqli_fetch_assoc($resultB)){

                    $resBs[$counterB]=$rowB;
                    $counterB++;
                }

            }
            print_r ($resAs);
            echo "<br><br>";
            print_r ($resBs);
            ?>
            <img src="https://www.morgan-motor.com/wp-content/uploads/2019/05/44logo-white.png" style="float: left; margin-bottom: 30px; padding: 30px;">
            <img class="coverpicture" src="images/plus4.jpg">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h3>Power</h3>
            <p><?php echo $resAs['Powers']?></p>
            <h3>Top Speed</h3>
            <p><?php echo $resAs['Top_Speed']?></p>
            <h3>0 - 100 km/h (0 - 62 mph)</h3>
            <p><?php echo $resAs['kmh']?></p>
            <h3>Combined CO2</h3>
            <p><?php echo $resAs['Combine_CO2']?></p>
            <h4><?php echo $resAs['Description']?></h4>
            <br><br><br>

                <div class="table-responsive">
                  <table class="table" align="center" style="width: 1500px; text-align: center; margin-top: 30px; margin-bottom: 30px; text-transform: uppercase;">
                    <thead style="font-family: 'Nunito Sans'; font-weight: 300; background-color: black; color: #8b4513;">
                      <tr>
                        <th>Engine</th>
                        <th>Gearbox</th>
                        <th>Max Power</th>
                        <th>Max Torque</th>
                        <th>Performance</th>
                        <th>Top Speed</th>
                        <th>Combine MPG</th>
                        <th>Dry Weight</th>
                        <th>List Price</th>
                        <th>VAT</th>
                        <th>List Price Inc VAT</th>
                      </tr>
                     </thead>
                    <?php $row=1; ?>
                    <?php foreach ($resBs as $resB): ?>
                      <?php if ($row%2==0): ?>
                        <tbody style="background-color: #bbbbbb; color: #182928; font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                      <?php endif; ?>
                    <?php if ($row%2!=0): ?>
                      <tbody style="background-color: #fdfbf7; color: #182928;font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                    <?php endif; ?>
                      <tr>
                        <td><?php echo $resB['Engine']?></td>
                        <td><?php echo $resB['Gearbox']?></td>
                        <td><?php echo $resB['MaxPower']?></td>
                        <td><?php echo $resB['MaxTorque']?></td>
                        <td><?php echo $resB['Performance']?></td>
                        <td><?php echo $resB['TopSpeed']?></td>
                        <td><?php echo $resB['CombinedMPG']?></td>
                        <td><?php echo $resB['DryWeight']?></td>
                        <td><?php echo $resB['ListPrice'] ?></td>
                        <td><?php echo $resB['VAT'] ?></td>
                        <td><?php echo $resB['ListPriceIncVAT'] ?></td>
                      </tr>
                    </tbody>

                   <?php $row++; ?>
                    <?php endforeach; ?>
                  </table>
                </div>
      <?php endif; ?>

      <?php if ($detail== '2'): ?>
        <?php $sqlA = "SELECT * FROM cars WHERE (Cars_ID=2)";//table name
        $resultA = mysqli_query($conn, $sqlA);
        $queryResultsA = mysqli_num_rows($resultA);
        $sqlB = "SELECT * FROM specs WHERE (Cars_ID=2)";//table name
        $resultB = mysqli_query($conn, $sqlB);
        $queryResultsB = mysqli_num_rows($resultB);

        if($queryResultsA > 0){
            $resAs=array();

            while($rowA = mysqli_fetch_assoc($resultA)){

                $resAs=$rowA;
            }

        }
        if($queryResultsB > 0){
            $resBs=array();
            $counterB=0;

            while($rowB = mysqli_fetch_assoc($resultB)){

                $resBs[$counterB]=$rowB;
                $counterB++;
            }

        }
        print_r ($resAs);
        echo "<br><br>";
        print_r ($resBs);
        ?>
        <img src="https://www.morgan-motor.com/wp-content/uploads/2019/04/44logo.png" style="float: left; margin-bottom: 30px; padding: 30px;">
        <img class="coverpicture" src="images/44.jpg">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h3>Power</h3>
        <p><?php echo $resAs['Powers']?></p>
        <h3>Top Speed</h3>
        <p><?php echo $resAs['Top_Speed']?></p>
        <h3>0 - 100 km/h (0 - 62 mph)</h3>
        <p><?php echo $resAs['kmh']?></p>
        <h3>Combined CO2</h3>
        <p><?php echo $resAs['Combine_CO2']?></p>
        <h4><?php echo $resAs['Description']?></h4>
        <br><br><br>

            <div class="table-responsive">
              <table class="table" align="center" style="width: 1500px; text-align: center; margin-top: 30px; margin-bottom: 30px; text-transform: uppercase;">
                <thead style="font-family: 'Nunito Sans'; font-weight: 300; background-color: black; color: #8b4513;">
                  <tr>
                    <th>Engine</th>
                    <th>Gearbox</th>
                    <th>Max Power</th>
                    <th>Max Torque</th>
                    <th>Performance</th>
                    <th>Top Speed</th>
                    <th>Combine MPG</th>
                    <th>Dry Weight</th>
                    <th>List Price</th>
                    <th>VAT</th>
                    <th>List Price Inc VAT</th>
                  </tr>
                </thead>
                <?php $row=1; ?>
                <?php foreach ($resBs as $resB): ?>
                  <?php if ($row%2==0): ?>
                    <tbody style="background-color: #bbbbbb; color: #182928; font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                  <?php endif; ?>
                <?php if ($row%2!=0): ?>
                  <tbody style="background-color: #fdfbf7; color: #182928;font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                <?php endif; ?>
                  <tr>
                    <td><?php echo $resB['Engine']?></td>
                    <td><?php echo $resB['Gearbox']?></td>
                    <td><?php echo $resB['MaxPower']?></td>
                    <td><?php echo $resB['MaxTorque']?></td>
                    <td><?php echo $resB['Performance']?></td>
                    <td><?php echo $resB['TopSpeed']?></td>
                    <td><?php echo $resB['CombinedMPG']?></td>
                    <td><?php echo $resB['DryWeight']?></td>
                    <td><?php echo $resB['ListPrice'] ?></td>
                    <td><?php echo $resB['VAT'] ?></td>
                    <td><?php echo $resB['ListPriceIncVAT'] ?></td>
                  </tr>
                </tbody>

                <?php $row++; ?>
                <?php endforeach; ?>
              </table>
            </div>
      <?php endif; ?>
      <?php if ($detail == '1'): ?>
        <?php
            $sqlA = "SELECT * FROM cars WHERE (Cars_ID=1)";//table name
            $resultA = mysqli_query($conn, $sqlA);
            $queryResultsA = mysqli_num_rows($resultA);
            $sqlB = "SELECT * FROM specs WHERE (Cars_ID=1)";//table name
            $resultB = mysqli_query($conn, $sqlB);
            $queryResultsB = mysqli_num_rows($resultB);

            if($queryResultsA > 0){
                $resAs=array();

                while($rowA = mysqli_fetch_assoc($resultA)){

                    $resAs=$rowA;
                }

            }
            if($queryResultsB > 0){
                $resBs=array();
                $counterB=0;

                while($rowB = mysqli_fetch_assoc($resultB)){

                    $resBs[$counterB]=$rowB;
                    $counterB++;
                }

            }
            print_r ($resAs);
            echo "<br><br>";
            print_r ($resBs);
            ?>
            <img src="https://www.morgan-motor.com/wp-content/uploads/2019/04/3wlogo.png" style="float: left; margin-bottom: 30px; padding: 30px;">
            <img class="coverpicture" src="images/3wheel.jpg">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <h3>Power</h3>
            <p><?php echo $resAs['Powers']?></p>
            <h3>Top Speed</h3>
            <p><?php echo $resAs['Top_Speed']?></p>
            <h3>0 - 100 km/h (0 - 62 mph)</h3>
            <p><?php echo $resAs['kmh']?></p>
            <h3>Combined CO2</h3>
            <p><?php echo $resAs['Combine_CO2']?></p>
            <h4><?php echo $resAs['Description']?></h4>
            <br><br><br>

                <div class="table-responsive">
                  <table class="table" align="center" style="width: 1500px; text-align: center; margin-top: 30px; margin-bottom: 30px; text-transform: uppercase;">
                    <thead style="font-family: 'Nunito Sans'; font-weight: 300; background-color: black; color: #8b4513;">
                      <tr>
                        <th>Type</th>
                        <th>Engine</th>
                        <th>Gearbox</th>
                        <th>Max Power</th>
                        <th>Max Torque</th>
                        <th>Performance</th>
                        <th>Top Speed</th>
                        <th>Combine MPG</th>
                        <th>Dry Weight</th>
                        <th>List Price</th>
                        <th>VAT</th>
                        <th>List Price Inc VAT</th>
                      </tr>
                    </thead>
                    <?php $row=1; ?>
                    <?php foreach ($resBs as $resB): ?>
                      <?php if ($row%2==0): ?>
                        <tbody style="background-color: #bbbbbb; color: #182928; font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                      <?php endif; ?>
                    <?php if ($row%2!=0): ?>
                      <tbody style="background-color: #fdfbf7; color: #182928;font-family: 'gill-sans-nova', 'sans-serif'; font-weight: 300; letter-spacing: 0.04em;">
                    <?php endif; ?>
                      <tr>
                        <td><?php echo $resB['Type']?></td>
                        <td><?php echo $resB['Engine']?></td>
                        <td><?php echo $resB['Gearbox']?></td>
                        <td><?php echo $resB['MaxPower']?></td>
                        <td><?php echo $resB['MaxTorque']?></td>
                        <td><?php echo $resB['Performance']?></td>
                        <td><?php echo $resB['TopSpeed']?></td>
                        <td><?php echo $resB['CombinedMPG']?></td>
                        <td><?php echo $resB['DryWeight']?></td>
                        <td><?php echo $resB['ListPrice'] ?></td>
                        <td><?php echo $resB['VAT'] ?></td>
                        <td><?php echo $resB['ListPriceIncVAT'] ?></td>
                      </tr>
                    </tbody>
                    <?php $row++; ?>
                    <?php endforeach; ?>
                  </table>
                </div>
      <?php endif; ?>

</body>
</html>
<?php include "footer.php" ?>
