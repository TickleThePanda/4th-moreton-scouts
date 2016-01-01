<?php

  function print_news_item($news_id, $title_text, $posted_time) {
    echo "<tr>";
    echo "<td>$title_text</td>";
    echo "<td>$posted_time</td>";
    echo "<td><a href=\"?action=admin&subaction=edit-news&item=$news_id\">edit</a></td>";
    echo "</tr>";
  }

  function print_news_in_table() {
    require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
    $db = connect_to_database();
    if($statement = $db->prepare("SELECT `news_id`, `title_text`, `posted_time` FROM `news`")) {
        $statement->execute();
        $statement->store_result();

        $statement->bind_result($news_id, $title_text, $posted_time);
        ?>
        <h1>News List</h1>
        <p class="body_paragraph"><a href="?action=admin&subaction=edit-news&item=-1">Create a new post</a></p>
        <table>
          <tr id="table-title-row">
          <td>Title</td>
          <td>Posted Time</td>
        </tr>

        <?php

        while($statement->fetch()) {
          print_news_item($news_id, $title_text, $posted_time);
        }

        echo "</table>";

        $statement->free_result();
        $statement->close();
      } else {
        die('prepare() failed: ' . htmlspecialchars($db->error));
      }
  }

  function print_news_item_page($news_id, $title_text, $body_text) {
    ?>
    <form id="news-item-form" action="./?action=admin&subaction=edit-news" method="POST">
      <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">
      <input type="hidden" name="submit" value="news">
      Title<br> <input type="text" name="title_text" value="<?php echo htmlspecialchars($title_text); ?>"><br>
      Text<br>
      <textarea name="body_text" rows="20" cols="100" wrap="soft" form="news-item-form"><?php echo $body_text; ?></textarea>
      <input type="submit" value="Submit">
    </form>
    <?php
  }

  function print_news_item_edit($news_id) {
    if($news_id >= 0) {
      require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
      $db = connect_to_database();
      if($statement = $db->prepare("SELECT `title_text`, `body_text` FROM `news` WHERE `news_id` = ?")) {
        $statement->bind_param('s', $news_id);
        $statement->execute();
        $statement->store_result();

        $statement->bind_result($title_text, $body_text);

        echo "<h1>Edit Post</h1>";

        while($statement->fetch()) {
          print_news_item_page($news_id, $title_text,$body_text);
        }
        $statement->free_result();
        $statement->close();
      } else {
        die('prepare() failed: ' . htmlspecialchars($db->error));
      }
    } else {
      print_news_item_page(-1,"","");
    }
  }

  if($_SESSION['user']['can_blog']!=1) {
    echo "Insufficient privileges to use this action.";
    ?>
      <p class="body-paragraph"><a href="?action=admin&subaction=dashboard">Return to dashboard</a></p>
    <?php
    exit;
  } else {
    if(!isset($_GET['item'])) {
      print_news_in_table();
    } else {
      print_news_item_edit($_GET['item']);
    }
  }
?>