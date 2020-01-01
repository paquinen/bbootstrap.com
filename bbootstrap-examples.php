<!DOCTYPE html>	
<?php
/**             
* @package BBootstrap - index.php
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2019.09.05
* @developers 
* @lastRevision 2019.09.30
* @version BBootstrap v.0.0.1
* @license MIT License
**/
	if (isset($_GET['test']) and $_GET['test']=='true') {
		error_reporting(E_ALL);
		ini_set('display_errors', 1);		
	}

	//*** Variables - Navigation 
	require_once("./block/bbootstrap.config.php");	
	
	$brand = "BBootstrap";
	$brandCode = "Front-End Block System";
	
	//*** Variables - Navbar  	
	$i=0; $item[$i]["title"] = 'Home';  		$item[$i]["label"] = 'link:'.$home;
	$i++; $item[$i]["title"] = 'About';			$item[$i]["label"] = 'link:'.$home.'#about'; 	
 	
	$i++; $item[$i]["title"] = 'Examples';      $item[$i]["label"] = 'link:'.$home.'bbootstrap-examples.php';
	$i++; $item[$i]["title"] = 'Tools';      $item[$i]["label"] = 'link:'.$home.'bbootstrap-tools-intro.php';
	//$i++; $item[$i]["title"] = 'About';			$item[$i]["label"] = 'about'; 
	//$i++;$item[$i]["title"] = 'My Region'; 		$item[$i]["label"] = 'amazonArea'; 	
	
	//*** BBootstrap - Engines
	require_once("./block/bbootstrap.php"); 				// Main Bootstrap HTML´s block tools
	require_once("./block/bbootstrap.dist.php");			// Distributors Addon´s: Analytics, FB Plugs, etc...
	require_once("./block/bbootstrap.test.php"); 			// New Block Testing
	
	//*** BBootstrap - Internal & Custom Contents			// Internal: header, footer
	require_once("./block/bbootstrap.content-internal.php");// Content - Ussual Internal Info  
	require_once("./block/bbootstrap.content-custom.php"); 	// Specifics Contents
	require_once("./block/html.borders-svg.php"); 	        // Html - Borders
		
	//*** BBootstrap - Bootstrap Blocks 
	require_once("./block/bbootstrap.navbar.php"); 			// BBootstraps navbar´s
	require_once("./block/bbootstrap.portfolio.php"); 		// BBootstraps portfolio´s
	
	//*** BBootstrap - Public Blocks 
	require_once("./block/bbootstrap.myregion.php"); 		// BBootstraps MyRegion
			
	//*** BBootstrap ACTIVATION 
	$block = new BBootstrap;
	$block->_constructor();
	$block->internal = new content_internal;
	$block->custom = new content_custom;
	$block->test = new test;  	
	$block->navbar = new bbootstrap_navbar;
	$block->portfolio = new bbootstrap_portfolio;
	$block->MyRegion = new MyRegion;

	//*** Build HTMLs & Contents
	
	$block->meta = $metaSEO;
	
	$header = $block->internal->section_header();		
	$header ='';
	
	$aside_left = '';
	$aside_right = '<a href="https://go.hotmart.com/D19067253L"><img src="http://www.mamapapilla.com/img/mkt/mama-papilla-banner-160x600.jpg" border="0" width="160" height="600" /></a>';
	$main_ =	$block->internal->block_intro()
			.$block->custom->block_developers()
			.$block->custom->block_step_by_step()
			.$block->internal->block_about()
			.$block->custom->block_tools()
			.$block->custom->block_colors()
			.$block->portfolio->block_portfolio_item_preview()
			.$block->portfolio->bootstrap_figure()	
			.$block->internal->block_team();

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
	$block->navbar->navbar00($item, $brand,  $brandCode); //Ex. navba00 ($item, $brand,  $brandCode);		

	//$block->bootstrap_carousel('carouselHome', $slides,'container-fluid'); //, false, false, false	
	//EX. bootstrap_carousel ($id, $slides='', $container = true, $controls = true, $indicators = true)

	echo $block->html_divOpen('id="wrapper"','container-fluid','row');
	echo $block->html_aside('left', $aside_left, 0); //$left_right, $col, $content
	echo $block->html_aside('right', $aside_right, 0);
	echo $block->html_main('main', $main, 12);
	echo $block->html_divClose('id="wrapper"','container-fluid','row flex-xl-nowrap');

	
	$block->MyRegion->countryHtml();	
	$block->internal->section_footer();
	if ($block->test == true) {$block->international_local();}

	echo $block->html_goTop();
	require_once ('./block/bbootstrap.content-modals.php');
	//echo content_1();
	echo $block->internal->modal_email();
	echo BootstrapCDN_jQuery();
	//$('#exampleModal').modal('show')
	?>	
	<script>
		$(".navbar").affix({offset: {top: $("header").outerHeight(true)} }); 
		 
		 
//		window.setTimeout(lancher, 6000);
//		function lancher() {
//			$('#exampleModal').modal('show')
//		}
	</script>
</body>
</html>
<?php

?>
