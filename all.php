 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/dealership.css">
<?php
    include 'header.php';
    include 'DB.php';
?>
<style>
  .head{
      background-color: #7e4043;
      height:5px;
  }

  h1 {
    margin-top: 0;
  }

  h2{
    font-size: 40px;
    font-weight: 300;
    text-transform: uppercase;
    font-family: cursive;
    color: #ffffff;
  }

  .car_h3{
    font-size: 15px;
    font-weight: bold;
    font-style: oblique;
    color: #ffb500;
  }

  h4{
    font-size: 15px;
    font-weight: normal;
    font-style: oblique;
    color: #ffb500;
  }

  p{
    font-size: 12px;
    font-weight: normal;
    font-style: oblique;
    color: #ffffff;
  }

  body {
    margin: 0;
    line-height: 1;
    font-family: Sans-serif, Arial, Helvetica;
  }

  #car_search_input, #spec_search_input, #dealer_search_address {
    background-color: #F4F4F4;
    height: 30px;
    font-family: "gill-sans-nova", Sans-serif;
    width: 20%;
    border: 0;
    padding: 10px 20px;
    float: left;
    margin-left: 20px;
    font-size: 12px;
  }

  #search {
    background-color: #606060;
    height: 30px;
    font-family: "gill-sans-nova", Sans-serif;
    width: 7%;
    text-align: center;
  }

  .dl-header {
    font-size: 20px;
    text-align: left;
    padding-left: 20px;
  }

  form {
    text-align: left;
  }

  input[type=text]:focus, textarea:focus {
    outline: none;
    box-shadow: 0 0 5px black;
  }
  
  .search-btn {
    color: white;
    display: flex;
    left: 252px;
    border: none;
    cursor: pointer;
    font-size: 12px;
  }

  .dealer_h3 {
    style: none;
    font-family: sans-serif;
    color: black;
    font-size: 16px;
    margin-top: 20px;
    margin-bottom: 10px;
    font-weight: 500;
  }

