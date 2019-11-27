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
      float:left;
      width:50%;
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

          <?php foreach ($resBs as $resB): ?>

            <div class="specs">
            <p style="font-size:30px;"><?php echo $resB['Type']?></p>
            <h3>Engine</h3>
            <p><?php echo $resB['Engine']?></p>
            <h3>Gearbox</h3>
            <p><?php echo $resB['Gearbox']?></p>
            <h3>Max Power</h3>
            <p><?php echo $resB['MaxPower']?></p>
            <h3>Max Torque</h3>
            <p><?php echo $resB['MaxTorque']?></p>
            <h3>Performance</h3>
            <p><?php echo $resB['Performance']?></p>
            <h3>Top Speed</h3>
            <p><?php echo $resB['TopSpeed']?></p>
            <h3>Combine MPG</h3>
            <p><?php echo $resB['CombinedMPG']?></p>
            <h3>Dry Weight</h3>
            <p><?php echo $resB['DryWeight']?></p>
            </div>
          <?php endforeach; ?>


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
      <?php endif; ?>

</body>
</html>
<?php include "footer.php" ?>
