<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<!-- config.php should be here as the first include  -->

<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>


<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>AgriBuzz | Blog</title>
</head>
<body>
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->

		<!-- banner -->
		<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->

		<?php require_once( 'blog.php') ?>

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
	
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="static/images/pome1.jpg" alt="" style="height:85% width:75%">
    <div class="w3-container">
      <h3><b>Soil and Climate Requirement for Growing Dwarf Pomegranate Trees</b></h3>
      <h5>Soil and Climate <span class="w3-opacity">April 7, 2021</span></h5>
    </div>

    <div class="w3-container">
      <p>The pomegranate tree thrives well in semiarid conditions. Deep loam to sandy loam soils is considered ideal for pomegranate trees. It can tolerate alkaline/saline soils with a 9.0 pH level having lower EC than 0.5 mm hos/cm. It can grow in light soild but with assured irrigation and it requires hot and dry summers with cool winters.
      It is tolerant to frost and freezes fairly well high temperature in summers and too low in winters encourages fruit cracking. Pomegranate has both types of cultivars like some are deciduous in winter and others are everygreen. The Pomegranate tree requires a hot and dry climate for the production of high-quality Pomegranates. </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
         
        </div>
        <div class="w3-col m4 w3-hide-small">
   
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="static/images/crop.jpg" alt="Norway" style="height:85% width:75%">
    <div class="w3-container">
      <h3><b>The Improved Face Of Indian Farmers</b></h3>
      <h5>Agriculture<span class="w3-opacity">April 2, 2021</span></h5>
    </div>

    <div class="w3-container">
      <p>Agriculture, with its allied sectors is the largest source of livelihood in India with 70% of its rural households depending primarily on agriculture for their livelihood, with 82% of farmers being small and marginal. The Indian food industry is poised for a massive growth, increasing its contribution to the world food trade every year due to its immense potential for value addition. The Indian food and grocery market is the 6th largest in the world with retail contributing to 70% of sales. India is rapidly developing in terms of technology, infrastructure, government support & education which has helped Indian farmers in many ways. </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">     
        </div>
        <div class="w3-col m4 w3-hide-small">
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
<!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="static/images/organic.jpg" alt="Norway" style="height:85% width:75%">
    <div class="w3-container">
      <h3><b>Organic Farming wave and Fair-Trade practices</b></h3>
      <h5>Organic Farming<span class="w3-opacity">April 2, 2021</span></h5>
    </div>

    <div class="w3-container">
      <p>India continues to be a country with the highest number of organic farmers in the world i.e. 8,35,000 with more than 1.5 million hectares under cultivation. Organic production has stimulated a dynamic market growth contributing to farm incomes and pushing food productions towards higher sustainability.

There has been a major improvement in soil quality which is helping farmers grow a variety of crops. Under Organic cultivation, there is zero use of pesticides removing any chemical threat to our Farmer’s health and higher income (organic fetches about 15-20% more than conventional) giving them a better lifestyle. </p>
      <div class="w3-row">
        <div class="w3-col m8 s12">     
        </div>
        <div class="w3-col m4 w3-hide-small">
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="static/images/agribuzz.png" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>About Us</b></h4>
      <p>AgriBuzz is a website where not only farmer's can connect with the news provided in the articles to stay updated and it will also help farmers to purchase and sale their products and cultivated crops.</p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Points to know</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <span class="w3-large">Improved Infrastructure</span><br>
        <span>The farmers have easy access to the cities to sell and produce which was not possible in yesteryears.</span>
      </li>
      <li class="w3-padding-16">
        <span class="w3-large">Technological Advancement</span><br>
        <span>They are tech savvy and are open to adopting new technologies that can help them improve their income,From ordering seeds online to seeking inputs on social media, there is rapid adoption of information technology by Indian farmers.</span>
      </li> 
      <li class="w3-padding-16">   
        <span class="w3-large">eNAM (National Agriculture Market)</span><br>
        <span>eNAM market facilitates farmers, traders and buyers with online trading in commodities that is helping in better price discovery and provide facilities for smooth marketing of their produce.</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">     
        <span class="w3-large">Newer Market Opportunities</span><br>
        <span>A growing number of farmers and agribusinesses in India have seized on export opportunities with the agricultural export market reaching almost USD $40B. Geotagged commodities like turmeric, pepper, tea, saffron, basmati rice have opened new market opportunities for the grower community.</span>
      </li>  
    </ul>
  </div>
  
  
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>


</body>
</html>


		</div>
		<!-- // Page content -->

		<!-- footer -->
		<?php include( ROOT_PATH . '/includes/footer.php') ?>
		<!-- // footer -->