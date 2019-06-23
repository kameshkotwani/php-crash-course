<?php
  #Functions in PHP
  function simpleFunction()
  {
    echo "Hello <br>";
    echo "Hello <br>";
    
  }


  // executing the function
  simpleFunction();

  $name='Kamesh';

  function sayHello($name='world')
  {
    echo "Hello ".$name.'<br>';
    # code...
  }
  sayHello('Kamesh');
  sayHello();
  
  function addNumbers($num1,$num2){
    return $num1+$num2;
  }
  $sum= addNumbers(4,5);
    echo $sum;
    echo "<br>";

  //passing by refrence
  $num=10;

  function addFive($num)
  {
    $num+=5;

  }

  function addTen(&$num)
  {
    $num+=10;

  }
  addFive($num);
  echo " value addFive: $num <br>";
  
  addTen($num);
  echo " value addTen: $num <br>";
  
  
?>