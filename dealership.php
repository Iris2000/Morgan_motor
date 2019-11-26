 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="css/dealership.css">

<?php
    include 'header.php';
    include 'DB.php';
?>
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
