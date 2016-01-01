<?php
  #content/home.php
  require_once($_SERVER['DOCUMENT_ROOT'].'/scouts/page-template.php');
  # trick to execute 1st time, but not 2nd so you don't have an inf loop
  if (!isset($TPL)) {
      $TPL = new PageTemplate();
      $TPL->PageTitle = "Admin";
      $TPL->PageTitleInPage = "ADMIN";
      $TPL->ContentBody = __FILE__;
      $TPL->HeaderClass = "grey-subtitle";
      include $_SERVER['DOCUMENT_ROOT'].'/scouts/page-layout.php';
      exit;
  }

  if(is_logged_on()){
    $subaction = basename($_GET['subaction']);
    if(file_exists("./content/admin/$subaction.php")){
      include "admin/$subaction.php";
    } else {
      ?>
        <p class="body-paragraph">Error 404: the page that you are looking for cannot be found</p>
        <p class="body-paragraph"><a href="?action=admin&subaction=dashboard">Return to dashboard</a></p>
      <?
    }
  }else{
    include 'login/login_page.php';
    generate_login_page(is_login_failed());
  }
?>