<?php
  # Loops
  // for loop while do while forEach loop

  # For Loop
  // @params= init condition,increment
  // for($i=0;$i<10;$i++)
  // {
  //   echo 'Hello';
  //   echo '<br>';
  //   echo 'number'.$i;
  // }
  #While Loop
  // @params -condition

  // $i=0;
  // while($i<10)
  // {
  //   echo "$i";
  //   echo '<br>';
  //   $i++;
  // }

    // $i=0;
    // do {
    //   echo "$i";
    //   echo "<br>";
    //   $i++;
    // } while ($i <= 10);
    
    //for each
    $arr=array('Brad'=>'brad@email','Jose'=>'jose@email','William'=>'william@email');
      foreach ($arr as $key =>$email) {
        echo $key.':'.$email;
        echo "<br>";
      }



?>