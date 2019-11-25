<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   left: 0;
   bottom: 0;
   height: 90px;
   background-size: cover;
   width: 100%;
   background-image: url('images/morgan2.jpg');
   color: white;
}
</style>
</head>
<body>
<br>
<div class="footer">
  <a href="MainPage.php"><img src="images\morgan_logo.png" style="float:left; height:95px; cursor: pointer;"></a>
  <form action="all.php" method="post" style="background-color: transparent;">
    <br><br>
    <input type="text" name="search" placeholder="Search ..." style="border-radius: 5px; width: 200px;">&nbsp
    <button type="submit" name= "search-all" value="Go" style="border-radius: 5px; height:25px; width: 80px;">Go ..</button>
  </form>
</div>
</body>
</html>
