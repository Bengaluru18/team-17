<!DOCTYPE html>
<html>
<title>Shopping Bag</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>
<body>
<script>
function myFunction() {
    alert("Booking request received");
  
}
</script>
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="Logout" onclick="w3_close()" class="w3-bar-item w3-button">Logout</a>
   <button id="myButton" class="float-left submit-button" >Logout</button>
</nav>

 <h1>
   <?php
   $var1 =  $_GET['username'];
    
   ?>

 </h1>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    
    <div class="w3-center w3-padding-16">Machinery</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <a href="final.php?Name='NewHollandTractor'"><img src="images/hollandtractor.jpg" alt="Holland Tractor" height="100" width="100">
      <h3>New Holland Tractor 55 HP</h3>
      <p>Cost: Rs.1000</p>
      <button onclick="myFunction()">Book </button>
    </div>
    <div class="w3-quarter">
      <a href="final.php?Name='Brush cutter'"><img src="images/brushcutter.jpg" alt="Plough" height="100" width="100">
      <h3>Brush cutter</h3>
      <p>Rs.700</p>
    </div>
    <div class="w3-quarter">
      <a href="final.php?Name='Bullock cart mounted Harvestor'"><img src="images/bullockcart.jpg" alt="drill" height="100" width="100">
      <h3>Seed cum Fertilizer drill</h3>
      <p>Rs.800</p>
    </div>
    <div class="w3-quarter">
      <a href="final.php?Name='Cultivators 9 tynes'"><img src="images/cultivator9tyres.jpg" alt="tynes" height="100" width="100">
      <h3>Cultivators 9 tynes</h3>
      <p>Rs.900</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <a href="final.php?Name='Brush cutter'"><img src="images/brushcutter.jpg" alt="Brush" height="50" width="100">
      <h3>Brush Cutter</h3>
      <p>Rs.500</p>
    </div>
    <div class="w3-quarter">
      <a href="final.php?Name='Bullock cart mounted Harvestor'"><img src="images/bullockcart.jpg" alt="Cart" height="100" width="100">
      <h3>Bullock Cart</h3>
      <p>Rs.2000</p>
    </div>
    <div class="w3-quarter">
      <a href="final.php?Name='Claas Combined harvestor'"><img src="images/class combined harvestor.jpg" alt="Sandwich" height="100" width="100">
      <h3>Class Combined Harvestor</h3>
      <p>Rs.900</p>
    </div>
    <div class="w3-quarter">
      <a href="final.php?Name='Rotovator'"><img src="images/rotovator.jpg" alt="Croissant" height="100" width="100">
      <h3>Rotovator</h3>
      <p>Rs.400</p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
     
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
	