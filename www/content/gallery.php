<?php
#content/home.php
require_once($_SERVER['DOCUMENT_ROOT'].'/scouts/page-template.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {
    $TPL = new PageTemplate();
    $TPL->PageTitle = "Gallery";
    $TPL->PageTitleInPage = "GALLERY";
    $TPL->ContentBody = __FILE__;
    $TPL->HeaderClass = "light-blue-subtitle";
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
<p class="body-paragraph">
  Donec lacinia at augue nec porta.   Donec eu sagittis urna, et vulputate libero.   Etiam fermentum magna a erat rutrum viverra.   Praesent ultrices vel felis et dictum.   Ut volutpat, orci ac elementum sagittis, arcu arcu venenatis eros, sed fermentum lorem lacus imperdiet ante.   Aliquam luctus rhoncus arcu ut pretium.   Nullam eget mauris hendrerit, viverra orci a, blandit nibh.   Quisque vitae ante semper, finibus massa ac, mattis lorem.   Curabitur in sapien a lectus convallis efficitur.   Sed hendrerit erat laoreet tristique congue.   Sed maximus felis lectus, eget molestie justo dictum in.   Nunc porta feugiat tortor vel convallis.   Quisque euismod et massa vel tempor.   Donec fringilla magna sit amet diam maximus, vitae venenatis libero auctor.   Vestibulum vel facilisis ante.   Praesent pellentesque lorem erat, at blandit eros auctor ut.
</p>
<p class="body-paragraph">
  Nam est ipsum, malesuada vel nulla non, convallis egestas leo.   Phasellus interdum justo arcu, ac placerat dui placerat eu.   Phasellus non neque magna.   Donec varius venenatis mollis.   Lorem ipsum dolor sit amet, consectetur adipiscing elit.   Mauris nec eros tortor.   Nunc ex nibh, accumsan at convallis ut, pellentesque quis leo.   Ut semper lacus sed eros rhoncus luctus.   Nunc fermentum tempor aliquam.   In gravida augue a diam consectetur, id laoreet nisl placerat.   Sed quis metus at lacus porttitor tincidunt.   Pellentesque lacinia eros ligula, a tempus odio euismod gravida.   Sed molestie aliquam urna.   Donec iaculis aliquet urna, quis convallis nulla vulputate ac.   Mauris tempor ultrices velit, sed fermentum nisl rhoncus ac.
</p>

<p class="body-paragraph">
  Phasellus blandit non quam non suscipit.   Etiam varius orci non hendrerit pretium.   Mauris sollicitudin euismod turpis, et elementum nisl.   Nunc sollicitudin condimentum tellus, a tempus odio consectetur ac.   Maecenas id ullamcorper lacus, vitae laoreet lectus.   In ac rhoncus urna, non semper lorem.   Fusce eu placerat erat.   Duis gravida arcu tellus, id faucibus dui molestie id.   Sed quis tempus eros, eu convallis ex.   Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
</p>
<p class="body-paragraph">
  Duis aliquet nulla tellus, id porta dui sollicitudin eu. 
  Suspendisse sagittis, sem vel luctus posuere, velit lectus volutpat nisi, vel rhoncus quam odio at enim. 
  Duis suscipit leo elementum scelerisque dignissim. 
  Aliquam elementum neque non massa tempor lacinia. 
  Sed dapibus enim velit, vel efficitur nunc venenatis vitae. 
  Curabitur a justo pretium velit vehicula condimentum. 
  Sed eget fringilla elit. 
  Fusce lacinia volutpat placerat. 
  Nunc quam risus, ultrices non facilisis maximus, cursus vel tellus. 
  Nunc sit amet lacus tincidunt, lobortis sapien id, aliquam lectus. 
  Nulla blandit fringilla ante, a ultrices turpis iaculis vel. 
  Nunc eget convallis eros, at tempor tortor. 
  Quisque et ultricies orci, ac suscipit ipsum.
</p>
<p class="body-paragraph">
  Donec lacinia at augue nec porta. 
  Donec eu sagittis urna, et vulputate libero. 
  Etiam fermentum magna a erat rutrum viverra. 
  Praesent ultrices vel felis et dictum. 
  Ut volutpat, orci ac elementum sagittis, arcu arcu venenatis eros, sed fermentum lorem lacus imperdiet ante. 
  Aliquam luctus rhoncus arcu ut pretium. 
  Nullam eget mauris hendrerit, viverra orci a, blandit nibh. 
  Quisque vitae ante semper, finibus massa ac, mattis lorem. 
  Curabitur in sapien a lectus convallis efficitur. 
  Sed hendrerit erat laoreet tristique congue. 
  Sed maximus felis lectus, eget molestie justo dictum in. 
  Nunc porta feugiat tortor vel convallis. 
  Quisque euismod et massa vel tempor. 
  Donec fringilla magna sit amet diam maximus, vitae venenatis libero auctor. 
  Vestibulum vel facilisis ante. 
  Praesent pellentesque lorem erat, at blandit eros auctor ut.
</p>