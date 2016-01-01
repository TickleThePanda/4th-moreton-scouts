<h1>Dashboard</h1>

<p>You are logged in.</p>

<?php   
  if($_SESSION['user']['can_blog']==1) {
?>
    <p><a href="?action=admin&subaction=edit-news">Edit News</a></p>
<?php 
  }
  if($_SESSION['user']['can_event']==1) {
?>
    <p><a href="?action=admin&subaction=edit-events">Edit Events</a></p>
<?php 
  }
  if($_SESSION['user']['can_photos']==1) {
?>
    <p><a href="?action=admin&subaction=edit-gallery">Edit Gallery</a></p>
<?php 
  }
  if($_SESSION['user']['can_user']==1) {
?>
    <p><a href="?action=admin&subaction=edit-users">Edit Users</a></p>
<?php 
  }
?>
<br>
<hr>
<a href="?action=admin&logout=true">Logout</a>