<?php $title = "DirectoryInternal"; 
require_once "models/users.php";?>

<?php ob_start(); ?>
<?php
foreach (get_users_with_permission_between(20,50) as $user){
  $name=$user['name'];
  $firstname=$user['firstname'];
  $phone=$user['phone'];
  $mail=$user['mail'];
  echo "<div class='card' style='width: 18rem;'>
  <img class='card-img-top' src='/src/img/user_logo.png' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title'>$name $firstname</h5>
    <p class='card-text'>$phone \n $mail</p>
  </div>
</div>";
} ?>

<?php $content = ob_get_clean(); ?>

<?php require './templates/intranet.php'; ?>