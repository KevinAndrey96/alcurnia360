<?php
require_once "../controlador/conexion.php";

$id = $_POST['id'];
$Telefono = $_POST['Telefono'];
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Email = $_POST['Email'];
if($_POST['oper']=='edit')
{
     $consulta  = "UPDATE Clientes SET
    Nombres = '$Nombres',
    Apellidos = '$Apellidos',
    Telefono = '$Telefono',
    Email = '$Email'
    WHERE IdCliente = '$id' ";
    $resultado1 = @mysql_query($consulta) ;
    
}  
?>

<?php
if($_POST['oper']=='add')
{
    $Con=substr($Nombres, 0, 3);
    $Con.="alcurnia360";
    $Con = strtolower ( $Con );
    $consult1  = "INSERT INTO Clientes (Telefono,Nombres,Apellidos,Contrasena,Email) VALUES ('".$Telefono."','".$Nombres."','".$Apellidos."','".sha1($Con)."','".$Email."')";
    $resultado1 = @mysql_query($consult1) ;
    $id=mysql_insert_id();
    $Texto="
<p>Hola, $Nombres $Apellidos</p>
<br>
<p>Se ha completado con éxito tu registro.</p>
<br>
<p>A continuación encontrarás un enlace al que podrás acceder para configurar tu nueva contraseña en la plataforma.</p>
<br>
<a href='https://alcurnia360.com.co/clientes/contrasena.php?Id=$id'>Click Aquí</a> ó https://alcurnia360.com.co/clientes/contrasena.php?Id=$id
<br>
<p>
Queremos darle la más cordial bienvenida e informarle que nuestras líneas de atención ya están a su disposición con el fin  de  que pueda aclarar las respectivas dudas y utilizar todo nuestro portafolio de servicio turísticos a nivel nacional e internacional.</p>
<br><br>
<p>Recuerde que su número de contrato está  ubicado en la parte superior izquierda de sus documentos con el cual podrá identificarse en nuestras líneas de atención autorizados: correos electrónicos y números telefónicos 248 5030 y 3164405699.</p>
<br>
<br>
<p>Para el ingreso a nuestra página web www.alcurnia360.com.co su usuario es el correo registrado del titular del contrato y la clave que usted asigne.</p>
<br>
<br>
<p>Puede realizar  sus solicitudes  únicamente  a  través de los correos electrónicos autorizados : legal@alcurnia360.com.co</p>
<br>
<br>
<p>El departamento de reservas le enviara respuesta en un lapso máximo 48 hrs. Para tramites  de servicio al cliente, dudas e inquietudes respecto a los productos  debe comunicarnos a través del correo: servicioalcliente@alcurnia360.com.co para agendar una cita con el objetivo  de atenderle  de manera adecuada y oportuna.</p>
<br>
<br>
<p>Nuestros horarios de Atención son de Lunes a Viernes de 09:00am a 05:00pm. Y sábados  de 09:00am  a 01:00pm. Favor traer documento de identificación para el ingreso al edificio.</p>
<br>
<br>
<p>Muy Cordialmente su Agencia de Viajes.</p>
    ";



$Subject="Bienvenido a Alcurnia 360";
$Message=$Texto;
$To=$Email;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://alcurnia360.com.co/clientes/Mailer.php");
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, "Subject=$Subject&Message=".$Message."&To=$To");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$remote_server_output = curl_exec ($ch);
curl_close ($ch);

}
if($_POST['oper']=='del')
{
    $consult2  = "DELETE FROM Clientes where IdCliente='$id'";
    $resultado2 = @mysql_query($consult2) ;
    
}
?>