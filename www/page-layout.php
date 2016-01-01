<?php require_once('page-template.php');?>

<html>
  <head>
    <link href="default.css" rel="stylesheet" type="text/css">
    <title><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; } ?> - 4th Moreton Scout Group</title>
  </head>
  <body>
    <div id="main-container">
      <div id="sidebar-wrapper">
        <div id="sidebar">
          <a href="/scouts/" id="sidebar-title-link">
            <div id="sidebar-titlebar">
              <span id="sidebar-main-title">4TH MORETON</span><br>SCOUT GROUP
            </div>
          </a>
          <a href="?action=home" class="sidebar-link">
            <div id="pale-green-sidebar" class="sidebar-link-div">
              HOME
            </div>
          </a>
          <a href="?action=scouts" class="sidebar-link">
            <div id="yellow-sidebar" class="sidebar-link-div">
              SCOUTS
            </div>
          </a>
          <a href="?action=cubs" class="sidebar-link">
            <div id="orange-sidebar" class="sidebar-link-div">
              CUBS
            </div>
          </a>
          <a href="?action=beavers" class="sidebar-link">
            <div id="red-sidebar" class="sidebar-link-div">
              BEAVERS
            </div>
          </a>
          <a href="?action=gallery" class="sidebar-link">
            <div id="light-blue-sidebar" class="sidebar-link-div">
              GALLERY
            </div>
          </a>
          <a href="?action=news" class="sidebar-link">
            <div id="dark-blue-sidebar" class="sidebar-link-div">
              NEWS & EVENTS
            </div>
          </a>
          <a href="?action=about" class="sidebar-link">
            <div id="purple-sidebar" class="sidebar-link-div">
              ABOUT
            </div>
          </a>
        </div>
        <a href="http://scouts.org.uk/">
          <img src="images/scout-logo-white.png" alt="Scout Logo" class="sidebar-img">
        </a>
        <div class="sidebar-text">Scouting Since 1928</div>
      </div>
      <div id="content-wrapper">
        <div id="content-scroll-wrapper">
          <div id="subtitle-box" class=<?php if(isset($TPL->HeaderClass)) { echo "\""; echo $TPL->HeaderClass; echo "\"";}?>>
            <span id="subtitle"><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitleInPage; } ?></span>
            <span><br>&nbsp;</span>
          </div>
          <div id="content">
            <?php if(isset($TPL->ContentBody)) { include $TPL->ContentBody; } ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>