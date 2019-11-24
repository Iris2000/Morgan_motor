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
<div class="result">
<?php
    // if(isset($_POST['submit-search'])){
    //     $search = mysqli_real_escape_string($conn, $_POST['search']);
    //     $sql = "SELECT * FROM cars WHERE LIKE '%search%' OR LIKE '%search%'";//to add the row name of db
    //     $result = mysqli_query($conn,$sql);
    //     $queryResult = mysqli_num_rows($result);
    //
    //     if($queryResult > 0){
    //
    //     }
    //     else{
    //         echo "Your search didn't match any data";
    //     }
    // }

    //Gonnie edit
        $keyword= $_POST['search'];
        $sqlCars = "SELECT * FROM cars"; //Get all data from cars tables
        $sqlSpecs= "SELECT * FROM specs";//Get all data from specs table
        $resCars=$conn->query($sqlCars);
        $resSpecs=$conn->query($sqlSpecs);

        //store into array
        $cars=array();
        $specs=array();
        $x=0;
        $y=0;
        while($row=$resCars->fetch_assoc()){
            $cars[$x]=$row;
            $x++;
        }
        while($row1=$resSpecs->fetch_assoc()){
            $specs[$y]=$row1;
            $y++;
        }
        $x--;
        $z=0;
        $results=array();
        while($x>=0){
          if (preg_grep("/$keyword*/i", $cars[$x]))
            {
              $results[$z]=$cars[$x];
              $z++;
            }
          $x--;
        }
        $count=count($results);
        $j=1;
?>
</div>
<div style="background-color: #fafafa;">
  <br><br>
  <p style="text-align: left; font-size: 20px; color: black;">RESULTS related with keyword '<?php echo $keyword ?>' : <?php echo $count;?> </p>
  <?php if ($count>0): ?>
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
        <?php $img="plus6.jpg"; ?>
      <?php endif; ?>
      <?php if ($result['Cars_ID']==5): ?>
        <?php $img="roadster.jpg"; ?>
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
  <?php if ($count<=0): ?>
      <h2 style="color:black;">No result found.. Try anothers keyword.</h2>
  <?php endif; ?>
</div>
</body>
</html>
