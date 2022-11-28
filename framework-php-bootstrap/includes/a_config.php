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
?>