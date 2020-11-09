<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='valet.antoine@gmail.com';
		$subject='demande de contact';
		$message="Nom :".$name."\n"."Telephone :".$phone."\n"."vous a demandé :"."\n\n".$msg;
		$headers="De: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Message envoyé! Merci"." ".$name.", nous revenons vers vous le plus rapidemment possible</h1>";
		}
		else{
			echo "Petite erreur!";
		}
	}
?>