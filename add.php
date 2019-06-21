<?php
include "Connection2.php";

$oname= $_REQUEST['Owner_Name'];
$pname= $_REQUEST['PG_Name'];
$contact= $_REQUEST['Phone_Num'];
$accom= $_REQUEST['accom'];
$address= $_REQUEST['Address'];
$type= $_REQUEST['type'];
$price=$_REQUEST['rent'];
$ac=$_REQUEST['faci_ac'];
$tv=$_REQUEST['faci_tv'];
$bed=$_REQUEST['faci_bed'];
$wifi=$_REQUEST['faci_wifi'];
$food=$_REQUEST['faci_food'];
$cooler=$_REQUEST['faci_cooler'];
$wcooler=$_REQUEST['faci_wcooler'];
$wpurifier=$_REQUEST['faci_wpurifier'];
$bathroom=$_REQUEST['faci_bathroom'];
$electricity=$_REQUEST['Electricity'];

if(!is_null($electricity)) {
$electricity=1;
}
else {
$electricity=0;
}

if(!is_null($ac)) {
$ac=1;
}
else {
$ac=0;
}

if(!is_null($tv)) {
$tv=1;
}
else {
$tv=0;
}

if(!is_null($bed)) {
$bed=1;
}
else {
$bed=0;
}

if(!is_null($wifi)) {
$wifi=1;
}
else {
$wifi=0;
}

if(!is_null($food)) {
$food=1;
}
else {
$food=0;
}

if(!is_null($cooler)) {
$cooler=1;
}
else {
$cooler=0;
}

if(!is_null($wcooler)) {
$wcooler=1;
}
else {
$wcooler=0;
}

if(!is_null($wpurifier)) {
$wpurifier=1;
}
else {
$wpurifier=0;
}

if(!is_null($bathroom)) {
$bathroom=1;
}
else {
$bathroom=0;
}

$query= "insert into add_yourself (Name_Owner,Name_PG,contact,address,price,electricity,accom,type,ac,tv,bed,wifi,food,cooler,wcooler,wpurifier,bathroom) values ('".$oname."','".$pname."',$contact,'".$address."',$price,$electricity,'".$accom."','".$type."',$ac,$tv,$bed,$wifi,$food,$cooler,$wcooler,$wpurifier,$bathroom);";

if (mysqli_query($con,$query)){
	echo "Your Record Has been Successfuly entered.";
}
else {
	echo "Sorry there was some problem with the data entry.";
}
?>
