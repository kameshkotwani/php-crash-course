<?php
//message vars
$msg='';
$msgClass='';



if(filter_has_var(INPUT_POST,'submit'))
{
  //Get the form data
  $name=htmlspecialchars($_POST['name']);
  $email=htmlspecialchars($_POST['email']);
  $message=htmlspecialchars($_POST['message']);

  //Check the required fields
  if(!empty($email)&& !empty($name)&& !empty($message))
  {
    //Passed
    //Check e-mail
    if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
      $msg='Please enter valid-email';
      $msgClass='alert-danger';

    }else{
      echo 'passed';

      //reciepint email
      $toEmail="kameshkotwani@outlook.com";
      $subject="contact request from ". $name;
      $body="<h2>Contact Request</h2>
      <h4>Name: </h4> ".$name."<h4>Email: </h4> ".$email."<h4>Message : </h4>".$message;

      $headers="MIME-Version: 1.0"."\r\n";
      $headers.="Content-Type:text/html;charset=UTF-8"."\r\n";

      //Additional Headers
      $headers.="From: ".$name."<".$email.">"."\r\n";
      if(mail($toEmail,$subject,$body,$headers))
      {

        $msg='Email-sent';
        $msgClass='alert-success';
      }else
      {
        $msg='Email not sent';
        $msgClass='alert-danger';

      }

    }
  }
  else
  {
    $msg='Please fill in all fields';
    $msgClass='alert-danger';
  }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Form</title>
  <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">Contact Here</a>
      </div>
    </div>
  </nav>
    <div class="container">
    <?php
    if($msg!=''):?>
      <div class="alert <?php echo "$msgClass";?>"><?php echo "$msg"?></div>
    <?php endif;?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name'])?$name:'';?>">
      </div>
      <div class="form-group">
        <label for="name">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email'])?$email:'';?>">
      </div>
      <div class="form-group">
        <label for="name">Message</label>
        <input type="text" name="message" class="form-control" value="<?php echo isset($_POST['message'])?$message:'';?>">
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
    
    </form>
  
  </div>

</body>
</html>