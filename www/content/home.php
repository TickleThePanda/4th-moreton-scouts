<?php
#content/home.php
require_once($_SERVER['DOCUMENT_ROOT'].'/scouts/page-template.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Home";
    $TPL->PageTitleInPage = "HOME";
    $TPL->ContentBody = __FILE__;
    $TPL->HeaderClass = "pale-green-subtitle";
    include $_SERVER['DOCUMENT_ROOT'].'/scouts/page-layout.php';
    exit;
}
?>
<p class="body-paragraph">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
  Aliquam fringilla fringilla ex, id vestibulum leo convallis ut.
  Aliquam volutpat est in leo fringilla placerat.
  Donec nisi odio, molestie sed malesuada nec, consequat eget tortor.
  Proin gravida dui nec ultricies euismod.   Ut nunc massa, posuere id tincidunt eget, finibus quis quam.   Vivamus placerat metus eget nisl ultricies tempus.   Phasellus semper erat quis enim iaculis finibus.   Fusce ac dolor quis nisi tristique malesuada ut eu massa.   Nulla orci tellus, dictum ac lobortis et, porta nec justo.   In ultrices magna a urna pulvinar, eget consequat quam scelerisque.   Duis eleifend mollis nulla, cursus elementum massa lobortis vel.
</p>
<p class="body-paragraph">
  Duis aliquet nulla tellus, id porta dui sollicitudin eu.   Suspendisse sagittis, sem vel luctus posuere, velit lectus volutpat nisi, vel rhoncus quam odio at enim.   Duis suscipit leo elementum scelerisque dignissim.   Aliquam elementum neque non massa tempor lacinia.   Sed dapibus enim velit, vel efficitur nunc venenatis vitae.   Curabitur a justo pretium velit vehicula condimentum.   Sed eget fringilla elit.   Fusce lacinia volutpat placerat.   Nunc quam risus, ultrices non facilisis maximus, cursus vel tellus.   Nunc sit amet lacus tincidunt, lobortis sapien id, aliquam lectus.   Nulla blandit fringilla ante, a ultrices turpis iaculis vel.   Nunc eget convallis eros, at tempor tortor.   Quisque et ultricies orci, ac suscipit ipsum.
</p>