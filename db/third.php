<?php
  $conn = mysqli_connect ("localhost","root","","search_engine");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $cars= array( array("3 Wheeler","images/3wheel.jpg","82 bhp @ 5250 rpm","116 mph (185 km/h)","6 seconds","270g / km","Morgans most exciting model, the 3 Wheeler is designed to bring the fun and excitement back into transport.","1574523828"),
                array("4/4","images/44.jpg","82 kw (110 bhp) @ 6000 rpm","117 mph (188 km/h)","8 seconds","143g / km","A nimble and agile drivers’ car, the Morgan 4/4 represents the purest Morgan driving experience available.","1574576858"),
                array("Plus 4","images/plus4.jpg","115 kw (154 bhp) @ 6000 rpm","118 mph (189 km/h)","7.5 seconds","205g / km","The Plus 4 represents the sweet spot within Morgan’s range, and is by far the company’s most popular model.","1574577024"),
                array("Roadster","images/roadster.jpg","209 kw (280 bhp) @ 6000 rpm","140 mph (225 km/h)","5.5 seconds","250g / km","The Morgan V6 Roadster is the most powerful and exhilarating model within Morgan’s Classic Range.","1574577340"),
                array("Plus 6","images/plus6.jpg","250kw (335 bhp) @ 6,500rpm","166 mph (267 km/h)","4.2 seconds","180g / km","Addictive power, unrivalled exhilaration and a true drivers’ sports car, the Plus Six is the next generation Morgan sports car.","1574577697"));
  $countCars= count($cars);
  for ($row= 0; $row < $countCars; $row++) {
    $car0=$cars[$row][0];
    $car1=$cars[$row][1];
    $car2=$cars[$row][2];
    $car3=$cars[$row][3];
    $car4=$cars[$row][4];
    $car5=$cars[$row][5];
    $car6=$cars[$row][6];
    $car7=$cars[$row][7];
    $sql="INSERT INTO cars(
      Name,Image,Powers,Top_Speed,kmh,Combine_CO2,Description,Update_Date
    ) VALUES(
      '$car0',LOAD_FILE('$car1'),'$car2','$car3','$car4','$car5','$car6','$car7'
    );";

  if (mysqli_query($conn, $sql)) {
    echo "Insert data successfully";
  }
  else {
    echo "Error in Insert data: " . mysqli_error($conn);
  }
  }

  


    mysqli_close($conn);
?>
