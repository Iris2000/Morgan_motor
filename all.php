<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    include 'header(new).php';
    include 'DB.php';
?>
<style>
    h2{
      font-size: 40px;
      font-weight: 300;
      text-transform: uppercase;
      font-family: cursive;
      color: #ffffff;
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
      color: #ffffff;
    }
    body {
      margin: 0;
      line-height: 1;
      font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
  <?php
      //search for keyword
      if(isset($_POST['search-cars'])){
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
            $keyword="Morgan Cars";
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
    <div style="background-color: #fafafa;">
      <br><br>
      <p style="text-align: left; font-size: 20px; color: black;">RESULTS related with keyword '<?php echo $keyword ?>' : <?php echo $queryRows;?> </p>
      <form action="cars.php" method="post" style="float: right; background-color: transparent;">
        <input type="text" name="search" placeholder="<?php echo strtoupper($keyword) ?>" style="border-radius: 5px; width: 200px; height: 20px; top: 261px; right: 100px; position: absolute;">&nbsp
        <button type="submit" name= "search-cars" value="Go" style="border-radius: 5px; height:25px; width: 80px; top: 261px; right: 5px; position: absolute;">Go ..</button>
      </form>
      </div>
      <br>
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
                <div class="column" style="background-color:#704038; padding: 10px;">
                  <img src="images\<?php echo $img ?>" style="float:right;width: 650px;">
                  <h2><?php echo $result['Name'];?></h2>
                  <h3>Power</h3>
                  <p><?php echo $result['Powers']?></p>
                  <h3>Top Speed</h3>
                  <p><?php echo $result['Top_Speed']?></p>
                  <h3>0 - 100 km/h (0 - 62 mph)</h3>
                  <p><?php echo $result['kmh']?></p>
                  <h3>Combined CO2</h3>
                  <p><?php echo $result['Combine_CO2']?></p>
                  <h4><?php echo $result['Description']?></h4>
                </div>
              <?php endif; ?>

              <?php if ($j%2!=0): ?>
                <div class="column" style="background-color:#232323; padding: 10px;">
                    <img src="images\<?php echo $img ?>" style="float:right;width: 650px;">
                    <h2><?php echo $result['Name'];?></h2>
                    <h3>Power</h3>
                    <p><?php echo $result['Powers']?></p>
                    <h3>Top Speed</h3>
                    <p><?php echo $result['Top_Speed']?></p>
                    <h3>0 - 100 km/h (0 - 62 mph)</h3>
                    <p><?php echo $result['kmh']?></p>
                    <h3>Combined CO2</h3>
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
</div>
</body>
</html>
<?php include "footer.php" ?>
