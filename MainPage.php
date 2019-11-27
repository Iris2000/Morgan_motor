<?php
session_start();
?>

<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php include 'header.php'; ?>
  <style>
    * {
      box-sizing:border-box;
    }

    body {
      margin: 0;
      line-height: 1;
      font-family: Arial, Helvetica, sans-serif;
    }

    .container {
      padding: 64px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both
    }

    .column-66 {
      float: left;
      width: 66.66666%;
      padding: 20px;
    }

    .column-33 {
      float: left;
      width: 33.33333%;
      padding: 20px;
    }

    .large-font {
      font-size: 48px;
    }

    .xlarge-font {
      font-size: 50px;
      font-weight: 300;
      text-transform: uppercase;
    }

    .button {
      border: 2px solid #555555;
      padding: 14px 28px;
      background-color: none;
      cursor: pointer;
    }

    img {
      display: block;
      height: auto;
      max-width: 100%;
    }

    @media screen and (max-width: 1000px) {
      .column-66,
      .column-33 {
        width: 100%;
        text-align: center;
      }
      img {
        margin: auto;
      }
    }

  </style>
  <head>
    <title>Morgan Motor</title>
  </head>
  <form action="detail.php" method="post">
  <body>
      <!-- Plus 6-->
      <div class="container" style="background:#a60e0e;">
        <div class="row">
          <div class="column-66" >
            <img src="images\Plus6_logo.png" alt="Plus_SIX_logo" style="height: 100px;">
            <p><span style="font-size:36px">Addictive power,</span> unrivalled exhilaration and a true drivers’ sports car, the Plus Six is the next generation Morgan sports car.</p>
            <button class="button" name="button" value="5">LEARN MORE..</button>
          </div>
          <div class="column-33">
              <img src="images\plus6.jpg" width="400" height="471">
          </div>
        </div>
      </div>

      <!-- Roadster -->
      <div class="container" style="background-color:#f1f1f1">
        <div class="row">
          <div class="column-33">
            <img src="images\roadster.jpg" alt="Roadster_logo" width="400" height="471">
          </div>
          <div class="column-66">
            <h1 class="xlarge-font"><b>Morgan Roadster</b></h1>
            <p><span style="font-size:36px">The Morgan V6 Roadster</span> is the most powerful and exhilarating model within Morgan’s Classic Range.</p>
            <button class="button" style="background-color:red" name="button" value="4">Read More</button>
          </div>
        </div>
      </div>

      <!-- Plus 4 -->
      <div class="container" style="background:#a60e0e;">
        <div class="row">
          <div class="column-66" >
            <h1 class="xlarge-font" style="color: White;"><b>Morgan Plus 4</b></h1>
            <p><span style="font-size:36px">The Plus 4 represents</span> the sweet spot within Morgan’s range, and is by far the company’s most popular model.</p>
            <button class="button" name="button" value="3">LEARN MORE..</button>
          </div>
          <div class="column-33">
              <img src="images\plus6.jpg" width="400" height="471">
          </div>
        </div>
      </div>

      <!-- 4/4 -->
      <div class="container" style="background-color:#f1f1f1">
        <div class="row">
          <div class="column-33">
            <img src="images\44.jpg" alt="44_logo" width="400" height="471">
          </div>
          <div class="column-66">
            <h1 class="xlarge-font"><b>Morgan 4/4</b></h1>
            <p><span style="font-size:36px">A nimble and agile drivers’ car,</span> the Morgan 4/4 represents the purest Morgan driving experience available.</p>
            <button class="button" style="background-color:red" name="button" value="2">Read More</button>
          </div>
        </div>
      </div>

      <!-- 3 Wheel -->
      <div class="container" style="background:#a60e0e;">
        <div class="row">
          <div class="column-66" >
            <h1 class="xlarge-font" style="color: White;"><b>Morgan 3 Wheel</b></h1>
            <p><span style="font-size:36px">Morgans most exciting model,</span> the 3 Wheeler is designed to bring the fun and excitement back into transport.</p>
            <button class="button" name="button" value="1">LEARN MORE..</button>
          </div>
          <div class="column-33">
              <img src="images\3wheel.jpg" width="400" height="471">
          </div>
        </div>
      </div>

    </form>
  </body>
</html>
</body>
</html>
<?php include "footer.php" ?>
