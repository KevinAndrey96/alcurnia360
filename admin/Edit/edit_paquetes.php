<?php
require_once "../controlador/conexion.php";

$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];
$Precio = $_POST['Precio'];
$Moneda = $_POST['Moneda'];
$Fechas = $_POST['Fechas'];
$Vigencia = $_POST['Vigencia'];
$Tipo = $_POST['Tipo'];
$Traslados = $_POST['Traslados'];
$Guia = $_POST['Guia'];
$Desayuno = $_POST['Desayuno'];
$SitiosTuristicos = $_POST['SitiosTuristicos'];
$Hotel = $_POST['Hotel'];
$Alojamiento = $_POST['Alojamiento'];
$Impuestos = $_POST['Impuestos'];
$Equipaje = $_POST['Equipaje'];
$Shopping = $_POST['Shopping'];
$Asistencia = $_POST['Asistencia'];
$Alimentacion = $_POST['Alimentacion'];

if($_POST['oper']=='edit')
{
     $consulta  = "UPDATE Paquetes SET
    Nombre = '$Nombre',
    Descripcion = '$Descripcion',
    Precio = '$Precio',
    Moneda = '$Moneda',
    Fechas = '$Fechas',
    Vigencia = '$Vigencia',
    Tipo = '$Tipo',
    Traslados = '$Traslados',
    Guia = '$Guia',
    Desayuno = '$Desayuno',
    SitiosTuristicos = '$SitiosTuristicos',
    Hotel = '$Hotel',
    Alojamiento = '$Alojamiento',
    Impuestos = '$Impuestos',
    Equipaje = '$Equipaje',
    Shopping = '$Shopping',
    Asistencia = '$Asistencia',
    Alimentacion = '$Alimentacion'
    WHERE IdPaquete = '$id' ";
    $resultado1 = @mysql_query($consulta) ;
    
}
if($_POST['oper']=='del')
{
    $consult2  = "DELETE FROM Paquetes where IdPaquete='$id'";
    $resultado2 = @mysql_query($consult2) ;
    
}
?>