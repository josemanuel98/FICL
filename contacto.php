<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=trim($_POST["Nombre"]);
$email=trim($_POST["Email"]);
$message=trim($_POST["Mensaje"]);


	if($name == "" OR $email == "" OR $message == ""){

		echo "Debe llenar todos los campos";
		exit;

	}

	foreach ($_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
					echo "Hubo un problema con la informacion ingresada";
					exit;
			}
	}

	if ($_POST["direccion"] != "") {
			echo "Los robots no se comunican con humanos";
			exit;
	}
	
	require_once("inc/phpMailerFolder/class.phpmailer.php");

	$mail = new PHPMailer();

		if(!$mail->ValidateAddress($email)){

				echo "Debe especificar una direccion de correo valida";
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
	<div id="content">
            <!--<?php include("inc/cintas.php"); ?>-->
            <form action="contacto.php" method="post">
                <fieldset>
                    <label for="Nombre">Nombre: </label>
                    <input type="text" name="Nombre" id="Nombre">
                    <label for="email">Email: </label>
                    <input type="email" name="Email" id="Email">
                    <label for="Asunto">Asunto: </label>
                    <input type="text" name="Asunto" id="Asunto">
                    <label for="Mensaje">¿Qué nos quieres contar?</label>
                    <textarea name="Mensaje" rows="10" cols="100" id="Mensaje"></textarea>
                    <div id="secret">
		              <input type="text" name="direccion" id="direccion">
		            </div>
                    <input type="submit" value="Enviar" value="send">
                </fieldset>
            </form>
        </div>

 <?php } ?>
<?php include("inc/footer.php"); ?>