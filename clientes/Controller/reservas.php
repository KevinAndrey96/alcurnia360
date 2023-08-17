<?php
session_start();

$Pasajeros=$_POST["Pasajeros"];
$Edades=$_POST["Edades"];
$Ida=$_POST["Ida"];
$Vuelta=$_POST["Vuelta"];
$Destino=$_POST["Destino"];
$Telefono=$_POST["Telefono"];
$Pasajeros=$_POST["Pasajeros"];
$Tiquete=$_POST["Tiquete"];
$Alquiler=$_POST["Alquiler"];
$Plan=$_POST["Plan"];

$Nombre=$_SESSION["Nombre"];
$Correo=$_SESSION["Usuario"];

$Incluye="";

if($Tiquete=="on")
	$Incluye.=" -Tiquete aéreo-";
if($Alquiler=="on")
	$Incluye.=" -Alquiler de auto-";
if($Plan=="on")
	$Incluye.=" -Plan con excursiones-";


$Host="alcurnia360.com.co";
$From="no-responder@alcurnia360.com.co";
$Password="8jXQufprYbP";
$Business="Alcurnia360";
$Web="https://alcurnia360.com.co";
$To="handshake@alcurnia360.com.co";
$Subject="Nueva solicitud de reserva";

$Texto="Solicitud de reserva.<br><br><br>Se ha realizado una nueva solicitud de reserva desde la plataforma web de clientes.<br><br>Nombre: ".$Nombre."<br>Correo: ".$Correo."<br>Teléfono: ".$Telefono."<br><br>Pasajeros: ".$Pasajeros."<br>Edades: ".$Edades."<br>Fecha de salida: ".$Ida." / Fecha de regreso: ".$Vuelta." con destino a <b>".$Destino."</b><br>Se solicita con: ".$Incluye."<br><br><br><br>alcurnia360.com.co";

$Message=$Texto;


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://alcurnia360.com.co/clientes/Mailer.php");
curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "Host=$Host&From=$From&Password=$Password&Business=$Business&Web=$Web&Subject=$Subject&Message=".$Message."&To=$To");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);
curl_close ($ch);

?>
<script type="text/javascript">
	window.alert("En breve un asesor de viajes de Alcurnia360 se contactará contigo");
	window.location="https://alcurnia360.com.co/clientes/";
</script>