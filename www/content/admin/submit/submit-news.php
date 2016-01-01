<?php
  function submit_news_to_database($news_id, $title_text, $body_text, $user_id) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
    $db = connect_to_database();
    if($news_id==-1) {
      if($statement = $db->prepare("INSERT INTO `news` (`title_text`, `body_text`, `visible`, `post_user_id`,	`edit_user_id`) VALUES (?, ?, '1', ?, ?)")) {
        $statement->bind_param('ssii', $title_text, $body_text, $user_id, $user_id);
        $statement->execute();
        $statement->close();
      } else {
        die('prepare() failed: ' . htmlspecialchars($db->error));
      }
    } else {
      if($statement = $db->prepare("UPDATE `news` SET `title_text` =  ?, `body_text` =  ?, `edit_user_id` = ? WHERE `news_id` = ?")) {
        $statement->bind_param('ssii', $title_text, $body_text, $news_id);
        $statement->execute();
        $statement->close();
      } else {
        die('prepare() failed: ' . htmlspecialchars($db->error));
      }
    }
 }

  function submit_news() {
    if($_SESSION['user']['can_blog']==1) {
      $news_id = $_POST['news_id'];
      $title_text = $_POST['title_text'];
      $body_text = $_POST['body_text'];
      $user_id = $_SESSION['user']['user_id'];
      submit_news_to_database($news_id, $title_text, $body_text, $user_id);
    }
  }
?>