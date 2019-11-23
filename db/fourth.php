<?php
  $cars= array( array("3 Wheeler","LOAD_FILE('images/3wheel.jpg')","82 kw (110 bhp) @ 6000 rpm","117 mph (188 km/h)","8 seconds","143g / km","Morgan’s most exciting model, the 3 Wheeler is designed to bring the fun and excitement back into transport.","1574523828"),
                array("4/4"),
                array("Plus 4"),
                array("Roadster"),
                array("Plus 6"));
  for ($row = 0; $row < 5; $row++) {
  echo "<ul>";
  for ($col = 0; $col < 9; $col++) {
    echo $cars[$row][$col]; 
  }
}
 ?>
