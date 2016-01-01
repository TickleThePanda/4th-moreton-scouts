<?php
  function check_initial_login() {
    if(!isset($_SESSION['user'])){
      if(!empty($_POST['user_name'])) {
        if(attempt_login($_POST['user_name'], $_POST['password'])) {
          header('Location:?action=admin&subaction=dashboard');
        } else {
          header('Location:?action=admin&failed=true');
        }
      }
    }
  }

  function is_logged_on() {
    return isset($_SESSION['user']);
  }

  function is_login_failed() {
    return isset($_GET['failed']);
  }

  function attempt_login($name, $pass) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
    $db = connect_to_database();

    if($statement = $db->prepare("SELECT `password` FROM `users` WHERE `user_name` = ?")) {
      $statement->bind_param('s', $name);

      $statement->execute();
      $statement->store_result();

      $statement->bind_result($returned_value);

      while($statement->fetch()) {
        $pass_hash = $returned_value;
      }

      $statement->free_result();
      $statement->close();
    }
    $validLoginCredentials = password_verify($pass, $pass_hash);

    if($validLoginCredentials){

      if($statement = $db->prepare("SELECT `user_id`, `user_full_name`, `can_blog`,`can_event`,`can_photos`,`can_user` FROM `users` WHERE `user_name` = ?")) {
        $statement->bind_param('s', $name);

        $statement->execute();
        $statement->store_result();

        $statement->bind_result($returned_id, $returned_name, $returned_blog, $returned_event, $returned_photos, $returned_user);

        while($statement->fetch()) {
          $user_id = $returned_id;
          $user_full_name = $returned_name;
          $can_blog = $returned_blog;
          $can_event = $returned_event;
          $can_photos = $returned_photos;
          $can_user = $returned_user;
        }

        $statement->free_result();
        $statement->close();
      }

      $validLoginCredentials = password_verify($pass, $pass_hash);

      $_SESSION['user'] = array(
          'username' => $name,
          'user_id' => $user_id,
          'user_full_name' => $user_full_name,
          'can_blog' => $can_blog,
          'can_event' => $can_event,
          'can_photos' => $can_photos,
          'can_user' => $can_user
      );
    }

    $db->close();

    return $validLoginCredentials;
  }
?>