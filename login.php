<!doctype html>
<html lang=en>
<head>
<title>login page</title>
<meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="transparent.css">
<link rel="stylesheet" type="text/css" href="admin_search.css">
</head>
<body>

<center>
<h1>AniMegaDeal Props</h1>
</center><br>



<div id="leftcol">



<header>
<script> /* hamburger script */
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
/* Hamburger menu script starts here */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

</script>
</header>


</div>


<div id="container">


<?php include("includes/user-menu-reg.php"); ?>


<div id="content"><!-- Start of the login page content. -->





<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
require('mysqli_connect2.php');
if (!empty($_POST['email']))
{
$e = mysqli_real_escape_string($dbcon, $_POST['email']);
} else {
$e = FALSE;
echo '<p class="error">You forgot to enter your email address.</p>';
}
if (!empty($_POST['psword'])) {
$p = mysqli_real_escape_string($dbcon, $_POST['psword']);
} else {
$p = FALSE;
echo '<p class="error">You forgot to enter your password.</p>';
}
if ($e && $p)
{
$q = "SELECT user_id, fname, user_level FROM anitable WHERE (email='$e' AND psword=SHA1('$p'))";
$result = mysqli_query ($dbcon, $q);
if (@mysqli_num_rows($result) == 1)
{
session_start();
$_SESSION = mysqli_fetch_array ($result, MYSQLI_ASSOC);
$_SESSION['user_level'] = (int) $_SESSION['user_level'];
$url = ($_SESSION['user_level'] === 1) ? 'admin.php':'index1.php';
header('Location:' . $url);
exit();
mysqli_free_result($result);
mysqli_close($dbcon);
}else{
echo '<p> The e-mail address and password entered do not match our records ?
<br>Perhaps you need to register, just click the Register button on the header menu</p>';
}
}else{
echo '<p> class="error">Please try again.</p>';
}
mysqli_close($dbcon);
}
?><br><br><br><br><br><br><br><br>
<!-- Display the form fields-->
<div id="loginfields">
<?php include ('includes/login_page.inc.php'); ?>

</div>
</div>
</div><br><br>
<center>
<?php include ("includes/footer.php"); ?>
</center>
</body>
</html>