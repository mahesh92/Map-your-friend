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
    $message = "Welcome to Map your friend.\n You have just created a group " .$group ."to locate and communicate to your friends. \nYour details are :\nNickname:".$nickname."\nGroup Name:".$group."\nGroup ID:".$group_id." \n . You now can join your group and add friends to your group . Go join and invite friends to start. ";
    $subject = "Thank you for registering to Map your friend";
    mail($email,$subject,$message,"From:Map Your Friend Team<no-reply@myf.org>");
    if(!$result){
        echo "Failed";
    }
    else{
      echo "SUCCESS";
    }
}
?>
