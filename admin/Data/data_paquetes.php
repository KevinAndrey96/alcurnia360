<?php
require_once "../controlador/conexion.php";

$page = $_GET['page']; 
$limit = $_GET['rows']; 
$sidx = $_GET['sidx']; 
$sord = $_GET['sord']; 

if(!$sidx)
$sidx =1;

    
$result = mysql_query("SELECT COUNT(*) AS count FROM Paquetes"); 
$row = mysql_fetch_array($result,MYSQL_ASSOC);

$count = utf8_decode($row['count']); 
if( $count > 0 && $limit > 0) { 
$total_pages = ceil($count/$limit); 
} else { 
$total_pages = 0; 
} 
if ($page > $total_pages) $page=$total_pages;
$start = $limit*$page - $limit;
if($start <0) $start = 0; 

$consulta = "SELECT * FROM Paquetes ORDER BY $sidx $sord LIMIT $start , $limit";
$resultado = mysql_query($consulta) ;
$Var->page = $page;
$Var->total = $total_pages;
$Var->records = $count;    
$i=0;


while ($row =mysql_fetch_array($resultado))
{            
    $Var->rows[$i]['id']=utf8_decode($row['IdPaquete']);
    $Var->rows[$i]['cell']=Array(null,utf8_decode($row['IdPaquete']), utf8_decode($row['Nombre']), utf8_decode($row['Precio']), utf8_decode($row['Moneda']));
    $i++;
}
echo json_encode($Var);
?>

