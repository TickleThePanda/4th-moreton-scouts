<?php
  session_start();
  include ("./content/login/login.php");

  function get_page_action() {
    if(!empty($_GET['action'])) {
      $action = $_GET['action'];
      $action = basename($action);
    } else {
      $action = "home";
    }
    return $action;
  }
  function get_page_path($action) {
    if(file_exists("./content/$action.html")) {
      return("./content/$action.html");
    } elseif (file_exists("./content/$action.php")) {
      return("./content/$action.php");
    } else {
      return("./error/404.html");
    }
  }

  if($_GET['logout']=="true") {
    session_destroy();
    header('Location:?action=admin');
  }
  switch ($_POST['submit']) {
    case "news":
      include ("./content/admin/submit/submit-news.php");
      submit_news();
      header('Location:?action=admin&subaction=edit-news');
      break;
    }

  check_initial_login();

  $action = get_page_action();

  $path = get_page_path($action);

  $TPL;
  include ($path);
?>