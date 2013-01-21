<!DOCTYPE html>
<html>
  <?php
    $name = $_POST['name'];
    $groupid = $_POST['groupid'];
  ?>
  <head>
<?php include('core.inc.php'); ?>
    <script src="../js/jquery.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css" />
    <?php include("geodata.php"); ?>

  </head>
  <body style="font: 75% Lucida Grande, Trebuchet MS;margin:0">
    <div id="content" style="height: 400px"></div>
    <div id="list"></div>
 
    <div id="messages">
    
    </div><!-- Messages -->
  <div id="input">
      <div id="feedback"></div>
      <form action="#" method="post" id="form_input">
        <lable>Enter Name:<input type="text" name="sender" id="sender"/></lable>
        <br /><lable>Enter Message:<br /><textarea id="message" cols="25" rows="4"></textarea></lable><br />
        <input type="submit" name="send" id="send" value="Send Message"/>
      </form>
    </div><!-- Input -->
  
    <script type="text/javascript" src="../js/auto_chat.js"></script>
    <script type="text/javascript" src="../js/send.js"></script>
    
    
  </body>
</html>
