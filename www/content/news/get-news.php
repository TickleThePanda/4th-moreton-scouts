<?php

 function print_news_feed_page($page_number) {
  print_news_feed($page_number, 10);
  $n_rows = get_number_news();
  if($page_number * 10 + 10 < $n_rows) {
   ?>
    <a href="?action=news&subaction=news&page=<?php echo $page_number + 1;?>">
     <div class="next_page">page <?php echo $page_number + 2;?> -&gt;</div>
    </a>
   <?php
  }
  if($page_number > 0) {
   ?>
    <a href="?action=news&subaction=news&page=<?php echo $page_number - 1;?>">
     <div class="prev_page">&lt;- page <?php echo $page_number;?></div>
    </a>
   <?php
  }
 }

 function get_number_news() {
  require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
  $db = connect_to_database();
  if($statement = $db->prepare("SELECT COUNT(*) FROM `news` WHERE `visible` = 1")) {
   $statement->execute();
   $statement->store_result();

   $statement->bind_result($count);

   while($statement->fetch()) {
    $full_count = $count;
   }
   $statement->free_result();
   $statement->close();
  } else {
   die('prepare() failed: ' . htmlspecialchars($db->error));
  }
  return $full_count;
 }

 function print_news_feed_item($news_id, $title_text, $body_text) {
  if(strlen($body_text) > 144) {
   $body_text_shortened = substr($body_text, 0 , 144);
   $body_text_shortened = rtrim(rtrim($body_text_shortened), ",.\t\r\n")."...";
  } else {
   $body_text_shortened = $body_text;
  }
  ?>
  <a class="latest-news-link" href="?action=news&subaction=news&item=<?php echo $news_id; ?>">
   <div class="latest-news">
    <h3 class="latest-news-title"><?php echo $title_text;?></h3>
    <p class="body-paragraph">
     <?php echo $body_text_shortened; ?>
    </p>
   </div>
  </a>
  <?php
 }

 function print_news_feed($page, $n_results) {
  $first_item = $page * $n_results;
  require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
  $db = connect_to_database();
  if($statement = $db->prepare("SELECT `news_id`, `title_text`, `body_text` FROM `news` WHERE `visible` = 1 ORDER BY `posted_time` DESC LIMIT ?, ?")) {
   $statement->bind_param("ii", $first_item, $n_results);
   $statement->execute();
   $statement->store_result();

   $statement->bind_result($news_id, $title_text, $body_text);

   while($statement->fetch()) {
    print_news_feed_item($news_id, $title_text, $body_text);
   }
   $statement->free_result();
   $statement->close();
  } else {
   die('prepare() failed: ' . htmlspecialchars($db->error));
  }
 }

 function print_news_item_full($id, $title_text, $body_text, $posted_time, $edit_time, $pu_full_name, $eu_full_name) {
 ?>
  <h1><?php echo $title_text;?></h3>
   <p class="body-paragraph">
    <?php echo $body_text; ?>
   </p>
   <p class="item_meta">
    Posted by<?php
     echo " <span class=\"bold\">".$pu_full_name."</span> at ".$posted_time.".";
     if($posted_time!=$edit_time) {
      echo "<br>Edited by <span class=\"bold\">".$eu_full_name."</span> at ".$edit_time.".";
     }
    ?>
   </p>
  </div>
 <?php
 }

 function print_news_item($id) {
  require_once $_SERVER['DOCUMENT_ROOT'].'/../connect_mysql.php';
  $db = connect_to_database();
  if($statement = $db->prepare("SELECT `title_text`, `body_text`, `posted_time`, `edit_time`, `pu`.`user_full_name` AS `pu_name` , `eu`.`user_full_name` AS `eu_name` FROM `news` `n` INNER JOIN (SELECT `user_id` , `user_full_name` FROM `users`) `pu` ON `n`.`post_user_id` = `pu`.`user_id` INNER JOIN (SELECT `user_id` , `user_full_name` FROM `users`) `eu` ON `n`.`edit_user_id` = `eu`.`user_id` WHERE `news_id` = ? AND `visible` = 1")) {
   $statement->bind_param("i", $id);
   $statement->execute();
   $statement->store_result();

   $statement->bind_result($title_text, $body_text, $posted_time, $edit_time, $pu_full_name, $eu_full_name);

   while($statement->fetch()) {
    print_news_item_full($id, $title_text, $body_text, $posted_time, $edit_time, $pu_full_name, $eu_full_name);
   }
   $statement->free_result();
   $statement->close();
  } else {
   die('prepare() failed: ' . htmlspecialchars($db->error));
  }
 }

