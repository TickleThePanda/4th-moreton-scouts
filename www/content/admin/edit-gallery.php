<?php 
  if($_SESSION['user']['can_photos']!=1) {
    echo "Insufficient privileges to use this action.";
    ?>
      <p class="body-paragraph"><a href="?action=admin&subaction=dashboard">Return to dashboard</a></p>
    <?php
    exit;
  } else {
    
  }
?>