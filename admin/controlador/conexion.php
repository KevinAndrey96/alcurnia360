<?php
class Basededatos
{
    private static $basedatos = 'alcurnia_clientes';
    private static $servidor = 'localhost';
    private static $usuario = 'alcurnia_clientes';
    private static $clave = 'Alcur360@';
     
    private static $conexion  = null;
     
    public function __construct() {
        die('No se pudo inicializar la función constructora');
    }
     
    public static function conectarbd()
    {
       // Conexion para toda la aplicación
       if ( null == self::$conexion )
       {     
        try
        {
          self::$conexion =  new PDO( "mysql:host=".self::$servidor.";"."dbname=".self::$basedatos, self::$usuario, self::$clave); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$conexion;
    }
     
    public static function desconectarbd()
    {
        self::$conexion = null;
    }
}

$con = mysql_connect('localhost', 'alcurnia_clientes', 'Alcur360@') ;
if (!$con)
{
  echo "No se pudo realizar la Conexion con la Base de Datos" . "\n";
  exit ;
}

mysql_select_db('alcurnia_clientes') ;

?>