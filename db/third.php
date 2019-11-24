<?php
  $conn = mysqli_connect ("localhost","root","","search_engine");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $cars= array( array("3 Wheel","82 bhp @ 5250 rpm","116 mph (185 km/h)","6 seconds","270g / km","Morgans most exciting model, the 3 Wheeler is designed to bring the fun and excitement back into transport.","1574523828"),
                array("4/4","82 kw (110 bhp) @ 6000 rpm","117 mph (188 km/h)","8 seconds","143g / km","A nimble and agile drivers’ car, the Morgan 4/4 represents the purest Morgan driving experience available.","1574576858"),
                array("Plus 4","115 kw (154 bhp) @ 6000 rpm","118 mph (189 km/h)","7.5 seconds","205g / km","The Plus 4 represents the sweet spot within Morgan’s range, and is by far the company’s most popular model.","1574577024"),
                array("Roadster","209 kw (280 bhp) @ 6000 rpm","140 mph (225 km/h)","5.5 seconds","250g / km","The Morgan V6 Roadster is the most powerful and exhilarating model within Morgan’s Classic Range.","1574577340"),
                array("Plus 6","250kw (335 bhp) @ 6,500rpm","166 mph (267 km/h)","4.2 seconds","180g / km","Addictive power, unrivalled exhilaration and a true drivers’ sports car, the Plus Six is the next generation Morgan sports car.","1574577697"));
  $countCars= count($cars);
  for ($row= 0; $row < $countCars; $row++) {
    $car0=$cars[$row][0];
    $car1=$cars[$row][1];
    $car2=$cars[$row][2];
    $car3=$cars[$row][3];
    $car4=$cars[$row][4];
    $car5=$cars[$row][5];
    $car6=$cars[$row][6];
    $sqlCars="INSERT INTO cars(
      Name,Powers,Top_Speed,kmh,Combine_CO2,Description,Update_Date
    ) VALUES(
      '$car0','$car1','$car2','$car3','$car4','$car5','$car6'
    );";

  if (mysqli_query($conn, $sqlCars)) {
    echo "Insert data Cars successfully";
  }
  else {
    echo "Error in Insert data Cars: " . mysqli_error($conn);
  }
  }

  $Specs= array( array("EURO 3","1","S&S 1979cc V twin","Mazda 5 Speed","82 bhp @ 5250rpm","140Nm @ 3250rpm","6 seconds","115mph (185kph)","30.3 mpg (9.3 litres / 100km)","215g / km","525kg","32905","6581","39486"),
                array("EURO 4","1","S&S 1979cc V twin","Mazda 5 Speed","68 bhp @ 5200rpm","129Nm @ 2500rpm","7 seconds","115mph (185kph)","34.9 mpg (8.1 litres / 100km)","187g / km","585kg","33395","6679","40074"),
                array("","2","Ford Sigma 1600cc","Mazda 5 Speed","82 kw (110 bhp) @ 6000 rpm","131 Nm (97 lb/ft)","8.0 seconds","117mph (188kph)","44.1 mpg (6.4 litres / 100km)","143g / km","795kg","33505","6701","40206"),
                array("","3","Ford GDI 1999cc","Mazda 5 Speed manual","115 kw (154 bhp) @ 6000 rpm","201 Nm (148 lb/ft)","7.5 seconds","118 mph (189 kph)","39.8 mpg (7.1 litres / 100km)","205g / km","927kg","36755","7351","44109"),
                array("","4","Ford Cyclone V6 3700cc","Ford 6 Speed Manual","209 kw (280 bhp) @ 6000rpm","380Nm (280lb/ft)","5.5 seconds","140mph (225kph)","27.4 mpg (10.3 litres / 100km)","250g / km","950kg","45895","9179","55074"),
                array("Morgan Plus Six","5","BMW 2019 B58 TwinPower Turbo inline 6-cylinder engine","8-speed Automatic with Sport, Plus and Manual shift modes","250kw (335 bhp) @ 6,500rpm","500Nm (369 lb/ft)","4.2 seconds","166mph (267 kph)","34 mpg (8.2 l/100km)","180g/km","1,075kg","64995.83","12999.17","77995"),
                array("Morgan Plus Six Touring","5","BMW 2019 B58 TwinPower Turbo inline 6-cylinder engine","8-speed Automatic with Sport, Plus and Manual shift modes","250kw (335 bhp) @ 6,500rpm","500Nm (369 lb/ft)","4.2 seconds","166mph (267 kph)","34 mpg (8.2 l/100km)","180g/km","1,075kg","70829.17","14165.83","84995"),
                array("Morgan Plus Six First Edition - Moonstone","5","BMW 2019 B58 TwinPower Turbo inline 6-cylinder engine","8-speed Automatic with Sport, Plus and Manual shift modes","250kw (335 bhp) @ 6,500rpm","500Nm (369 lb/ft)","4.2 seconds","166mph (267 kph)","34 mpg (8.2 l/100km)","180g/km","1,075kg","74995","15000","89995"),
                array("Morgan Plus Six First Edition - Emerald","5","BMW 2019 B58 TwinPower Turbo inline 6-cylinder engine","8-speed Automatic with Sport, Plus and Manual shift modes","250kw (335 bhp) @ 6,500rpm","500Nm (369 lb/ft)","4.2 seconds","166mph (267 kph)","34 mpg (8.2 l/100km)","180g/km","1,075kg","74995","15000","89995"));
  $countSpecs= count($Specs);
  for ($row= 0; $row < $countSpecs; $row++) {
    $Spec0=$Specs[$row][0];
    $Spec1=$Specs[$row][1];
    $Spec2=$Specs[$row][2];
    $Spec3=$Specs[$row][3];
    $Spec4=$Specs[$row][4];
    $Spec5=$Specs[$row][5];
    $Spec6=$Specs[$row][6];
    $Spec7=$Specs[$row][7];
    $Spec8=$Specs[$row][8];
    $Spec9=$Specs[$row][9];
    $Spec10=$Specs[$row][10];
    $Spec11=$Specs[$row][11];
    $Spec12=$Specs[$row][12];
    $sqlSpecs="INSERT INTO specs(
      Type,Cars_ID,Engine,Gearbox,MaxPower,MaxTorque,Performance,TopSpeed,CombinedMPG,DryWeight,ListPrice,VAT,ListPriceIncVAT
    ) VALUES(
      '$Spec0','$Spec1','$Spec2','$Spec3','$Spec4','$Spec5','$Spec6','$Spec7','$Spec8','$Spec9','$Spec10','$Spec11','$Spec12'
    );";

  if (mysqli_query($conn, $sqlSpecs)) {
    echo "Insert data Specs successfully";
  }
  else {
    echo "Error in Insert data Specs: " . mysqli_error($conn);
  }
  }




    mysqli_close($conn);
?>
