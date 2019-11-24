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
?>
</div>
<p style="text-align: left; font-size: 20px;">RESULTS: <?php echo $count; ?> </p>
<?php foreach ($results as $result): ?>
<div class="column" style="background-color:#aaa;">
    <h2><?php echo $result['Name'];?></h2>
    <p><?php echo $result['Description'] ?></p>
</div>
<br>
<?php endforeach; ?>
</body>
</html>
