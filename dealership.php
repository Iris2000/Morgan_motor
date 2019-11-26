<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
    include 'header(new).php';
    include 'DB.php';
?>
<style>
    
    body {
      margin: 0;
      line-height: 1;
      font-family: "gill-sans-nova", sans-serif;
    }

    h1 {
      text-align: center;
      margin-top: 80px;
      font-size: 1.7rem;
    }

    h3 {
      font-size: 16px;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    #dealer_search, .dealer_search_submit {
      color: #fdfbf7;
      text-align: center;
      width: 100%;
      display: block;
      margin-top: 19px;
      font-size: 1.2rem;
      font-weight: 200;
      text-decoration: none;
    }

    #dealer_search_address {
      background-color: #F4F4F4;
      height: 50px;
      font-family: "Nunito Sans", Sans-serif;
      width: 50%;
      border: 0;
      padding: 10px 20px;
    }

    #search {
      background-color: #606060;
      height: 50px;
      font-family: "Nunito Sans", Sans-serif;
      width: 10%;
      float: none;
    }

    .col-md-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    .no-gutter {
      margin-left: 0;
      margin-right: 0;
    }

    .dealer-listing {
      padding-top: 25px;
      padding-bottom: 25px;
      display: flex;
      /* float: left; */
    }

    .dealer-listing-inner {
      background-color: #fdfbf7;
      color: #000000;
      min-height: 472px;
      font-size: 0.9rem;
      margin-bottom: 10px;
    }

    #map {
      vertical-align: middle;
      width: 100%;
    }

    .col-xs-8, .col-xs-4 {
      position: relative;
      min-height: 1px;
      padding-left: 15px;
      padding-right: 15px;
    }

    hr {
      border-color: #9a9a9a;
      width: 100%;
      margin: 10px 10px;
    }

    .dealer-listing-contact {
      text-align: right;
    }

    .btn-outline {
      border: 1px solid #000000;
      padding: 5px 10px;
      border-radius: 0;
      color: #000000;
      text-transform: uppercase;
      font-weight: 300;
      min-width: 160px;
      margin-top: 20px;
      font-size: 0.8rem;
      width: auto;
    }

    .listing {
      background-color: #5B646B;
    }
</style>
<body>
  <?php
    if(empty($_POST['search-dealer']) == false){
      $keyword= $_POST['search-dealer'];
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
          $keyword="Enter address or postcode";
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
  <div class="col-xs-12">
    <h1 class="dl-header">FIND A MORGAN DEALERSHIP</h1>
  <!-- </div> -->
    <!-- the form -->
    <div class="col-xs-12" style="margin-bottom: 40px">
      <form id="dealer_search" action="dealership.php" method="post">
        <input type="text" id="dealer_search_address" name="search-dealer" placeholder="<?php echo strtoupper($keyword) ?>">
        <button id="search" class="btn rounded-0" style="color: white" type="submit">Search</button>
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
                <h3>
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
                <p>
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
