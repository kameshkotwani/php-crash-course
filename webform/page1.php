<?php 
  if(isset($_POST['submit']))
  {
    session_start();
    $_SESSION['name']=htmlentities($_POST['name']);
    $_SESSION['email']=htmlentities($_POST['email']);
    header('Location: page2.php');
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Sessions</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="name" id="name" placeholder="Enter Name">
    <br> <br>
    <input type="text" name="email" id="email"> 
    <br> <br>
    <input type="submit" name="submit" id="submit">
    <br>
  
  </form>
</body>
</html>