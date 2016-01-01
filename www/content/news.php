<?php
#content/home.php
require_once($_SERVER['DOCUMENT_ROOT'].'/scouts/page-template.php');
require_once("news/get-news.php");
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "News & Events";
    $TPL->PageTitleInPage = "NEWS & EVENTS";
    $TPL->ContentBody = __FILE__;
    $TPL->HeaderClass = "dark-blue-subtitle";
    include $_SERVER['DOCUMENT_ROOT'].'/scouts/page-layout.php';
    exit;
}

if (!isset($_GET['subaction'])) {
  ?>
  <h1>Latest News</h1>
  <?php
    print_news_feed(0, 4);
  ?>
  <p class="body_paragraph"><a href="?action=news&subaction=news&page=0">View all news</a></p>

  <br>
  <h1>Upcoming Events</h1>
  <div class="latest-news">
    <h3 class="latest-news-title">Item Title</h3> <h5 class="date-time-title">HH:MM dd/mm/yyyy - HH:MM dd/mm/yyyy</h5>
    <p class="body-paragraph">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Aliquam fringilla fringilla ex, id vestibulum leo convallis ut.
      Aliquam volutpat est in leo fringilla placerat.
    </p>
  </div>
  <div class="latest-news">
    <h3 class="latest-news-title">Item Title</h3> <h5 class="date-time-title">HH:MM-HH:MM dd/mm/yyyy</h5>
    <p class="body-paragraph">
      Donec nisi odio, molestie sed malesuada nec, consequat eget tortor.
      Proin gravida dui nec ultricies euismod.
      Ut nunc massa, posuere id tincidunt eget, finibus quis quam.
    </p>
  </div>
  <div class="latest-news">
    <h3 class="latest-news-title">Item Title</h3> <h5 class="date-time-title">HH:MM dd/mm/yyyy - HH:MM dd/mm/yyyy</h5>
    <p class="body-paragraph">
      Vivamus placerat metus eget nisl ultricies tempus.
      Phasellus semper erat quis enim iaculis finibus.
      Fusce ac dolor quis nisi tristique malesuada ut eu massa.
    </p>
  </div>
  <div class="latest-news">
    <h3 class="latest-news-title">Item Title</h3> <h5 class="date-time-title">HH:MM dd/mm/yyyy - HH:MM dd/mm/yyyy</h5>
    <p class="body-paragraph">
      Nulla orci tellus, dictum ac lobortis et, porta nec justo.
      In ultrices magna a urna pulvinar, eget consequat quam scelerisque.
      Duis eleifend mollis nulla, cursus elementum massa lobortis vel.
    </p>
  </div>
  <?php
} else {
  if($_GET['subaction'] == "news" && isset($_GET['item'])) {
    $item = $_GET['item'];
    print_news_item($item);
  }
  if($_GET['subaction'] == "news" && isset($_GET['page'])) {
    $page_number = $_GET['page'];
    echo "<h1>Latest News</h1>";
    print_news_feed_page($page_number);
  }
}
?>