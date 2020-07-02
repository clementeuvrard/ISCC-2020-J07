<?php

$date1 = new datetime('2020-07-02');
echo "<p>" .$date1->format('Y-m-d H:i:s')."</p>";

$date2 = new datetime('2020-06-22 09:00');
echo "<p>" .$date2->format('Y-m-d H:i:s')."</p>";

$difference = $date2->diff($date1);
echo $difference->format('%R%a days');

?>


