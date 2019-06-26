<?php
//Check for posted data
// if(filter_has_var(INPUT_POST,'data'))
// {
//   echo 'Data Found';
// }
// else{
//   echo 'No Data';
// }
// if(filter_has_var(INPUT_POST,'data'))
// {
//   $email=$_POST['data'];
//   echo $email;
//   echo "<br/>";
//   //Remove illegal characters
//   $email=filter_var($email,FILTER_SANITIZE_EMAIL);

//   echo $email;
//   echo "<br>";
//   if(filter_var($email,FILTER_VALIDATE_EMAIL))
//   {
//     echo 'email is valid';
//   }
//   else
//   {
//     echo 'email is not valid';
//   }
// }

// $filters = array(
//     'data' => FILTER_VALIDATE_EMAIL,
//     'data2' => array(
//         'filter' => FILTER_VALIDATE_INT,
//         'options' => array(
//             'min-range' => 1,
//             "max-range" => 100,
//         ),
//     ),
//   );

//   print_r(filter_input_array(INPUT_POST,$filters));

$arr = array(
    "name" => 'brad traversy',
    'age' => 123,
    'email' => 'brad@gmail.com',
);

$filters = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords",
    ),
    "age" => array(
        'filter' => FILTER_VALIDATE_INT,
        "options" => array(
            'min_range' => 1,
            'max_range' => 100,
        ),
    ),
    'email' => FILTER_VALIDATE_EMAIL,
);
print_r(filter_var_array($arr, $filters));
?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name='data'>
<input type="text" name='data2'>
<button type="submit">Submit</button>
</form>