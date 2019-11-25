<!-- <?php
session_start();
?> -->
<!doctype html>
<html lang="en">
<style>
  .navi {
    background-image: url('images/morgan2.jpg');
    background-size: cover;
    text-align: center;
    color: white;
    font-size: 30px;
    /* padding-bottom: 10px; */
  }
  .logo{
    display: block;
    margin-left: auto;
    margin-right: auto;
    height:100px;
    cursor: pointer;
  }
  button{
    text-transform: uppercase;
    font-family: 'Alegreya Sans SC';
    position: absolute;
  }
  .bar{
    background-color: black;
    opacity: 0.8;
  }

  #username {
    text-align: left;
    position:absolute;
    top:-10px;
    font-size: 15px;
    margin: 10px;
  }

  #logout {
    height: 30px;
    display: inline-block;

  }
</style>
    <div class='navi'>
      <a href="MainPage.php"><img class='logo' src="images/Morgan.png" alt="Morgan_Motor_Logo"></a>
      <div id="username">
        <?php echo "Welcome, ".$_SESSION["username"]; ?>
        <a href="logout.php"><img id="logout" src="images/logout.png" alt="Logout_Button"></a>
      </div>
      <br><br>
      <div class="bar">
        <br><br>
      </div>
      <button onclick="window.location.href = 'MainPage.php';"
        style="background-color: transparent; top: 165px; color: white; height: 50px; width: 120px; left: 0px; font-size: 25px;">HOME
      </button>
      <button onclick="window.location.href = 'cars.php';"
        style="background-color: transparent; top: 165px; color: white; height: 50px; width: 120px; left: 230px; font-size: 25px;">CARS
      </button>
      <button onclick="window.location.href = 'specs.php';"
        style="background-color: transparent; top: 165px; color: white; height: 50px; width: 120px; left: 460px; font-size: 25px;">Specs
      </button>
      <button onclick="window.location.href = 'dealership.php';"
        style="background-color: transparent; top: 165px; color: white; height: 50px; width: 120px; left: 690px; font-size: 25px;">dealer
      </button>
    </div>
</html>
