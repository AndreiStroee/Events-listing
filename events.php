<?php
require "header.php";
?>

<main>
  <?php
  
    if (isset($_SESSION['userId'])) {

      echo '<p class="login-status" style="color:#fff">You are logged in!</p>';
    }
    else{
      echo ' <p class="login-status align-content-center" style="color:#fff">Log into your account to buy tickets!</p>';
    }

  ?>
  
</main>

<?php
require "footer.php";
?>