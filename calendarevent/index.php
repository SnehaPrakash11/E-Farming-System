<?php ?>
<!DOCTYPE html>
<html>
<head>
	<body background=
"jscript/images/bg.jpg">
<style>

	*{padding: 0; margin: 0; box-sizing: border-box;}
body{height: 900px;}
header {
	background: url('http://www.autodatz.com/wp-content/uploads/2017/05/Old-Car-Wallpapers-Hd-36-with-Old-Car-Wallpapers-Hd.jpg');
	text-align: center;
	width: 100%;
	height: auto;
	background-size: cover;
	background-attachment: fixed;
	position: relative;
	overflow: hidden;
	border-radius: 0 0 85% 85% / 30%;
}
header .overlay{
	width: 100%;
	height: 100%;
	padding: 50px;
	color: #FFF;
	text-shadow: 1px 1px 1px #333;
  background-image: linear-gradient( 135deg, #9f05ff69 10%, #fd5e086b 100%);
	
}

h1 {
	font-family: 'Dancing Script', cursive;
	font-size: 80px;
	margin-bottom: 30px;
}

h3, p {
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 30px;
}

button {
	border: none;
	outline: none;
	padding: 10px 20px;
	border-radius: 50px;
	color: #333;
	background: #9cd5e0;
	margin-bottom: 50px;
	box-shadow: 0 3px 20px 0 #0000003b;
}
button:hover{
	cursor: pointer;
}

/* font-family: 'Kaushan Script', cursive; */
/* font-family: 'Pinyon Script', cursive; */
/* font-family: 'Petit Formal Script', cursive; */
/* font-family: 'Aguafina Script', cursive; */
/* font-family: 'Rouge Script', cursive; */
// font-family: 'Roboto', sans-serif;
</style>




<?php include_once('functions.php'); ?>
<!DOCTYPE html>
<html>
<head>
<header>
	<div class="overlay">
<h1>AgriBuzz | Calendar</h1>
	<br>
	<button
    onclick="window.location.href = '../index.php';">Back To Home</button>
		</div>
</header>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Calendar</title>
<link type="text/css" rel="stylesheet" href="jscript/style.css"/>
<link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="jscript/bootstrap/css/bootstrap.min.css"/>
<script src="jscript/jquery.min.js"></script>
</head>
<body>
<div id="calendar_div" class="container">
<h1 align="center">EVENT CALENDAR</h1>
	<?php echo getCalender(); ?>

</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
.all-browsers {
  margin: 0;
  padding: 5px;
  background-color: lightgray;
}

.all-browsers > h1, .browser {
  margin: 10px;
  padding: 5px;
}

.browser {
  background: white;
}

.browser > h2, p {
  margin: 4px;
  font-size: 90%;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
}
</style>
</head>
<body>




<footer>
  <p>AgriBuzz &copy; <?php echo date('Y'); ?></p><br>
  <a href="#">agribuzz@gmail.com</a></p>
</footer>

</body>
</html>
