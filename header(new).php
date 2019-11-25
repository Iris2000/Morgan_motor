<!doctype html>
<html lang="en">
<style>
  .navi {
    background-image: url('images/machine-macro-background-morgan-wallpaper-preview.jpg');
    background-size: cover;
    text-align: center;
    color: white;
    font-size: 30px;
    /* padding-bottom: 10px; */
  }
  .center{
    text-align: center;
  }

  #username {
    text-align: left;
    font-size: 15px;
    margin: 10px;
  }

  #logout {
    height: 30px;
    display: inline-block;

  }
</style>
  <form action="specs.php" method="post">
    <div class='navi'>
      <a href="MainPage.php"><img src="images/morgan_logo.png" alt="Morgan_Motor_Logo" style=" display: block;margin-left: auto;margin-right: auto;height:100px; cursor: pointer;"></a>
      <div id="username">
        <?php echo "Welcome, ".$_SESSION["username"]; ?>
        <a href="logout.php"><img id="logout" src="images/logout.png" alt="Logout_Button"></a>
      </div>
    </div>
    <br>
    <br>
  </form>
</html>
