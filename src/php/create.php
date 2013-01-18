<?php
if(isset($_POST['nickname']) && isset($_POST['email']) && isset($_POST['group'])){
    include('database.php');
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $group = $_POST['group'];
    $rand='';
    $data = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    do{
        $rand = '';
        for($i=0;$i<10;$i++){
	    $rand = $rand.$data[rand(0,61)];
        }
        $group_id = $group.$rand;
        $result = mysql_query("select * from users where group_id='".$group_id."'");
        $row = mysql_num_rows($result);
    }while($row!=0);
    $result = mysql_query("INSERT INTO `MYF`.`users` (`group_id`, `group_name`, `name`,`email`, `latitude`, `longitude`) VALUES ('".$group_id."','".$group."','".$nickname."','".$email."', '0', '0')");
    $message = "Thank you registering in Map your friend.\nYour details are :\nNickname:".$nickname."\nGroup Name:".$group."\nGroup ID:".$group_id."";
    $subject = "Thankyou for registering into Map your friend";
    mail($email,$subject,$message,"From:Map Your Friend Team<no-reply@myf.org>");
    if(!$result){
        echo "Failed";
    }
    else{
      echo "SUCCESS";
    }
}
?>
