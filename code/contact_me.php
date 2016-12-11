<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
       echo "Inputs not correct!  Please fill out the form properly and try again.";
       return false;
   }

// Collect the user's input
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'kevinjackswi@gmail.com';
$email_subject = "Email sent through portfolio website by $name";
$email_body = "You have received an email message through your personal portfolio website.\n\n"."Message is as follows:\n\nSent From: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@kevinjackswi.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

echo "Message has been sent successfully!";
// var_dump($_POST); // For testing
return true;			
?>