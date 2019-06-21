<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name ="viewport" content = "width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel = "stylesheet" href = "https://code.getmdl.io/1.1.3/material.blue-pink.min.css">
    <script defer src = "https://code.getmdl.io/1.1.3/material.min.js"></script>

    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/logo.css">
    <script defer src="js/material.min.js"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

  <style>
  .mySlides {
    display:none
  }
  p {
  margin: 16px;
  }

  h3 {
  margin: 16px;
  }
  .mdl-card {
    border-radius: 20px;
    margin-bottom: 20px;
  }
  caption {
    background-color: #2196f3;
    padding: 10px;
  }
  tr,td {
    background-color: lightgrey;
    margin: 20px;
    padding: 10px;
  }

.logo {
font-family: logo;
}

  </style>

  </head>
  <body>

    <div class = "mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color-grey-100">
      <header class = "mdl-layout__header mdl-layout__header--scroll mdl-color-grey-100 mdl-color-text--white-800">
        <div class = "mdl-layout__header-row">
          <span class = "mdl-layout-title" style="font-family:logo;">Salle</span>
          <div class = "mdl-layout-spacer"></div>
        </div>
      </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><h3 class="logo">Salle</h3></span>
      <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="index.html" style="text-decoration:none;">Home</a>
      <a class="mdl-navigation__link" href="filter.html" style="text-decoration:none;">Find PG</a>
      <a class="mdl-navigation__link" href="add_yourself.html" style="text-decoration:none;">Add Yourself</a>
      <a class="mdl-navigation__link" href="contact_us.html" style="text-decoration:none;">Contact US</a>
      <a class="mdl-navigation__link" href="about_us.html" style="text-decoration:none;">About Us</a>
      </nav>
    </div>
      <main class="mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class = "mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <div class = "mdl-color-text--grey-500" style = "padding: 10px;">
              Filter &gt; Description
            </div>

            <?php
            //Connection with Server
            include 'Connection.php';
	    
            //Taking the uid value via GET method
            //$ID = $_SESSION['uid'];
            $ID = $_REQUEST['uid'];

	    
            //the Query for taking results from the table
            $query = "select Name_Pg,area,price,pic_num,ac,tv,bed,wifi,food,cooler,water_cooler,water_purifier,bathroom,electricity from rooms where ID ='$ID'";

            $result = $con->query($query);

            //fetching the results in the dat variable
            $dat = $result->fetch_assoc();

            ?>
            <h3><?php echo $dat['Name_Pg']; ?></h3>
            <center>
              <div class="w3-content" style="max-width:1200px">
                <?php
                //The loop runs till all the pictures from the specified ID is taken
                $pic_num1=$pic_num2=$dat['pic_num'];
                  while($pic_num1 > 0){
                    echo '<img class="mySlides" src="Pictures/'.$ID.'/'.$pic_num1.'.jpg" style="width:90%; border-radius:5px;">';
                $pic_num1 = $pic_num1 - 1;
              }
              ?>

                <div class="w3-row-padding w3-section">

                  <?php
                  //This loop is for making all the above taken pics to make a thumbnail image and arrange using W3Schools
                  $count=1;
                  while($pic_num2 > 0){
                  echo '<div class="w3-col s2">';
                    echo '<img class="demo w3-border w3-hover-shadow" src="Pictures/'.$ID.'/'.$pic_num2.'.jpg" style="width:100%; margin:5px; border-radius:5px;" onclick="currentDiv('.$count.')">';
                  echo '</div>';
                  $count = $count + 1;
                  $pic_num2 = $pic_num2 - 1;
                  }
                  ?>

                </div>
              </div>
            </center>
            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--6-col" style="margin: 20px 0px 20px 0px;"><center><h4><?php echo $dat['area'];?></h4></center></div>
              <div class="mdl-cell mdl-cell--6-col" style="margin: 20px 0px 20px 0px;"><center><h4>&#8377;&nbsp;<?php echo $dat['price'];?></h4></center></div>
              <div class="mdl-cell mdl-cell--12-col" style="margin: 20px 0px 20px 0px;"><center>
              <div class="mdl-cell mdl-cell--12-col" style="margin: 20px 0px 20px 0px;"><center><h6>
		We will take only 20% of your first Month rent.
	      </h6></center></div>
	      <form action="book_now.html" target="_blank">
	      <button class="mdl-button mdl-button--raised mdl-button--primary mdl-js-button mdl-js-ripple-effect" type="submit">Book Now</button>
	      </center></div>
	      </form>
              <div class="mdl-cell mdl-cell--12-col">
              <table style="width:100%;">
                <caption style="color:white;">Facilities</caption>
                <tbody>
                  <tr>
                    <td>AC</td>
                    <td><?php if($dat['ac'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>TV</td>
                    <td><?php if($dat['tv'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Bed</td>
                    <td><?php if($dat['bed'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Wi-Fi</td>
                    <td><?php if($dat['wifi'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Food</td>
                    <td><?php if($dat['food'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Room Cooler</td>
                    <td><?php if($dat['cooler'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Water Cooler</td>
                    <td><?php if($dat['water_cooler'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Water purifier</td>
                    <td><?php if($dat['water_purifier'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Bathroom</td>
                    <td><?php if($dat['bathroom'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                  <tr>
                    <td>Electricity (included in rent)</td>
                    <td><?php if($dat['electricity'] == 0){echo 'No';} else {echo 'Yes';} ?></td>
                  </tr>
                </tbody>
              </table>
            </div>

            </div>
          </div>
        </div>

      <main>

    </div>

    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-border-red", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-border-red";
}
</script>

  </body>
</html>

