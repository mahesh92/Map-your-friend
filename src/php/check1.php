<?php

$text2 = $_POST['text1'];
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
        $query = "SELECT * FROM `users` where group_id = '".$text2."' ";
        $result=mysql_query($query);
        if ( mysql_num_rows($result) ){
        	echo "Valid group id";
        }
        else echo "In-valid group id";
        


?>    