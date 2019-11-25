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
</style>
<body>
  <div class="col-xs-12">
    <h1 class="dl-header">FIND A MORGAN DEALERSHIP</h1>
  </div>
  <!-- the form -->
  <div class="col-xs-12">
    <form id="dealer_search" action="dealership.php" method="post">
      <input type="text" id="dealer_search_address" placeholder="Enter address or postcode">
      <button id="search" class="btn rounded-0" style="color: white" type="submit">Search</button>
    </form>
  </div>
</body>
</html>
<?php include "footer.php" ?>
