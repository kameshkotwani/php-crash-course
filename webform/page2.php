<?php
  session_start();
  $_SESSION['name']='Kamesh2';

  $name=$_SESSION['name'];
  $email=$_SESSION['email'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP sessions page 2</title>
</head>
<body>
  <h5>Thank you <?php echo $name;?> you have subscribed using your <?php echo $email;?> </h5>
  <a href="page3.php">go to page 3</a>
</body>
</html>