<?php
//sumbission data  
    $ipaddress = $_SERVER['REMOTE_ADDR'];  
    $date = date('d/m/Y');  
    $time = date('H:i:s');  
  
//form data  
    $name = $_POST['name'];  
    $email = $_POST['email'];   

//headers + content
	$headers = "From: {$email}" . "\r\n";  
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";  
      
	$emailbody = "<p>I'm coming to your party!</p> 
                      <p>Name: <strong>{$name}</strong>. </p>
                      <p>Email: <strong>{$email}</strong>. </p>
                      <p>Details: IP {$ipaddress} on {$date} at {$time}</p>";  

//send message 
	mail("me@youremail.com","I'm coming to your party!",$emailbody,$headers); 
?>