</style>
<body>
  <?php
      //search for keyword in cars
      if(isset($_POST['search'])){
          $keyword= $_POST['search'];
          $search = mysqli_real_escape_string($conn, $keyword);
          $sql = "SELECT * FROM cars WHERE Name LIKE '%$search%' OR Powers LIKE '%$search%' OR Top_Speed LIKE '%$search%'
          OR kmh LIKE '%$search%' OR Combine_CO2 LIKE '%$search%' OR Description LIKE '%$search%'";//to add the row name of db
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
            $keyword="Search a Morgan Car";
            $sql="SELECT * FROM cars";
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
    
    <br>
    <div class="col-xs-12" style="padding-bottom: 30px;">
    <h1 class="dl-header">FIND A MORGAN CAR</h1>
    <div class="col-xs-12" style="margin-bottom: 40px">
      <form id="car_search" action="cars.php" method="post">
        <input type="text" id="car_search_input" name="search_car" placeholder="<?php echo strtoupper($keyword) ?>">
        <button id="search" class="btn rounded-0 search-btn" type="submit" name="search-cars">Search</button>
      </form>
    </div>
  </div>

      <?php if ($queryRows>0): ?>
        <?php foreach ($results as $result): ?>
              <?php if ($result['Cars_ID']==1): ?>
                <?php $img="3wheel.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==2): ?>
                <?php $img="44.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==3): ?>
                <?php $img="plus4.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==4): ?>
                <?php $img="roadster.jpg"; ?>
              <?php endif; ?>

              <?php if ($result['Cars_ID']==5): ?>
                <?php $img="plus6.jpg"; ?>
              <?php endif; ?>

              <?php if ($j%2==0): ?>
                <div class="column" style="background-color:#704038; padding: 10px; height: 400px;">
                  <img src="images\<?php echo $img ?>" style="float:right;width: 650px;">
                  <h2><?php echo $result['Name'];?></h2>
                  <h3 class="car_h3">Power</h3>
                  <p><?php echo $result['Powers']?></p>
                  <h3 class="car_h3">Top Speed</h3>
                  <p><?php echo $result['Top_Speed']?></p>
                  <h3 class="car_h3">0 - 100 km/h (0 - 62 mph)</h3>
                  <p><?php echo $result['kmh']?></p>
                  <h3 class="car_h3">Combined CO2</h3>
                  <p><?php echo $result['Combine_CO2']?></p>
                  <h4><?php echo $result['Description']?></h4>
                </div>
              <?php endif; ?>

              <?php if ($j%2!=0): ?>
                <div class="column" style="background-color:#232323; padding: 10px; height: 400px;">
                    <img src="images\<?php echo $img ?>" style="float:right;width: 650px;">
                    <h2><?php echo $result['Name'];?></h2>
                    <h3 class="car_h3">Power</h3>
                    <p><?php echo $result['Powers']?></p>
                    <h3 class="car_h3">Top Speed</h3>
                    <p><?php echo $result['Top_Speed']?></p>
                    <h3 class="car_h3">0 - 100 km/h (0 - 62 mph)</h3>
                    <p><?php echo $result['kmh']?></p>
                    <h3 class="car_h3">Combined CO2</h3>
                    <p><?php echo $result['Combine_CO2']?></p>
                    <h4><?php echo $result['Description']?></h4>
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

<?php
    //search for keyword in specs
    if(isset($_POST['search'])){
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
          $keyword="Search a Morgan Spec";
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
  
  <div class="col-xs-12" style="padding-bottom: 30px;">
    <h1 class="dl-header">FIND A MORGAN SPEC</h1>
    <div class="col-xs-12" style="margin-bottom: 40px">
      <form id="spec_search" action="spec.php" method="post">
        <input type="text" id="spec_search_input" name="search_spec" placeholder="<?php echo strtoupper($keyword) ?>">
        <button id="search" class="btn rounded-0 search-btn" type="submit" name="search-spec">Search</button>
      </form>
    </div>
  </div>

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
              <div class="column" style="background-color:#704038; padding: 10px;">
                  <img src="images\<?php echo $img ?>" style="float:right;width: 650px;">
                    <h3 class="car_h3">Engine</h3>
                    <p><?php echo $result['Engine']?></p>
                    <h3 class="car_h3">Gearbox</h3>
                    <p><?php echo $result['Gearbox']?></p>
                    <h3 class="car_h3">Max Power</h3>
                    <p><?php echo $result['MaxPower']?></p>
                    <h3 class="car_h3">Max Torque</h3>
                    <p><?php echo $result['MaxTorque']?></p>
                    <h3 class="car_h3">Performance</h3>
                    <p><?php echo $result['Performance']?></p>
                    <h3 class="car_h3">Top Speed</h3>
                    <p><?php echo $result['TopSpeed']?></p>
                    <h3 class="car_h3">Combine MPG</h3><h2 style="float:right;"><?php echo $name.$type;?></h2>
                    <p><?php echo $result['CombinedMPG']?></p>
                    <h3 class="car_h3">Dry Weight</h3>
                    <p><?php echo $result['DryWeight']?></p>
              </div>
            <?php endif; ?>

            <?php if ($j%2!=0): ?>
              <div class="column" style="background-color:#232323; padding: 10px;">
                  <img src="images\<?php echo $img ?>" style="float:right;width: 650px;">
                    <h3 class="car_h3">Engine</h3>
                    <p><?php echo $result['Engine']?></p>
                    <h3 class="car_h3">Gearbox</h3>
                    <p><?php echo $result['Gearbox']?></p>
                    <h3 class="car_h3">Max Power</h3>
                    <p><?php echo $result['MaxPower']?></p>
                    <h3 class="car_h3">Max Torque</h3>
                    <p><?php echo $result['MaxTorque']?></p>
                    <h3 class="car_h3">Performance</h3>
                    <p><?php echo $result['Performance']?></p>
                    <h3 class="car_h3">Top Speed</h3>
                    <p><?php echo $result['TopSpeed']?></p>
                    <h3 class="car_h3">Combine MPG</h3><h2 style="float:right;"><?php echo $name.$type;?></h2>
                    <p><?php echo $result['CombinedMPG']?></p>
                    <h3 class="car_h3">Dry Weight</h3>
                    <p><?php echo $result['DryWeight']?></p>
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

<!-- search dealer-->
<?php
    if(empty($_POST['search']) == false){
      $keyword= $_POST['search'];
      $search = mysqli_real_escape_string($conn, $keyword);
      $sql = "SELECT * FROM dealer WHERE Title LIKE '%$search%' OR Team LIKE '%$search%' OR Name LIKE '%$search%'
      OR Address1 LIKE '%$search%' OR Address2 LIKE '%$search%' OR Postcode LIKE '%$search%' OR State LIKE '%$search%'
      OR Country LIKE '%$search%' OR Tele LIKE '%$search%'"; //to add the row name of db
      $rows = mysqli_query($conn,$sql);
      $queryRows = mysqli_num_rows($rows);

      if($queryRows > 0){
          $results = array();
          $countResults = 0;
          while($row = mysqli_fetch_assoc($rows)){
              $results[$countResults] = $row;
              $countResults++;
          }
      }
    }
    else{
          $keyword="Enter address / postcode";
          $sql="SELECT * FROM dealer";
          $rows = mysqli_query($conn,$sql);
          $queryRows = mysqli_num_rows($rows);
          if($queryRows > 0){
              $results = array();
              $countResults = 0;
              while($row = mysqli_fetch_assoc($rows)){
                  $results[$countResults] = $row;
                  $countResults++;
              }
          }
    }
  ?>

  <div class="col-xs-12" style="padding-bottom: 30px;">
    <h1 class="dl-header">FIND A MORGAN DEALERSHIP</h1>
    <div class="col-xs-12" style="margin-bottom: 40px">
      <form id="dealer_search" action="dealership.php" method="post">
        <input type="text" id="dealer_search_address" name="search-dealer" placeholder="<?php echo strtoupper($keyword) ?>">
        <button id="search" class="btn rounded-0 search-btn" type="submit">Search</button>
      </form>
    </div>
  </div>
 
  <!-- results -->
  <div class="listing"> 
    <?php if ($queryRows > 0): ?>
      <?php foreach ($results as $result): ?>
        <div class="dealer-listing col-md-6 col-lg-4 dealer_closest">
          <div class="dealer-listing-inner">
            <div class="row no-gutter">
              <img id="map" src="<?php echo $result["Src"]; ?>">
            </div>
            <div class="row no-gutter">
              <div class="col-xs-8">
                <h3 class="dealer_h3">
                  <?php echo $result["Title"]; ?>
                  <br>
                  <?php echo $result["Team"]; ?>
                </h3>
              </div>
              <div class="col-xs-4" style="width: 33.33%;"></div>
              <hr>
            </div>
            <div class="row no-gutter dealer-listing-details">
              <div class="col-sm-6">
                <p style="font-family: sans-serif; font-style: normal; color: black; font-size: 14.4px;">
                <?php echo $result["Name"]; ?>
                <br>
                <?php echo $result["Address1"]; ?>
                <br>
                <?php if ($result["Address2"] !== "") : ?>
                  <?php echo $result["Address2"]; ?>
                  <br>
                <?php endif; ?>
                <?php echo $result["Postcode"]; ?>
                <br>
                <?php echo $result["State"]; ?>
                <br>
                <?php echo $result["Country"]; ?>
              </p>
              </div>
              <div class="col-sm-6">
                <div class="dealer-listing-contact">
                  <a href="tel:<?php echo $result["Tele"]?>" style="color: black;"><?php echo $result["Tele"]?></a>
                  <a href="<?php echo $result["Website"]?>" class="btn btn-outline dealer-listing-details-btn">Visit Website</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</body>
</html>
<?php include "footer.php" ?>
