<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@callebitcoin.es'; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE FORM TO SEND MAIL TO*
$email_subject = "#CalleBitcoin consulta web de:  $name";
$email_body = "Has recibido un mensaje de Calle Bitcoin.\n\n"."Esta es la consulta:\n\Nombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nConsulta:\n$message";
$headers = "From: noreply@callebitcoin.es\n"; // *REPLACE WITH THE EMAIL ADDRESS YOU WANT THE MESSAGE TO BE FROM*
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>