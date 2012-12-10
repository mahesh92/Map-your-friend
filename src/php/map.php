<!DOCTYPE html>
<html>
  <?php
    $name = $_POST['name'];
  ?>
  <head>
    <script src="../js/jquery.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <?php include("geodata.php"); ?>
  </head>
  <body style="font: 75% Lucida Grande, Trebuchet MS;margin:0">
    <div id="content" style="height: 450px"></div>
    <div id="list"></div>
  </body>
</html>
