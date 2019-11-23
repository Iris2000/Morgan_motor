<?php
  $conn = mysqli_connect ("localhost","root","","search_engine");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $cars=array()
  $sql="INSERT INTO cars(
    Name,Image,Powers,Top_Speed,kmh,Combine_CO2,Description,Update_Date
  ) VALUES(
    '$name','$pwd'
  );";
  if (mysqli_query($conn, $sql)) {
    echo "Registered successfully";
  }
  else {
    echo "Error in Register: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
