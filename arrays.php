<?php
//arrays indexed associative and multi dimensional

//Indexed
$people= array('kevin','jeremy','sara');
// echo $people[0];
$ids=array(2,3,4,5);
// echo $ids[3];
$cars=['mazda'];
$cars[1]='chevy';
// echo $cars[1];
$cars[]='bmv';
// echo $cars[2];

//functions to use on arrays
// echo count($cars);
// print_r($cars);
// var_dump($cars);

//associative array
$people=array('Brad'=>35,'Jose'=>32,'Enrique'=>37);
// echo $people['Brad'];
$ids=[22=>'Brad',45=>'Jose'];
// echo $ids[22];
$people['Jill']=42;
// echo $people['Jill'];
var_dump($people);

//Multi-dimensional array
$cars=array(
  array('Honda',20,10),
  array('Toyota',30,20),
  array('Ford',23,12),
);
echo $cars[1][0];


?>