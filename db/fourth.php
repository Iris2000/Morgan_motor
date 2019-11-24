<?php
  $cars= array( array(),
                array(),
                array("Plus 4","LOAD_FILE('images/plus4.jpg')","115 kw (154 bhp) @ 6000 rpm","118 mph (189 km/h)","7.5 seconds","205g / km","The Plus 4 represents the sweet spot within Morgan’s range, and is by far the company’s most popular model.","1574577024"),
                array("Roadster","LOAD_FILE('images/roadster.jpg')","209 kw (280 bhp) @ 6000 rpm","140 mph (225 km/h)","5.5 seconds","250g / km","The Morgan V6 Roadster is the most powerful and exhilarating model within Morgan’s Classic Range.","1574577340"),
                array("Plus 6","LOAD_FILE('images/plus6.jpg')","250kw (335 bhp) @ 6,500rpm","166 mph (267 km/h)","4.2 seconds","180g / km","Addictive power, unrivalled exhilaration and a true drivers’ sports car, the Plus Six is the next generation Morgan sports car.","1574577697"));
  $countCars= count($cars);
  for ($row = 0; $row < $countCars; $row++) {
    $car0= $cars[$row][7];
    echo $car0;
  echo "<br>";
}
 ?>
