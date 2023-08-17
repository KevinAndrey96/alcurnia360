<?php
require_once "../../admin/controlador/conexion.php";


if(isset($_SESSION['LogueadoCliente']))
{
	header('Location: ../proto-alliance.php');
	echo "<script>window.location='../proto-alliance.php';</script>";
}
if(!empty($_POST["correoe"]))
{
	if($_POST["correoe"]!="" && $_POST["IdUsuario"]!="")
	{
		$Correo=$_POST["correoe"];
		$IdUsuario=$_POST["IdUsuario"];
		$Contrasena=sha1($_POST["contrasena"]);
		$Contrasena2=sha1($_POST["contrasena2"]);
		$Contrasena9=$_POST["contrasena2"];

		$consulta="SELECT * from Clientes where Email='$Correo' and IdCliente='$IdUsuario'";
		$resultado=mysql_query($consulta);
		$cont=0;
		while ($row=mysql_fetch_array($resultado)) 
		{
			$cont++;
			$Nombres=$row["Nombres"];
			$Validado=$row["Validado"];
		}
			//$Con=sha1generateRandomString(10);

		if($cont==0)
		{
			?>
			<script type="text/javascript">
				window.alert("Ha ocurrido un error, por favor verifique el email de configuración que se le ha enviado");
				window.location='../index.php';
			</script>
			<?php
		}

		if($Validado==true)
		{
			?>
			<script type="text/javascript">
				window.alert("Este enlace ha caducado, si olvidó su clave por favor restaurela a través del enlace 'Olvide mi contrasena'");
				window.location='../index.php';
			</script>
			<?php
		}

		if($Contrasena!=$Contrasena2)
		{
			?>
			<script type="text/javascript">
				window.alert("Las contrasenas ingresadas no coinciden");
				window.location='../index.php';
			</script>
			<?php
		}

		$Q="UPDATE Clientes set Contrasena = '$Contrasena', Validado='1' where Email= '$Correo' and IdCliente='$IdUsuario'";
		$R=mysql_query($Q);
		if($cont==1)
		{

			$Code = rand ( 1000000 , 9999999 );

			$destinatario = "$Correo"; 
			$asunto = "Bienvenido"; 
			$cuerpo = '
			<html> 
			<head> 
				<title>Bienvenido, su contraseña se ha configurado con éxito, ya puede iniciar sesión en nuestra plataforma</title> 
			</head> 
			<body> 
				<img src="https://alcurnia360.com.co/admin/img/logo.png">
				<h1>(Reestablecimiento de clave)</h1> 
				<p> 
				Tu nueva contraseña de cliente es '.$Contrasena9.'
				</p> 
			</body> 
			</html> 
			'; 

			$headers = "MIME-Version: 1.0\r\n"; 
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

			$headers .= "From: <no-reply@alcurnia360.com.co>\r\n"; 

			mail($destinatario,$asunto,$cuerpo,$headers);

			//$_SESSION["C"]=$Code;
			?>
					<script type="text/javascript">
						window.alert("Su contraseña ha sido configurada correctamente ");
					</script>
					<?php
			echo "<script>window.location='../index.php';</script>";

		}
		else
		{
			echo "<script>window.alert('El usuario registrado con este correo no registra en nuestra base de datos');</script>";
			echo "<script>window.location='../index.php';</script>";

		}

	}
	else
	{
		?>
		<script type="text/javascript">
			window.alert("Ha ocurrido un error 1 ")
		</script>
		<?php
		echo "<script>window.location='../index.php';</script>";	
	}
}
?>