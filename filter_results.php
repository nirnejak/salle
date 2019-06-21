<?php
session_start();

?>





<!DOCTYPE html>
<html>
<head>
<title>Filter Results</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="jquery-1.12.2.min.js"></script>


<link rel="stylesheet" href="material.min.css">
<script defer src="material.min.js"></script>

<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="bootstrap.css">

<link rel="stylesheet" type="text/css" href="css/filter_results_style.css">
<style>
.card-square.mdl-card {
  width: 425px;
  height: 239px;
}
.card-square > .mdl-card__title {
  color: #fff;

}
.jump {
	text-decoration: none;
}
</style>
<script>
	//$('.card-square mdl-card mdl-shadow--3dp').live('click', function() {
	  // alert("jfdfhd"); //or alert($(this).attr('id'))); for the jQuery method
//	});
//$(document).on('click', '.card-square', function() {
	
     //   var pass=this.id;
//	var url = "desc2.php";

     //   $.post(url, {"uid": pass});

        
//	window.open(url);



//});

</script>

</head>
<body>
<div class="mdl-grid">
<?php
//Connection with Server
include 'Connection.php';

$accom= $_REQUEST['accom'];
$city= $_REQUEST['city'];
$type= $_REQUEST['type'];
$pmin=$_REQUEST['min'];
$pmax=$_REQUEST['max'];
$ac=$_REQUEST['faci_ac'];
$tv=$_REQUEST['faci_tv'];
$bed=$_REQUEST['faci_bed'];
$wifi=$_REQUEST['faci_wifi'];
$food=$_REQUEST['faci_food'];
$cooler=$_REQUEST['faci_cooler'];
$wcooler=$_REQUEST['faci_wcooler'];
$wpurifier=$_REQUEST['faci_wpurifier'];
$bathroom=$_REQUEST['faci_bathroom'];




$condition = "where accom like '%$accom%' and city ='$city' and type = '$type' and price between $pmin and $pmax";

if(!is_null($ac))
$condition = $condition." and ac=$ac";

if(!is_null($tv))
$condition = $condition." and tv=$tv";

if(!is_null($bed))
$condition = $condition." and bed=$bed";

if(!is_null($wifi))
$condition = $condition." and wifi=$wifi";

if(!is_null($food))
$condition = $condition." and food=$food";

if(!is_null($cooler))
$condition = $condition." and cooler=$cooler";

if(!is_null($wcooler))
$condition = $condition." and water_cooler=$wcooler";

if(!is_null($wpurifier))
$condition = $condition." and water_purifier=$wpurifier";

if(!is_null($bathroom))
$condition = $condition." and bathroom=$bathroom";



$query = "select ID, Name_Pg,area,price from rooms $condition;";

$result = $con->query($query);

if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){
	
	$_SESSION['uid']= $row['ID'];

	    $var= 'Pictures/'.$row['ID'].'/card/pic.jpg';

   	 echo '<a class="jump" href="desc.php?uid='.$row['ID'].'" target="_blank"><div class="mdl-cell mld-cell--4-col">';
	 echo '<div class="card-square mdl-card mdl-shadow--3dp" align="left" style="background:url('.$var.'); margin-top:20px;" id="'.$row['ID'].'" onclick="desc_result()">
      	  <div class="mdl-card__title mdl-card--expand">
        	  <h2 class="mdl-card__title-text">'.$row["Name_Pg"].'</h2>
       	 </div> 
     	 <div class="mdl-card__actions mdl-card--border" style="background-color:white;">
       	 <div class="mdl-card__actions" style="color:black;">'.$row['area'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#8377;&nbsp;'.$row['price'].'</div>
         </div>
         </div>
         </div></a>';

    }
} else {
    echo '<center><h4>No Results</h4></center>';
}

?>
</div>


</body>
</html>

