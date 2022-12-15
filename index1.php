<!doctype html>
<html lang=en>
<head>
<style> 
body {
  background-image: url(images/header33.png);
}
</style>
<title>AnimegaDeal Props home page.</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="transparent.css">
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="ie8.css">
<![endif]-->
<style type="text/css">
#leftcol h3 { margin-bottom:-10px; }
#midcol h3 { margin-top:-10px; }
.black { color:black; }
form { margin-left:15px; font-weight:bold; color:black; }
select { margin-bottom:5px; }
h3 { font-size:130%; }
</style>
<!--Add conditional JavaScript for IE8-->
<!--[if lte IE 8]>
<script src="html5.js">
</script>
<![endif]-->
</head>
<body>

<center>
<h1>AniMegaDeal Props</h1>
</center>


<div id="righttcol">
<?php include("includes/collapsible.php"); ?>
</div>


<div id="container">
<header>



<script> /* collapsible script */


/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "200px";
  document.getElementById("main").style.marginLeft = "200px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

</script>
</header><br><br>



<div id="content">
<div id="leftcol">


<h3>Search for your dreamed house.</h3><br>


<span class="black"><strong>IMPORTANT: You must 
select an item in<br>ALL the fields, otherwise the search will fail.</strong></span><br>
<form action="found_houses.php" method="post">
Location<br>
<select name="loctn">
<option value="">- Select -</option>
<option value="Uyo">Uyo</option>
<option value="Ikot_Ekpene">Ikot Ekpene</option>
<option value="Abak">Abak</option>
<option value="Eket">Eket</option>

</select><br>
Maximum Price<br>
<select name="price">
<option value="">- Select -</option>
<option value="200000">&naira;200,000</option>
<option value="300000">&naira;300,000</option>
<option value="400000">&naira;400,000</option>
<option value="400000">&naira;400,000</option>
</select><br>
Type<br>
<select name="type">
<option value="">- Select -</option>
<option value="Det-bung">Detached Bungalow</option>
<option value="Semi-det-bung">Semi-detached Bungalow</option>
<option value="Det-house">Detached House</option>
<option value="Semi-det-house">Semi-detached House</option>
</select><br>
Number of Bedrooms<br>
<select name="b_rooms">
<option value="">- Select -</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
<p><input id="submit" type="submit" name="submit" value="Search"></p>
</form>
</div>

<div id="rightcol">


</div><!--end of side menu column-->
<div id="midcol">

<h3>All houses are situated in the beautiful Cities of Akwa Ibom State, Nigeria</h3><br>


</div>
<br class="clear">
</div><!--End of page content-->
</footer>
</div><br><br>
<center>
<?php include ("includes/footer.php"); ?>
</center>
</body>
</html>
