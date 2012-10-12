<?php
    $connection = mysql_connect("localhost","root","");
    if(!$connection)
    {
        die("Database connection failed cc: ".mysql_error());
    }
    $db = mysql_select_db('MYF',$connection);
    if(!$db)
    {
        die("Database connection faileddd : ".mysql_error());   
    }
  
    if(isset($_GET['name'])&&isset($_GET['lat'])&&isset($_GET['lng']))
    {
        mysql_query("INSERT INTO  `users` (`name` ,`latitude` ,`longitude`)VALUES ('".$_GET['name']."',  '".$_GET['lat']."',  '".$_GET['lng']."')");
        $query = "SELECT * FROM `users`";
        $to_encode = array(); 
        $result=mysql_query($query);
        while($row = mysql_fetch_assoc($result))
        {
            $to_encode[] = $row;
        }
        echo json_encode($to_encode);
    }
    else if(isset($_GET['name'])&&!isset($_GET['lat'])&&!isset($_GET['lng']))
    {
        mysql_query("DELETE from users where name='".$_GET['name']."'");
    }
?>
