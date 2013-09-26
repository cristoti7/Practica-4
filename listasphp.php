<html>
 <body>
<head>
<META charset=utf-8>
 </head>
<?php
$paises=array();
$paises["MEXICO"]=array("GUADALAJARA","MONTERREY","TOLUCA","AGUSCALIENTES","LEON");
$paises["JAPON"]=array ("TOKIO","OSAKA","HIROSHIMA","OKINAWA","NAGASAKI");
$paises["EUA"]=array ("COLORADO","TEXAS","CALIFORNIA","NEW YORK","VEGAS");
$paises["GRECIA"]=array ("ANDROS","CORINTO","CORFU","ESPARTA","ATENAS");
$paises["ESPAÑA"]=array ("MADRID","BARCELONA","VALENCIA","SEVILLA","ZARAGOZA");
$paises["IRLANDA"]=array ("CORK","DROGHEDA","INIS","TALLAGHT","SORD");
$paises["CAMERUN"]=array ("BALI","EDEA","GAROUA","MOKOLO","TIKO");
$paises["AUSTRALIA"]=array ("ADELAIDA","ALBURY","DARWIN","NEWCASTLE","SYDNEY");
$paises["ARGENTINA"]=array ("BUENOS AIRES","CORDOBA","MAR DE PLATA","LA PLATA","SANTA FE");
$paises["ALEMANIA"]=array ("STUTTGART","MUNICH","BERLIN","HANOVER","MAGUNCIA");
echo "<ul>";
foreach($paises as $pais=> $ciudades){
echo "<li>".$pais."<ul>";
echo "<br>";
foreach ($ciudades as $ciudad){

echo "<li>".$ciudad."</li>";
echo "<br>";

}
echo "</ul></li>";
echo "<br>";
}
echo"</ul>";
echo "<br>";


?>
</body>

</html>