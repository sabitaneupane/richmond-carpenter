<?php 

	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$message=$_POST['message'];


	$messages = '<html><body>';
	$messages .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$messages .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
	$messages .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
	$messages .= "<tr><td><strong>Message:</strong> </td><td>" . htmlentities($_POST['message']) . "</td></tr>";
	$messages .= "</table>";
	$messages .= "</body></html>";
    	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


	$headers .= 'From:'.$email . "\r\n";
	$to="sabita.infoxit@gmail.com";
 	 mail($to,$subject,$message,$headers);
	echo json_encode(array('msg'=>'1')) ;
	
?>