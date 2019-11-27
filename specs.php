<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
    include 'header.php';
    include 'DB.php';
?>
<style>
    h2{
      font-size: 30px;
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
      transform: translate(-50%, -450%);
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
      color: #ffffff;
    }
    h4{
      font-size: 15px;
      font-weight: normal;
      font-style: oblique;
      color: #ffffff;
    }
    p{
      font-size: 12px;
      font-weight: normal;
      font-style: oblique;
      color: #00ff1f;
      padding-left: 10px;

    }
    body {
      margin: 0;
      line-height: 1;
      font-family: sans-serif, Helvetica;
    }
    .textformat {
      float: left;
      width: 25%;
    }
</style>
<body>
  <?php
      //search for keyword
      if(isset($_POST['search-specs'])){
          $keyword= $_POST['search'];
          $search = mysqli_real_escape_string($conn, $keyword);
          $sql = "SELECT * FROM specs WHERE Type LIKE '%$search%' OR Cars_ID LIKE '%$search%' OR Engine LIKE '%$search%'
          OR Gearbox LIKE '%$search%' OR MaxPower LIKE '%$search%' OR MaxTorque LIKE '%$search%' OR Performance LIKE '%$search%'
          OR TopSpeed LIKE '%$search%' OR CombinedMPG LIKE '%$search%' OR DryWeight LIKE '%$search%' OR ListPrice LIKE '%$search%'
          OR VAT LIKE '%$search%' OR ListPriceIncVAT LIKE '%$search%'";//to add the row name of db
          $rows = mysqli_query($conn,$sql);
          $queryRows = mysqli_num_rows($rows);

          if($queryRows > 0){
              $results=array();
              $countResults=0;
              while($row = mysqli_fetch_assoc($rows)){
                  $results[$countResults]=$row;
                  $countResults++;
              }
          }
      }
      else{
            $keyword="Morgan Specifications";
            $sql="SELECT * FROM specs";
            $rows = mysqli_query($conn,$sql);
            $queryRows = mysqli_num_rows($rows);
            if($queryRows > 0){
                $results=array();
                $countResults=0;
                while($row = mysqli_fetch_assoc($rows)){
                    $results[$countResults]=$row;
                    $countResults++;
                }
            }
      }
      $j=1;
    ?>
    <div style="background-color: #fafafa;">
      <br><br>
      <p style="text-align: left; font-size: 20px; color: black;">RESULTS related with keyword '<?php echo $keyword ?>' : <?php echo $queryRows;?> </p>
      <div class="col-xs-12" style="margin-bottom: 40px">
        <form id="car_search" action="specs.php" method="post">
          <input type="text" id="car_search_input" name="search_car" placeholder="<?php echo strtoupper($keyword) ?>">
          <button id="search" class="btn rounded-0 search-btn" type="submit" name="search-specs">Search</button>
        </form>
      </div>
    </div>
      <br>
      <?php if ($queryRows>0): ?>
        <?php foreach ($results as $result): ?>
              <?php if ($result['Cars_ID']==1): ?>
                <?php $name="3 Wheel"; $img="3wheel.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==2): ?>
                <?php $name="4/4"; $img="44.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==3): ?>
                <?php $name="Plus 4"; $img="plus4.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==4): ?>
                <?php $name="Roadster"; $img="roadster.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==5): ?>
                <?php $name="Plus 6"; $img="plus6.jpg"; ?>
              <?php endif; ?>
              <?php
                if ($result['Type']!= null){
                  $type=": ".$result['Type'];
                }
                else{
                  $type=null;
                }

              ?>
              <?php if ($j%2==0): ?>
                <div class="column" style="background-color:#704038; padding: 10px; height: 450px;">
                    <img src="images\<?php echo $img ?>" class="image" style="float:right;width: 650px;">
                      <h3>Engine</h3>
                      <p><?php echo $result['Engine']?></p>
                      <h3>Gearbox</h3>
                      <p><?php echo $result['Gearbox']?></p>
                      <h3>Max Power</h3>
                      <p><?php echo $result['MaxPower']?></p>
                      <h3>Max Torque</h3>
                      <p><?php echo $result['MaxTorque']?></p>
                      <h3>Performance</h3>
                      <p><?php echo $result['Performance']?></p>
                      <h3>Top Speed</h3>
                      <p><?php echo $result['TopSpeed']?></p>
                      <h3>Combine MPG</h3>
                      <p><?php echo $result['CombinedMPG']?></p>
                      <h3>Dry Weight</h3><h2 style="float:right;"><?php echo $name.$type;?></h2>
                      <p><?php echo $result['DryWeight']?></p>
                      <div class="middle">
                        <div class="learn-more btn btn-outline-light">LEARN MORE</div>
                      </div>   
                </div>
              <?php endif; ?>

              <?php if ($j%2!=0): ?>
                <div class="column" style="background-color:#232323; padding: 10px; height: 450px;">
                    <img src="images\<?php echo $img ?>" class="image" style="float:right;width: 650px;">
                      <h3>Engine</h3>
                      <p><?php echo $result['Engine']?></p>
                      <h3>Gearbox</h3>
                      <p><?php echo $result['Gearbox']?></p>
                      <h3>Max Power</h3>
                      <p><?php echo $result['MaxPower']?></p>
                      <h3>Max Torque</h3>
                      <p><?php echo $result['MaxTorque']?></p>
                      <h3>Performance</h3>
                      <p><?php echo $result['Performance']?></p>
                      <h3>Top Speed</h3>
                      <p><?php echo $result['TopSpeed']?></p>
                      <h3>Combine MPG</h3>
                      <p><?php echo $result['CombinedMPG']?></p>
                      <h3>Dry Weight</h3><h2 style="float:right;"><?php echo $name.$type;?></h2>
                      <p><?php echo $result['DryWeight']?></p>
                      <div class="middle">
                        <div class="learn-more btn btn-outline-warning">LEARN MORE</div>
                      </div>   
                </div>
              <?php endif; ?>

              <br><br><br><br><br>
              <?php $j++;?>
        <?php endforeach; ?>
        <br>
      <?php endif; ?>
      <?php if ($queryRows<=0): ?>
          <h2 style="color:black;">No result found.. Try anothers keyword.</h2>
      <?php endif; ?>
    </div>
</div>
</body>
</html>
<?php include "footer.php" ?>
