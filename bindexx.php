<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
<meta charset="UTF-8" />
		
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		

<title>Multi-Level Push Menu - Demo 2</title>
		
<meta name="description" content="Multi-Level Push Menu: Off-screen navigation with multiple levels" />
		
<meta name="keywords" content="multi-level, menu, navigation, off-canvas, off-screen, mobile, levels, nested, transform" />
		
<meta name="author" content="Codrops" />
		
<meta name="descriptionn" content="Nifty Modal Window Effects with CSS Transitions and Animations" />
		
<meta name="keywordss" content="modal, window, overlay, modern, box, css transition, css animation, effect, 3d, perspective" />
		
<meta name="authorr" content="Codrops" />
		
<meta name="descriptionnn" content="Animated Books with CSS 3D Transforms" />
		<meta name="keywordsss" content="book, 3d, interactive, animated, 3d transform, css, web design" />
		<meta name="authorrr" content="Marco Barría for Codrops" />
				
<link rel="stylesheet" type="text/css" href="ModalWindowEffects/css/default.css" />
		
<link rel="stylesheet" type="text/css" href="ModalWindowEffects/css/component.css" />
		
<script src="ModalWindowEffects/js/modernizr.custom.js"></script>
<link rel="shortcut icon" href="../favicon.ico">
		
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		
<link rel="stylesheet" type="text/css" href="css/demo.css" />
		
<link rel="stylesheet" type="text/css" href="css/icons.css" />
		
<link rel="stylesheet" type="text/css" href="css/component.css" />
		
<script src="js/modernizr.custom.js"></script>
	


</head>
	
<body>
		

<!-- All modals added here for the demo. You would of course just have one, dynamically created -->
		

<div class="md-modal md-effect-10" id="modal-10">
			
<div class="md-content">
				
<h3>Thought of the Day</h3>
				
<div>
					
<p><strong>Quote of the day </strong> <?php echo date("F jS, Y"); ?></p>
					


    <?php
	
	
	
	// ****************************************
	// Fill in your database information below
	// ****************************************
	$DB_SERVER = "localhost";
	$DB_USER = "root";
	$DB_PASS = ""; 
	$DB_NAME = "qt";	
	// ****************************************
	
	// ****************************************
	// you do NOT have to edit below this line 
	// ****************************************
	$con = mysql_connect($DB_SERVER, $DB_USER, $DB_PASS);
	mysql_select_db($DB_NAME);

	$getNoOfQuotesQuery = mysql_query("select count(*) from quotes", $con);
	$no_of_quotes = mysql_result($getNoOfQuotesQuery,0);
	
	$getMetaDataQuery = mysql_query("SELECT * FROM quotes_meta", $con);
	$row = mysql_fetch_row($getMetaDataQuery); 
	$number_reached = $row[1];
	$date_modified= $row[2];
	
	// get the current day of the month (from 1 to 31)
	$day_today = date("j");
	
	
	if ($date_modified != $day_today){
		// we have reached the end of the quotes
		if ($number_reached >($no_of_quotes - 1)){
			$number_reached = 1;
			$query3 = mysql_query('UPDATE quotes_meta SET date_modified = "'.$day_today.'", number_reached = "'.$number_reached.'"', $con);
			mysql_query($query3,$con);
		} else {
		// we haven't reached the end of the quotes
		// therefore we increment $number_reached
		$number_reached = $number_reached + 1;
		$query3 = mysql_query('UPDATE quotes_meta SET date_modified = "'.$day_today.'", number_reached = "'.$number_reached.'"', $con);
		mysql_query($query3,$con);
		}
	}
	
	// we get the quote with 'id = $number_reached' from the database
	$getQuoteQuery = mysql_query("SELECT quote,author FROM quotes WHERE id = ".$number_reached, $con);
	$row = mysql_fetch_row($getQuoteQuery);

?>
<ul>
						
<li><strong>Quote: </strong><?php echo $row[0]; ?></li>
						
<li><strong>Author: </strong><?php echo $row[1]; ?></li>
						
<?php mysql_close($con); 
?>
</ul>
					

<button class="md-close">Close me!</button>
				

</div>
			</div>
		</div>
		

<div class="md-modal md-effect-19" id="modal-19">
			
<div class="md-content">
				
<h3>Word of the Day</h3>
				
<div>
					
