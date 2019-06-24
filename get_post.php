
<?php
if (isset($_GET['name'])) {
    // print_r($_GET);
    // echo $_GET['name'];
    $name = htmlentities($_GET['name']);
    // echo $name;
}
?>
<?php
// if(isset($_POST['name'])){
//   print_r($_POST);
//   // echo $_POST['name'];
//   $name= htmlentities($_POST['name']);
//   echo $name;
// }
?>
<?php
// if(isset($_REQUEST['name'])){
//   // print_r($_REQUEST);
//   // echo $_POST['name'];
//   $name= htmlentities($_REQUEST['name']);
//   echo $name;
// }
?>

<?php

// echo $_SERVER['QUERY_STRING'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET POST</title>
</head>
<body>
  <form action="get_post.php" method="GET">
  <br>
      <div>
        <label for="name">Name</label>
        <span><input type="text" name="name"></span>
      </div>
      <br>
      <div>
        <label for="email">Email</label>
        <span><input type="email" name="email"></span>
      </div>
      <br>
      <input type="submit" value="submit">
</form>
<ul>
  <li>
    <a href="get_post.php?name=Kamesh">Kamesh</a>
  </li>
  <li>
    <a href="get_post.php?name=kamesh2">Kamesh2</a>
  </li>
</ul>
</h1><?php echo "${name}'s Profile :"; ?> <h1>

</body>
</html>
