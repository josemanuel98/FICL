<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=trim($_POST["nombre"]);
$email=trim($_POST["email"]);
$message=trim($_POST["mensaje"]);


	if($name == "" OR $email == "" OR $message == ""){

		echo "You must specify a value for name, email and message.";
		exit;

	}

	foreach ($_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
					echo "There was a problem with the information you entered.";
					exit;
			}
	}

	if ($_POST["direccion"] != "") {
			echo "Your form submission has an errror.";
			exit;
	}
	
	require_once("inc/phpMailerFolder/class.phpmailer.php");

	$mail = new PHPMailer();

		if(!$mail->ValidateAddress($email)){

				echo "You must specify a valid email address.";
		}


	$email_body="";
	$email_body=$email_body . "Nombre: " . $name . "<br>";
	$email_body=$email_body . "Email: " . $email . "<br>";
	$email_body=$email_body . "Mensaje: " . $message . "<br>";


	$mail->SetFrom($email, $name);
	$myMail="josemanuelmartinezlopez@live.com.mx";
	$mail->AddAddress($myMail, "Hello_World");
	$mail->Subject="Hello World Form Submission | " . $name;
	$mail->MSgHTML($email_body);

	if(!$mail->Send()){

		echo "There was a problem sending the email: " . $mail->ErrorInfo;
		exit;
	}

	header("Location: contacto.php?status=gracias");
	exit;
}
?>



<?php 
$title = "contacto";
$description = "Sitio web del Festival Internacional de Cine de León";
?>

<?php include("inc/header.php") ?>

<?php 
		if(isset($_GET["status"]) && $_GET["status"] == "gracias"){

			echo "<p>Gracias por tener interés en nosotros, estaremos en contacto.</p>";
		}

		else{ ?>
	<form action="contacto.php" method="post">

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre">

		<label for="email">e-mail:</label>
		<input type="text" name="email" id="email">

		<label for="mensaje">Mensaje:</label>
		<textarea name="mensaje" id="mensaje"></textarea> 

		<div id="secret">
		<input type="text" name="direccion" id="direccion">
		</div>

		<input type="submit" value="Enviar">

	</form>

 <?php } ?>
<?php include("inc/footer.php"); ?>