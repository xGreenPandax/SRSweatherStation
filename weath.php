<?php

date_default_timezone_set('Europe/Kiev');
$datafile = 'weather.txt';

### зырь

if(empty($_GET["temp"])) { # показываем данные с файла
  $data = file_get_contents($datafile);
  list($time,$temp,$hum,$pres) = explode ("|",$data);
  echo "$time: $temp&deg;  $hum%; $pres";
}

else {  # пишем данные в файл
  $now  = date("H:i");
  $temp = htmlspecialchars($_GET["temp"]);
  $hum  = htmlspecialchars($_GET["hum"]);
  $pres  = htmlspecialchars($_GET["pres"]);
  file_put_contents($datafile, "$now|$temp|$hum|$pres мм.рт.ст.");
}

?>
