<?php
  error_reporting(E_ALL);
  ini_set('display_errors',1);

  $name = $_POST['user_name'];
  $pass = $_POST['password'];
  
  require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
  
  if($statement = $db->prepare("SELECT `password` FROM `users` WHERE `user_name` = ?")) {
    $statement->bind_param('s', $name);
    
    $statement->execute();
    $statement->store_result();
    
    $statement->bind_result($returned_value);
    
    while($statement->fetch()) {
      $pass_hash = $returned_value;
    }
    
    $statement->free_result();
    
    $db->close();
  }
  $validLoginCredentials = password_verify($pass, $pass_hash);

  if($validLoginCredentials){
    $_SESSION['user'] = array(
        'username' => $name
    );
  }
?>