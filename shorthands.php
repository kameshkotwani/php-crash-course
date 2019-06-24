<?php
$loggedIn = true;
// if($loggedIn):
$isregistered = ($loggedIn == true) ? true : false;
// echo ($loggedIn) ? 'you are logged in ' : 'you are not logged in';
echo $isregistered;
$arr = array(1, 2, 3, 4, 5, 6, 7);

// $age = 9;
// $score = 12;
// echo 'Your score is' . ($score > 10 ? ($age > 10 ? 'average' : 'Exceptional') : ($age > 10 ? 'horrible' : 'average'));
//

?>


<!-- <div>
  <?php if ($loggedIn) {?>
    <h1>Welcome User</h1>

  <?php } else {?>
  <h1>Welcome Guest</h1>
  <?php }?>
</div> -->


<div>
  <?php if ($loggedIn): ?>
  <h1>Welcome User</h1>
  <?php else: ?>

  <h1>Welcome Guest</h1>

  <?php endif;?>

</div>

<div>
  <?php foreach ($arr as $a): ?>
  <h1><?php echo $a; ?></h1>
  <?php endforeach;?>
</div>
<div>
    <?php for ($i = 0; $i < 10; $i++): ?>
      <h1><?php echo "$i <br/>" ?></h1>
  <?php endfor;?>
</div>