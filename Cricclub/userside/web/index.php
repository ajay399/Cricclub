<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
table{
	
padding-left:90px;
}



</style>
<title>Cricclub | Book Tickets Of Your Favourite Matches</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<!-- //end-smooth-scrolling --> 
</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	
	 
	<!-- header modal -->
	<!-- header -->
	<?php
	include('header.php');
	?>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
		
	</div>
	<!-- //banner --> 
	<!-- banner-bottom -->
	<?php
  $sel="select * from tournament";
  $exe=$conn->query($sel);
  while($fetch=$exe->fetch_object())
  {
	  ?>
	  <br><br>
	  
  
  <center>
  <h2><?php echo $fetch->firstteam?> VS<br/>
  <?php echo $fetch->secondteam?></h2></br>
  <h3><?php echo $fetch->date?></br>
  Ground : <?php echo $fetch->location?><br>
  Price(Rs.) <?Php echo $fetch->price?>/- Only
  </br><br/>
  <a href="buy.php?buy=<?php echo $fetch->tid?>">Book Tickets</a><br>
  </h3></br>
  </center>
  
  <hr>
  <?php
  }
  ?>
	
	
	<?php
	
	include('footer.php');
	?>
	

  

	
</body>
</html>