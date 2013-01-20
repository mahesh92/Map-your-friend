<?php
include('database.php');
    if(isset($_GET['groupid'])&&($_GET['name'])&&isset($_GET['lat'])&&isset($_GET['lng']))
    {
        mysql_query("UPDATE `users` SET  `latitude` = '".$_GET['lat']."' , `longitude` = '".$_GET['lng']."' WHERE `group_name`='".$_GET['groupid']."' AND `name` = '".$_GET['name']."' ");
        $query = "SELECT * FROM `users` where group_name = '".$_GET['groupid']."' ";
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
     //   mysql_query("DELETE from users where group_name = '".$_GET['groupid']."' and name='".$_GET['name']."' ");
    }
?>
