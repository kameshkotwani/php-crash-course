<?php
  date_default_timezone_set("Asia/Kolkata"); //setting up-time-zone
  echo date('d'); //day
  echo "<br>";
  echo date('m'); //month
  echo "<br>";
  echo date('Y'); //year
  echo date('l'); //day of the week
  echo date('d-m-Y'); //full 
  echo "<br>";
  echo date('h'); //hour
  echo date('i'); //min
  echo date('s'); //seconds
  echo date('a'); //am or pm
  echo "<br>";
  //Setting up the time-zone
  
  echo date('h:i:sa'); //printing full time-zone
  $timestamp=mktime(10,14,54,9,10,1981);
  echo $timestamp;
?>