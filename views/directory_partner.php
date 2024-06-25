<?php $title = "Directory Partners"; 
require_once "models/users.php";?>

<?php ob_start(); ?>
<div class="row align-items-start custom-line">
<div class="col">
<?php
$i=0;
foreach (get_users_with_permission_equals(10) as $user){
  if (fmod($i,3)==0){
    echo "</div><div class='col'>";
  }
  $name=$user['name'];
  $firstname=$user['firstname'];
  $phone=$user['phone'];
  $mail=$user['mail'];
  echo "<div class='card m-100 align-items-center ' style='width: 18rem;'>
  <img class='card-img-top' src='/src/img/user_logo.png' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>$name $firstname</h5>
    <p class='card-text'>$phone \n $mail</p>
  </div>
</div>";
$i+=1;
} ?>
</div></div>
<?php $content = ob_get_clean(); ?>

<?php require './templates/intranet.php'; ?>