<p><strong>Word of the day </strong> <?php echo date("F jS, Y"); ?></p>
					


    <?php
	
	
	
	// ****************************************
	// Fill in your database information below
	// ****************************************
	$DB_SERVER = "localhost";
	$DB_USER = "root";
	$DB_PASS = ""; 
	$DB_NAME = "qt";	
	// ****************************************
	
	// ****************************************
	// you do NOT have to edit below this line 
	// ****************************************
	$con = mysql_connect($DB_SERVER, $DB_USER, $DB_PASS);
	mysql_select_db($DB_NAME);

	$getNoOfQuotesQuery = mysql_query("select count(*) from quotes", $con);
	$no_of_quotes = mysql_result($getNoOfQuotesQuery,0);
	
	$getMetaDataQuery = mysql_query("SELECT * FROM quotes_meta", $con);
	$row = mysql_fetch_row($getMetaDataQuery); 
	$number_reached = $row[1];
	$date_modified= $row[2];
	
	// get the current day of the month (from 1 to 31)
	$day_today = date("j");
	
	
	if ($date_modified != $day_today){
		// we have reached the end of the quotes
		if ($number_reached >($no_of_quotes - 1)){
			$number_reached = 1;
			$query3 = mysql_query('UPDATE quotes_meta SET date_modified = "'.$day_today.'", number_reached = "'.$number_reached.'"', $con);
			mysql_query($query3,$con);
		} else {
		// we haven't reached the end of the quotes
		// therefore we increment $number_reached
		$number_reached = $number_reached + 1;
		$query3 = mysql_query('UPDATE quotes_meta SET date_modified = "'.$day_today.'", number_reached = "'.$number_reached.'"', $con);
		mysql_query($query3,$con);
		}
	}
	
	// we get the quote with 'id = $number_reached' from the database
	$getQuoteQuery = mysql_query("SELECT quote,author FROM quotes WHERE id = ".$number_reached, $con);
	$row = mysql_fetch_row($getQuoteQuery);

?>
<ul>
						
<li><strong>Word : </strong><?php echo $row[0]; ?></li>
						
<li><strong>Meaning : </strong><?php echo $row[1]; ?></li>
						
<?php mysql_close($con); 
?>
</ul>
					

<button class="md-close">Close me!</button>
				

</div>			</div>
		</div>
		
<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("progresso",$conn);

$sql_select1="select value from menu where id=1";
$sql_select2="select value from menu where id=2";
$sql_select3="select value from menu where id=3";
$sql_select4="select value from menu where id=4";
$sql_select5="select value from menu where id=5";
$sql_select6="select value from menu where id=6";
$sql_select7="select value from menu where id=7";
$sql_select8="select value from menu where id=8";
$sql_select9="select value from menu where id=9";
$sql_select10="select value from menu where id=10";





$result1 = mysql_query($sql_select1);
$row1 = mysql_fetch_array($result1);

$result2 = mysql_query($sql_select2);
$row2 = mysql_fetch_array($result2);

$result3 = mysql_query($sql_select3);
$row3 = mysql_fetch_array($result3);

$result4 = mysql_query($sql_select4);
$row4 = mysql_fetch_array($result4);

$result5 = mysql_query($sql_select5);
$row5 = mysql_fetch_array($result5);

$result6 = mysql_query($sql_select6);
$row6 = mysql_fetch_array($result6);

$result7 = mysql_query($sql_select7);
$row7 = mysql_fetch_array($result7);

$result8 = mysql_query($sql_select8);
$row8 = mysql_fetch_array($result8);

$result9 = mysql_query($sql_select9);
$row9 = mysql_fetch_array($result9);

$result10 = mysql_query($sql_select10);
$row10 = mysql_fetch_array($result10);




mysql_close($conn);
?>

<div class="container">
			


<!-- Push Wrapper -->
			






<div class="mp-pusher" id="mp-pusher">

				
<!-- mp-menu -->
				
<nav id="mp-menu" class="mp-menu">
					
<div class="mp-level">
						
<h2 class="icon icon-world"><?php echo $row1[0]; ?></h2>
						
<ul>
							

<li class="">
								
<a class="" href="index2.php"><?php echo $row2[0]; ?></a>
								
</li>
										

<li class="icon icon-arrow-left">
											
<a class="" href="#"><?php echo $row3[0]; ?></a>
											
