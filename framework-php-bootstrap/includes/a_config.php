<?php
switch ($_SERVER["SCRIPT_NAME"]) {
	case "/index.php":
		$CURRENT_PAGE = "Index"; 
		$PAGE_TITLE = "Home - EleTickets";
		break;
	case "/cesta.php":
		$CURRENT_PAGE = "Cesta"; 
		$PAGE_TITLE = "Cesta - EleTickets";
		break;
	case "/contact.php":
		$CURRENT_PAGE = "Contacto"; 
		$PAGE_TITLE = "Contactar - EleTickets";
		break;
	case "/login.php":
		$CURRENT_PAGE = "Login"; 
		$PAGE_TITLE = "Iniciar Sesion - EleTickets";
		break;
	case "/micuenta.php":
		$CURRENT_PAGE = "Mi cuenta"; 
		$PAGE_TITLE = "Mi cuenta - EleTickets";
		break;
	case "/registro.php":
		$CURRENT_PAGE = "Registro"; 
		$PAGE_TITLE = "Registro - EleTickets";
		break;
	case "/salas.php":
		$CURRENT_PAGE = "Salas"; 
		$PAGE_TITLE = "Salas - EleTickets";
		break;
	case "/conciertos.php":
		$CURRENT_PAGE = "Conciertos"; 
		$PAGE_TITLE = "Conciertos - EleTickets";
		break;
	case "/terminosYcondiciones.php":
		$CURRENT_PAGE = "Términos y Condiciones"; 
		$PAGE_TITLE = "Términos y Condiciones - EleTickets";
		break;
	case "/eventos.php":
		$CURRENT_PAGE = "Eventos - EleTickets"; 
		$PAGE_TITLE = "Eventos - EleTickets";
		break;
	default:
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "No te quedes sin tus entradas - EleTickets";
}

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('913628667611-jhg70pu4n56umq4hu8kudgt2apjb9mhi.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:5555/index.php');


$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();


$login_button = '';
?>