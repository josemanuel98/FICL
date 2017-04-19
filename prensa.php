<?php

$message = "LLene todos los campos";

if($_SERVER["REQUEST_METHOD"]=="POST"){

$nombre=trim($_POST["Nombre"]);
$apellido=trim($_POST["Apellido"]);
$medio=trim($_POST["Medio"]);
$cargo=trim($_POST["Cargo"]);
$telefono=trim($_POST["Telefono"]);
$email=trim($_POST["Email"]);


	if($nombre == "" OR $email == "" OR $apellido == "" OR $medio == "" OR $cargo == "" OR $telefono == ""){
        header("Location: prensa.php?status=noInf");
		exit;
	}

	foreach ($_POST as $value) {
			if (stripos($value, 'Content-Type:') !== FALSE) {
                    header("Location: prensa.php?status=badInf");
					exit;
			}
	}

	if ($_POST["direccion"] != "") {
			echo "Los robots no pueden ser parte de la prensa";
			exit;
	}
	
	require_once("inc/phpMailerFolder/class.phpmailer.php");

	$mail = new PHPMailer();

		if(!$mail->ValidateAddress($email)){
                header("Location: prensa.php?status=badMail");
                exit;
		}


	$email_body="";
	$email_body=$email_body . "Nombre: " . $nombre . "<br>";
    $email_body=$email_body . "Apellido(s): " . $apellido . "<br>";
    $email_body=$email_body . "Medio: " . $medio . "<br>";
    $email_body=$email_body . "Cargo: " . $cargo . "<br>";
    $email_body=$email_body . "Telefono: " . $telefono . "<br>";
	$email_body=$email_body . "Email: " . $email . "<br>";


	$mail->SetFrom($email, $name);
	$myMail="josemanuelmartinezlopez@live.com.mx";
	$mail->AddAddress($myMail, "FICL");
	$mail->Subject="Acreditación de Prensa | " . $name . " " . $apellido;
	$mail->MSgHTML($email_body);

	if(!$mail->Send()){
        header("Location: prensa.php?status=error");
		exit;
	}

	header("Location: prensa.php?status=gracias");
	exit;
}
?>

<?php 
$title = "Prensa";
$description = "Sitio web del Festival Internacional de Cine de León";
?>

<?php include("inc/header.php") ?>
        <div id="content">
            <div id="prensa">
                <p>Si desea asistir como un medio de comunicación acreditado, por favor llene el formulario de esta pagina,</p> <p>será un placer recibirte en nuestro evento y proporcionarte toda la información necesaria,</p> <p>dudas a ficleon.medios@gmail.com</p>
                    <?php 
		if(isset($_GET["status"]) && $_GET["status"] == "gracias"){

			echo "<p>Gracias por tener interés en nosotros, estaremos en contacto.</p>";
		}

        else if(isset($_GET["status"]) && $_GET["status"] == "noInf"){
            $message = "Debe llenar todos los campos";
            include("inc/prensaForm.php");
        }

        else if(isset($_GET["status"]) && $_GET["status"] == "badInf"){
            $message = "Hubo un problema con la informacion ingresada";
            include("inc/prensaForm.php");
        }

        else if(isset($_GET["status"]) && $_GET["status"] == "badMail"){
            $message = "Debe especificar una direccion de correo valida";
            include("inc/prensaForm.php");
        }

        else if(isset($_GET["status"]) && $_GET["status"] == "error"){
            echo '<div id="content">';
            echo "<h1>Lo sentimos, algo salió mal, ¿lo intentamos más tarde?</h1>";
            echo '</div>';
            echo '<br><br><br><br><br><br><br>';
        }

		else{
            include("inc/prensaForm.php");
  } ?>
            </div>
        </div>
<?php include("inc/footer.php"); ?>