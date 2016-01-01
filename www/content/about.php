<?php
#content/home.php
require_once($_SERVER['DOCUMENT_ROOT'].'/scouts/page-template.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "About";
    $TPL->PageTitleInPage = "ABOUT";
    $TPL->ContentBody = __FILE__;
    $TPL->HeaderClass = "purple-subtitle";
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
<h1>Location</h1>
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1189.563128337983!2d-3.108761925176393!3d53.39468133378298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4th+Moreton+Scout+Group!5e0!3m2!1sen!2suk!4v1411301075118" width="100%" height="450" frameborder="0" style="border:0"></iframe>