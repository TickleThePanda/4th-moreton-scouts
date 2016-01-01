<?php
  function generate_login_page($login_error)
  {
    if($login_error) {
    ?>
      <p class="error-text body-paragraph">Error: Username or Password is incorrect.</p>
    <?
    }

    ?>
      <form action="./?action=admin" method="POST">
        <input class="login-input" type="text" placeholder="Username" name="user_name"><br>
        <input class="login-input" type="password" placeholder="Password" name="password"><br>
        <input class="login-input" type="submit" value="Submit">
      </form>
    <?

  }
?>
