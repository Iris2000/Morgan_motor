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
    }
    #car_search_input {
      background-color: #F4F4F4;
      height: 30px;
      font-family: "gill-sans-nova", Sans-serif;
      width: 20%;
      border: 0;
      padding: 10px 20px;
      float: right;
      margin-right: 150px;
      font-size: 12px;
    }
    #search {
      background-color: #606060;
      height: 30px;
      font-family: "gill-sans-nova", Sans-serif;
      width: 7%;
      text-align: center;
    }
    .search-btn {
      color: white;
      display: flex;
      right: 65px;
      border: none;
      cursor: pointer;
      font-size: 12px;
    }
    input[type=text]:focus, textarea:focus {
      outline: none;
      box-shadow: 0 0 5px black;
    }
</style>
<body>
  <?php
      //search for keyword
      if(isset($_POST['search-car'])){
          $keyword= $_POST['search-car'];
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
      <div class="col-xs-12" style="margin-bottom: 40px">
        <form id="car_search" action="cars.php" method="post">
          <input type="text" id="car_search_input" name="search_car" placeholder="<?php echo strtoupper($keyword) ?>">
          <button id="search" class="btn rounded-0 search-btn" type="submit" name="search-cars">Search</button>
        </form>
      </div>
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
                <div class="column" style="background-color:#704038; padding: 10px; height: 400px;">
                    <img src="images\<?php echo $img ?>" class="image" style="float:right;width: 650px;">
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
                    <div class="middle">
                      <div value="<?php echo $result['Cars_ID'] ?>" class="learn-more btn btn-outline-light">LEARN MORE</div>
                    </div>    
                </div>
                  
              <?php endif; ?>

              <?php if ($j%2!=0): ?>
                <div class="column" style="background-color:#232323; padding: 10px; height: 400px;">
                    <img src="images\<?php echo $img ?>" class="image" style="float:right;width: 650px;">
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
                    <div class="middle">
                      <div value="<?php echo $result['Cars_ID'] ?>" class="learn-more btn btn-outline-warning">LEARN MORE</div>
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
</body>
</html>
<?php include "footer.php" ?>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $("body").on('click','.learn-more',function() {
        var value = $(this).attr("value");
        $.post("detail.php",
              {button:value}, function(data) {
                // if (data == "Username or Password is incorrect") {
                //   $(".regMessage").html(
                //     '<div class="alert alert-info" role="alert">' +
                //       "Username or Password is incorrect" +
                //     '</div>');
                // } else if (data == "Successful") {
                //   window.location.replace("MainPage.php");
                // } 
              });
      });

    </script>

