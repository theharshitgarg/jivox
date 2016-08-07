<?php
include("dbcon.php");

$q="SELECT * FROM piechart";
$qes=$mysql->query($q);
$results=array();
while($res=$qresult->fetch_assoc()){
  $results[]=$res;
  
}
$pie=array();

foreach($results as $result)
{
   $pie[]=array($result['blood'],(int)$result['members']);
}
$pie=json_encode();
mysql_free_result($result);
?>
