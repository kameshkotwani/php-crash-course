<?php
#substr
#returns a portion of a string
$output = substr('Hello', 1, 3);
$output = substr('Hello', -1);
// echo $output;

#strlen()
$output = strlen('Hello World');
// echo $output;
#strpos
#Finds the position of first occurence
$output = strrpos('Hello World', 'o');
// echo $output;

#trim()
# removes whitespaces
// $text='Hello          ';
// var_dump($text);
//  echo strlen($text);
//  $trimmed=trim($text);
//  var_dump($trimmed);
//  echo strlen($trimmed);

//  echo strtoupper('Hello World');
//  echo "<br/>";
//  echo strtolower('Hello World');

// $text = 'Hello World';
// $text =str_replace('World','Everyone',$text);
// echo $text;

// $values=array(true,false,null,'abc',123,22.4,'33','32.4',' ',0,'0');
// foreach ($values as $value)
// {
//   if(is_string($value)){
//     echo "$value is a string <br>";
//   }
// }

#compress a string
$string = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo id error libero officiis eveniet sit quod. Recusandae harum eveniet eum debitis! Ratione debitis voluptatibus dolor, consequuntur vel eveniet exercitationem molestiae impedit autem voluptatem laudantium, atque velit soluta, quam fugit quis.';
$compressed = gzcompress($string);
echo $compressed;
$uncompressed = gzuncompress($string);
echo $uncompressed;
