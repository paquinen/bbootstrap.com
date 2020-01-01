<!DOCTYPE html>	
<?php
/**             
* Content code
* @package BBootstrap
* @Copyright (C) 2016.08.30 francisco ventura   
**/
	if (isset($_GET['test']) and $_GET['test']=='true') {
		error_reporting(E_ALL);
		ini_set('display_errors', 1);		
	}

	//*** Variables - Navigation 
	require_once("./block/bbootstrap.config.php");	
	
	$brand = "BBootstrap";
	$brandCode = "Front-End Blocking System";
	
	//*** Variables - Navbar  	
	$i=0; $item[$i]["title"] = 'Home';  		$item[$i]["label"] = 'link:http://www.bbootstrap.com';
	
	$i++; $item[$i]["title"] = 'Step-By-Step';  $item[$i]["label"] = 'step-by-step'; 	
	$i++; $item[$i]["title"] = 'RU Developer';  $item[$i]["label"] = 'developers'; 	
		
	$i++; $item[$i]["title"] = 'Examples';      $item[$i]["label"] = 'link:http://www.bbootstrap.com/bbootstrap-examples.php'; 			
	$i++; $item[$i]["title"] = 'About';			$item[$i]["label"] = 'about'; 
	//$i++; $item[$i]["label"] = 'amazonArea'; 	$item[$i]["title"] = 'My Region';
	
	//*** Variables - layout
	$col_left = 0; $col_main = 12; $col_right = 0; // Use Bootstrap Grid MUST ADD UP 12
	
	//*** BBootstrap - Engines
	require_once("./block/bbootstrap.php"); 	// Main Boostrap HTML´s block tools (templated)
	require_once("./block/bbootstrap.dist.php");	// Typical Addon´s on any site: Google Analytics, FB Plugs, GeoPlugin...
	
	require_once("./block/bbootstrap.content-internal.php"); // Ussual Internal Info
	
	require_once("./block/bbootstrap.content-custom.php"); // Specifics Contents
	require_once("./block/bbootstrap.test.php"); // New Block Testing
	
	//*** Bootstrap Blocks 
	require_once("./block/bbootstrap.navbar.php"); // BOOTSTRAP navbar´s
			
	//*** ACTIVATION 
	$block = new BBootstrap;
	$block->_constructor();
	
	$internal = new content_internal;
	$internal->_constructor();
	
	$content = new content_custom;
	$test = new test;  	
	$navbar = new bbootstrap_navbar;

	//*** Build HTMLs & Contents
	$header = $internal->section_header();		
	
	$aside_left = '';
	$aside_right = '';
	//$main_ =	$content->block_tools()
			//.$content->block_colors()
			//.$internal->block_team()	
	;
	$main = '';
	
	//*** SEO refiner by content
	//$block->meta_adder(); //$block->metaAdds
?>
<html lang="en">
<?php $block->head($brand,$brandCode); ?>

<body id="page-top" class="index">
	<?php
	echo google_analytics($google_analytics);
	echo facebook_plugin($block->language);
	echo $header;
	//$block->navbar_default($item, $brand,  $brandCode);	
	
	
	$navbar->navbar00($item, $brand,  $brandCode);
	 
	//echo $test->block_publicity();
	//$test->bootstrap_figure();
	//$content->section_portfolio();
	//$block->bootstrap_carousel('carouselHome', $slides); //, false, false, false
	
	//$block->bootstrap_carousel('carouselHome', $slides, false, false, false); //
	
	// bootstrap_carousel ($slides='', $container = true, $controls = true, $indicators = true)
	
	
	//require_once(__dir__'class/bootstrap.examples.html');
	//$test->block_portfolio();
	
	//echo $content->block_developers();
	//echo $content->block_step_by_step();
	echo $content->block_publicity();
	echo $internal->block_about();
	echo $content->block_awesome_icons();
	
	//echo $content->section_study_();
	$block->countryHtml();
	
	



	$internal->section_footer();
	
	echo $block->goTop();
	//require_once ('./content/porfolio.modals.php');
	//echo portofolio_modals();
	echo BootstrapCDN_jQuery();

	?>	
	<script>
		$(".navbar").affix({offset: {top: $("header").outerHeight(true)} }); 
	</script>
</body>
</html>
<?php

?>
