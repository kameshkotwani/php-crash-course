<?php include 'server-info.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>System Info</title>

  <!-- using bootstrap  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Server and File Info</h1>
    <?php if($server): ?>
      <ul class="list-group">
        <?php foreach ($server as $key=>$value): ?>
        <li class="list-group-item">
          <b><?php echo $key; ?>:</b> <?php echo $value; ?>
        </li>
      </ul>
      <?php endforeach;?> 
    <?php endif; ?>

    <h1>Client Info</h1>
    <?php if($client): ?>
      <ul class="list-group">
        <?php foreach ($server as $key=>$value): ?>
        <li class="list-group-item">
          <b><?php echo $key; ?>:</b> <?php echo $value; ?>
        </li>
      </ul>
      <?php endforeach;?> 
    <?php endif; ?>

  </div>
</body>
</html>