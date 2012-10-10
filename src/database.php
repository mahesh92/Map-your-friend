<?php
    $connection = mysql_connect("localhost","root","");
    if(!$connection)
    {
        die("Database connection failed cc: ".mysql_error());
    }
    $db = mysql_select_db("fees0_11514941_MFY",$connection);
    if(!$db)
    {
        die("Database connection faileddd : ".mysql_error());   
    }  
    $result = mysql_query("SELECT * FROM  `users` LIMIT 0 , 30",$connection);
    if(!$result)
    {
        die("database query failed:".mysql_error());
    }
    while($row = mysql_fetch_array($result))
    {
        echo $row[0]."  ".$row[1]."  ".$row[2];
        echo "<br/>";
    }
    $name = $_GET['name'];
    $lat = $_GET['lat'];
    $lng = $_GET['long'];
    if($lat!=null&&$lng!=null)
    {
        mysql_query("INSERT INTO  `users` (`name` ,`latitude` ,`longitude`)VALUES ('".$name."',  '".$lat."',  '".$lng."')");
    }
    else
    {
        mysql_query("DELETE from users where name='".$name."'");
    }
?>
