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

  // dealer db
  $dealer= array( array("ABT","Morgan Basel","Abt Automobile AG","Lausenerstrasse 11", "", "4410", "Liestal", "Switzerland", "+41 (0)61 926 85 55", "images/switzerland.png", "https://www.morgan-motor.com/abt-basel/"),
                  array("AC Minds","Morgan Okazaki","AC Minds Morgan Okazaki","103-1 Daiwa-cho", "Okazaki-shi", "444-0931", "Aichi-ken", "Japan", "0564-32-1748", "images/japan.png", "http://ac-minds.com/?page_id=4577"),
                  array("Allon White","Morgan Bedfordshire","Allon White Sports Cars Ltd","119 High Street", "Cranfield", "MK43 0BS", "Bedford", "UK", "01234 750205", "images/uk.png", "https://www.morgan-motor.com/allon-white-sports-cars-ltd/"),
                  array("Auto Europe","Morgan Detroit","Auto Europe","677 S Eton Street", "Birmingham", "MI 48009", "Detroit", "USA", "01234 750205", "images/usa.png", "https://www.morgan-motor.com/autoeurope-detroit/"),
                  array("Borghi","Morgan Milan","Borghi Automobili sas","Via Trezzo d‘Adda 14", "Via Stendhal 59", "20144", "Milano", "Itali", "+39 02 47 4051", "images/itali.png", "https://www.morgan-motor.com/borghi-milan/"),
                  array("Classic and Sports","Morgan Vetlanda","Classic and Sports Car","Centre AB", "Maskingatan 21", "57433", "Vetlanda", "Sweden", "+46(0)383-10051", "images/sweden.png", "https://www.morgan-motor.com/classicandsports-vetlanda/"),
                  array("Classic Cars HK","Morgan Kowloon","CLASSIC CARS HK LTD.","G/F, 90A SUNG WONG", "TOI ROAD", "", "KOWLOON", "HONG KONG", "", "images/hongkong.png", "https://www.morgan-motor.com/classic-cars-hk/"),
                  array("Classic Line","Morgan Neckar","Classic Line","Mercedesstr. 1.", "", "74366 ", "Kirchheim / Neckar", "Germany", "0049 7143 405140", "images/germany.png", "https://www.morgan-motor.com/classic-line/") 
                );
  $countDealer= count($dealer)
;  for ($row= 0; $row < $countDealer; $row++) {
    $dealer0=$dealer[$row][0];
    $dealer1=$dealer[$row][1];
    $dealer2=$dealer[$row][2];
    $dealer3=$dealer[$row][3];
    $dealer4=$dealer[$row][4];
    $dealer5=$dealer[$row][5];
    $dealer6=$dealer[$row][6];
    $dealer7=$dealer[$row][7];
    $dealer8=$dealer[$row][8];
    $dealer9=$dealer[$row][9];
    $dealer10=$dealer[$row][10];
   
    $sqlDealer="INSERT INTO dealer(
      Title,Team,Name,Address1,Address2,Postcode,State,Country,Tele,Src,Website) VALUES
      ('$dealer0','$dealer1','$dealer2','$dealer3','$dealer4','$dealer5','$dealer6','$dealer7','$dealer8','$dealer9','$dealer10');";

  if (mysqli_query($conn, $sqlDealer)) {
    echo "Insert data Dealer successfully";
  }
  else {
    echo "Error in Insert data Dealer: " . mysqli_error($conn);
  }
  }

    mysqli_close($conn);
?>
