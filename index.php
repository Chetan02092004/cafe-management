<?php
session_start();
?>

<html>

<head>
<title> Home | Hideout Cafe </title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">

<style>

body{
margin:0;
padding:0;
}

/* FULL SCREEN HERO IMAGE */

.hero{
height:100vh;
width:100%;
background-image:url("images/hideout.jpg");
background-size:cover;
background-position:center;
background-repeat:no-repeat;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
text-align:center;
color:white;
}

/* Dark overlay */
.hero::before{
content:"";
position:absolute;
top:0;
left:0;
width:100%;
height:100%;
background:rgba(0,0,0,0.5);
}

.hero-content{
position:relative;
z-index:2;
}

.hero h1{
font-size:70px;
font-weight:bold;
text-shadow:3px 3px 10px black;
}

.hero h2{
font-size:35px;
margin-bottom:30px;
text-shadow:2px 2px 10px black;
}

.orderbtn{
font-size:22px;
padding:12px 35px;
}

</style>

</head>


<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">
<span class="glyphicon glyphicon-chevron-up"></span>
</button>

<script>
window.onscroll = function(){scrollFunction()};

function scrollFunction(){
if(document.body.scrollTop>20 || document.documentElement.scrollTop>20){
document.getElementById("myBtn").style.display="block";
}
else{
document.getElementById("myBtn").style.display="none";
}
}

function topFunction(){
document.body.scrollTop=0;
document.documentElement.scrollTop=0;
}
</script>


<!-- NAVBAR -->

<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
<div class="container">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="index.php">Hideout Cafe</a>
</div>


<div class="collapse navbar-collapse" id="myNavbar">

<ul class="nav navbar-nav">
<li class="active"><a href="index.php">Home</a></li>
<li><a href="aboutus.php">About</a></li>
<li><a href="contactus.php">Contact Us</a></li>
</ul>


<?php
if(isset($_SESSION['login_user1'])){
?>

<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?></a></li>
<li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
<li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
</ul>

<?php
}
else if(isset($_SESSION['login_user2'])){
?>

<ul class="nav navbar-nav navbar-right">

<li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?></a></li>

<li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone</a></li>

<li><a href="cart.php">
<span class="glyphicon glyphicon-shopping-cart"></span> Cart
(
<?php
if(isset($_SESSION["cart"])){
$count=count($_SESSION["cart"]);
echo "$count";
}
else{
echo "0";
}
?>
)
</a></li>

<li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>

</ul>

<?php
}
else{
?>

<ul class="nav navbar-nav navbar-right">

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span>
</a>

<ul class="dropdown-menu">
<li><a href="customersignup.php">User Sign-up</a></li>
<li><a href="managersignup.php">Manager Sign-up</a></li>
</ul>

</li>


<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span>
</a>

<ul class="dropdown-menu">
<li><a href="customerlogin.php">User Login</a></li>
<li><a href="managerlogin.php">Manager Login</a></li>
</ul>

</li>

</ul>

<?php
}
?>

</div>
</div>
</nav>



<!-- FULL SCREEN FRONT IMAGE -->

<div class="hero">

<div class="hero-content">

<h1>Hideout Cafe</h1>

<h2>"Food & Mood"</h2>

<a class="btn btn-success btn-lg orderbtn" href="customerlogin.php">Order Now</a>

</div>

</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>