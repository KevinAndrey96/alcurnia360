<?php
include_once "../controlador/PDO.php";
$Nombre=$_POST["Nombre"];
$Descripcion=$_POST["Descripcion"];
$Precio=$_POST["Precio"];
$Moneda=$_POST["Moneda"];
$Fecha=$_POST["Fecha"];
$Vigencia=$_POST["Vigencia"];
$Tipo=$_POST["Tipo"];
$Traslados=$_POST["Traslados"];
if($Traslados=="on")
{
	$Traslados=1;
}
else
{
	$Traslados=0;
}
$Guia=$_POST["Guia"];
if($Guia=="on")
{
	$Guia=1;
}
else
{
	$Guia=0;
}
$Desayuno=$_POST["Desayuno"];
if($Desayuno=="on")
{
	$Desayuno=1;
}
else
{
	$Desayuno=0;
}
$Sturisticos=$_POST["Sturisticos"];
if($Sturisticos=="on")
{
	$Sturisticos=1;
}
else
{
	$Sturisticos=0;
}
$Hotel=$_POST["Hotel"];
if($Hotel=="on")
{
	$Hotel=1;
}
else
{
	$Hotel=0;
}
$Alojamiento=$_POST["Alojamiento"];
if($Alojamiento=="on")
{
	$Alojamiento=1;
}
else
{
	$Alojamiento=0;
}
$Impuestos=$_POST["Impuestos"];
if($Impuestos=="on")
{
	$Impuestos=1;
}
else
{
	$Impuestos=0;
}
$Equipaje=$_POST["Equipaje"];
if($Equipaje=="on")
{
	$Equipaje=1;
}
else
{
	$Equipaje=0;
}
$Shopping=$_POST["Shopping"];
if($Shopping=="on")
{
	$Shopping=1;
}
else
{
	$Shopping=0;
}
$Asistencia=$_POST["Asistencia"];
if($Asistencia=="on")
{
	$Asistencia=1;
}
else
{
	$Asistencia=0;
}
$Alimentacion=$_POST["Alimentacion"];
if($Alimentacion=="on")
{
	$Alimentacion=1;
}
else
{
	$Alimentacion=0;
}
$Q="INSERT INTO `Paquetes` (`IdPaquete`, `Nombre`, `Descripcion`, `Precio`, `Moneda`, `Fechas`, `Vigencia`, `Tipo`, `Traslados`, `Guia`, `Desayuno`, `SitiosTuristicos`, `Hotel`, `Alojamiento`, `Impuestos`, `Equipaje`, `Shopping`, `Asistencia`, `Alimentacion`) VALUES (NULL, '$Nombre', '$Descripcion', '$Precio', '$Moneda', '$Fecha', '$Vigencia', '$Tipo', '$Traslados', '$Guia', '$Desayuno', '$Sturisticos', '$Hotel', '$Alojamiento', '$Impuestos', '$Equipaje', '$Shopping', '$Asistencia', '$Alimentacion')";

$db->query($Q);

$LID=$db->LastInsertID();
//$Img1 = $_FILES['userfile']['name'];
//$tipo_archivo = $_FILES['userfile']['type'];
//$tamano_archivo = $_FILES['userfile']['size'];
	
if (move_uploaded_file($_FILES['Img1']['tmp_name'],  "../../clientes/beneficios/Paquetes/Paquete1".$LID.".jpg")){
//		echo "El archivo 1 ha sido cargado correctamente.";
}else{
		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
}

if (move_uploaded_file($_FILES['Img2']['tmp_name'],  "../../clientes/beneficios/Paquetes/Paquete2".$LID.".jpg")){
		//echo "El archivo 2 ha sido cargado correctamente.";
}else{
		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
}

if (move_uploaded_file($_FILES['Img3']['tmp_name'],  "../../clientes/beneficios/Paquetes/Paquete3".$LID.".jpg")){
		//echo "El archivo 3 ha sido cargado correctamente.";
}else{
		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
}
if (move_uploaded_file($_FILES['Img4']['tmp_name'],  "../../clientes/beneficios/Paquetes/Paquete4".$LID.".jpg")){
		//echo "El archivo 3 ha sido cargado correctamente.";
}else{
		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
}
?>
<script type="text/javascript">
	window.alert("Información Guardada con éxito");
	window.location.href="../NuevoPaquete.php";
</script>