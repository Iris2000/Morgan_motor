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
   background-color: #2F3133;
   /* background-image: url('images/morgan2.jpg'); */
   color: white;
}
.search input {
  width: 200px;
  height: 30px;
  padding: 10px 5px;
  float: left;
  color: #ccc;
  border: 0;
  background: transparent;
  border-radius:  3px;
  border: 1px solid #fff;
  border-right: 0px;
  border-radius: 3px 0 0 3px;
}
.search button {
  position: relative;
  float: left;
  border: 0;
  padding: 0;
  cursor: pointer;
  height: 30px;
  width: 80px;
  color: #fff;
  background: transparent;
  border: 1px solid #fff;
  border-radius: 0 3px 3px 0;
}   
.search button:hover {
  background: #fff;
  color:#444;
}
</style>
</head>
<body>
<br>
<div class="footer">
  <a href="MainPage.php"><img src="images\morgan_logo.png" style="float:left; height:95px; cursor: pointer;"></a>
  <form action="all.php" method="post" class="search" style="background-color: transparent;">
    <br><br>
    <!-- <input type="text" name="search" placeholder="Search ..." style="border-radius: 5px; width: 200px;">&nbsp
    <button type="submit" name= "search-all" value="Go" style="border-radius: 5px; height:25px; width: 80px;">Go ..</button> -->
    <input type="text" name="search" placeholder="Search ...">&nbsp
    <button type="submit" class="btn" name= "search-all" value="Go">Search</button>
  </form>
</div>
</body>
</html>
