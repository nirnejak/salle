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

$query = "select ID, Name_Pg,area,price from rooms;";

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