<div class="mp-level">
												
<h2>Knowledge</h2>
												
<a class="mp-back" href="#"><?php echo $row4[0]; ?></a>
												
<ul>
													

<li><a href="#"><?php echo $row5[0]; ?></a></li>
													
<li><a href="multidict/index6.php"><?php echo $row6[0]; ?></a></li>
													
<li><a href="#"><?php echo $row7[0]; ?></a></li>
													
</ul>
											
</div>
										
</li>
										

<li class="">
											
<a class="" href="index.html"><?php echo $row8[0]; ?></a>
											
</li>
									

<li class="">
								
<a class="" href="HexaFlip/index3.php"><?php echo $row9[0]; ?></a>
								
</li>
							
						
<li><a class="" href="#"><?php echo $row10[0]; ?></a></li>
							
</ul>
							
					
</div>
				
</nav>
				
			
<!-- /mp-menu -->

					
<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					
<div class="scroller-inner">
						
<!-- Top Navigation -->					
<div class="codrops-top clearfix">
							


<?php




echo '<span class="right"><a class="" href="aja/regc.php"><span>Sign Up</span></a></span>';
   
echo '<span class="right"><a class="" href="logc.php"><span>Login</span></a></span>';
  



?>

</div>
						



<header class="codrops-header">
							
<?php


$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("progresso",$conn);
                $sql = "SELECT
			heading FROM
			title where id=1";
$sql2 = "SELECT
			Subheading FROM
			subtitle where id=1";
		

$result = mysql_query($sql);
$result2 = mysql_query($sql2);

if(!$result)
{
	echo 'The category could not be displayed, please try again later.' . mysql_error();
}
else
{

while($row = mysql_fetch_assoc($result))
{
$heading=$row['heading'];
$row2=mysql_fetch_assoc($result2);
$subheading=$row2['Subheading'];

echo "<h1>$heading<span>$subheading</span></h1>";
//echo "<h1>$row['heading'] <span></span></h1>";
}
}
mysql_close($conn);

?>
</header>
						

<div class="content clearfix">
							
<div class="block block-40 clearfix">
								
<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
								
<!-- Top Navigation -->
			

<div class="main clearfix">
				
<div class="column">
					


<nav class="codrops-demos">
<button class="md-trigger" data-modal="modal-10" style="width:200px;height:60px">Thought of the Day</button>
					
</br>
</br>

<!-- special modal that will add a perspective class to the html element -->
					

<button class="md-trigger md-setperspective" data-modal="modal-19" style="width:200px;height:60px">Word of the Day</button>
				

</nav>
</div>
			</div>

							


			

</div>
							
<div align="">
<iframe width="600" height="265" frameborder="0" src="divcontent.html" scrolling="no" align="">

</iframe>
</div>

<div class="block block-60">
								

<p><strong>Demo 2:</strong> Covering levels with back link</p>
								
<p>This menu will open by pushing the website content to the right. It has multi-level functionality, allowing endless nesting of navigation elements.</p>
								
<p>The next level can optionally overlap or cover the previous one.</p>
							
</div>
							

<div class="info">
								
<p>If you enjoyed this you might also like:</p>
								
<p><a href="http://goo.gl/JLJ4v5">Responsive Multi-Level Menu</a></p>
								
<p><a href="http://goo.gl/qjbq9Y">Google Nexus Website Menu</a></p>
							 
</div>
						

</div>
					

</div><!-- /scroller-inner -->
				
</div><!-- /scroller -->

			
</div><!-- /pusher -->
		
</div><!-- /container -->
		
<div class="md-overlay"></div><!-- the overlay element -->
<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		
<script src="ModalWindowEffects/js/classie.js"></script>
		
<script src="ModalWindowEffects/js/modalEffects.js"></script>

		
<!-- for the blur effect -->
		
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		
<script>
			
// this is important for IEs
			
var polyfilter_scriptpath = '/js/';
		
</script>
		
<script src="ModalWindowEffects/js/cssParser.js"></script>
		
<script src="ModalWindowEffects/js/css-filters-polyfill.js"></script>
	





<script src="js/classie.js"></script>
		
<script src="js/mlpushmenu.js"></script>
		
<script>
			
new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
				type : 'cover'
			} );
		</script>

<script src="CaptionHoverEffects/js/toucheffects.js"></script>
	

</body>

</html>