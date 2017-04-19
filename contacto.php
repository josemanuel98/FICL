<?php

$message = "LLene todos los campos";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=trim($_POST["Nombre"]);
$email=trim($_POST["Email"]);
$message=trim($_POST["Mensaje"]);


	if($name == "" OR $email == "" OR $message == ""){
        header("Location: contacto.php?status=noInf");
		exit;
	}

	foreach ($_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
                    header("Location: contacto.php?status=badInf");
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
                header("Location: contacto.php?status=badMail");
                exit;
		}


	$email_body="";
	$email_body=$email_body . "Nombre: " . $name . "<br>";
	$email_body=$email_body . "Email: " . $email . "<br>";
	$email_body=$email_body . "Mensaje: " . $message . "<br>";


	$mail->SetFrom($email, $name);
	$myMail="josemanuelmartinezlopez@live.com.mx";
	$mail->AddAddress($myMail, "FICL");
	$mail->Subject="Contacto | " . $name;
	$mail->MSgHTML($email_body);

	if(!$mail->Send()){
        header("Location: contacto.php?status=error");
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

        else if(isset($_GET["status"]) && $_GET["status"] == "noInf"){
            $message = "Debe llenar todos los campos";
            include("inc/contactoForm.php");
        }

        else if(isset($_GET["status"]) && $_GET["status"] == "badInf"){
            $message = "Hubo un problema con la informacion ingresada";
            include("inc/contactoForm.php");
        }

        else if(isset($_GET["status"]) && $_GET["status"] == "badMail"){
            $message = "Debe especificar una direccion de correo valida";
            include("inc/contactoForm.php");
        }

        else if(isset($_GET["status"]) && $_GET["status"] == "error"){
            echo '<div id="content">';
            echo "<h1>Lo sentimos, algo salió mal, ¿lo intentamos más tarde?</h1>";
            echo '</div>';
            echo '<br><br><br><br><br><br><br>';
        }

		else{
            include("inc/contactoForm.php");
  } ?>
<?php include("inc/footer.php"); ?>