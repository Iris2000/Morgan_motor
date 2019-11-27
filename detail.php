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
    img{
      text-align:right;
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
          print_r ($resAs);
          echo "<br><br>";
          print_r ($resBs);
        ?>
        <img src="images/plus6.jpg">
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
