<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
				
			</li>
              <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>

			<li class="dropdown yamm">
				<a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
			</li>
            
			<?php
             } ?>






<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      
      
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/green.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
    <link href="assets/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css">

    <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
    <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
    <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
    <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">


    <!-- Demo Purpose Only. Should be removed in production : END -->

    
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
<style>

.btn {
  background-color: ;                        
  border: none;
  color: white;
  padding: 16px 13px;
  font-size: 22px;
  cursor: pointer;
 
}

.my_text
            {
                font-family: fantasy;
                font-size:      40px;
                font-weight:    bold;
            }

/* Darker background on mouse-over */
.btn:hover {
  background-color:  #9ACD32; 
  color: white;
}

</style>

</head>
<body>
<a href="articles.php" button class="btn">ARTICLES</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">
<!-- Add icon library -->

<link rel='stylesheet' type="fontello-ie7-codes.css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<style>

.btn {
  background-color: ;                        
  border: none;
  color: white;
  padding: 16px 13px;
  font-size: 22px;
  cursor: pointer;
 
}

.my_text
            {
                font-family: fantasy;
                font-size:      40px;
                font-weight:    bold;
            }

/* Darker background on mouse-over */
.btn:hover {
  background-color:  #9ACD32; 
  color: white;
}
</style>

</head>
<body>
<a href="complete-blog-php/index.php" button class="btn">BLOGS</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">
<!-- Add icon library -->

<link rel='stylesheet' type="fontello-ie7-codes.css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<style>

.btn {
  background-color: ;                        
  border: none;
  color: white;
  padding: 16px 13px;
  font-size: 22px;
  cursor: pointer;
 
}

.my_text
            {
                font-family: fantasy;
                font-size:      40px;
                font-weight:    bold;
            }

/* Darker background on mouse-over */
.btn:hover {
  background-color:  #9ACD32; 
  color: white;
}
</style>

</head>
<body>
<a href="Weather_App/index.html"" button class="btn">WEATHER</a>
</body>
</html>


			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div>
</div>

            </div>
        </div>

    </div>
</div>


