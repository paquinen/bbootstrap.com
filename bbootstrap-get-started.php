<!DOCTYPE html>	
<?php
/**             
* @package BBootstrap - bbootstrap.get-started.php
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2019.12.31
* @developers 
* @lastRevision 2019.12.31
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
	//$header = $block->internal->section_header();		
	
	$aside_left = '';
	$aside_right = '<a href="https://go.hotmart.com/D19067253L"><img src="http://www.mamapapilla.com/img/mkt/mama-papilla-banner-160x600.jpg" border="0" width="160" height="600" /></a>';
	$main =	$block->custom->block_step_by_step();					

	//*** SEO refiner by content // xxx. pending 
	//$block->meta_adder(); 
	//$block->metaAdds
?>
<html lang="en">
<?php $block->head($brand,$brandCode); ?>

<body id="page-top" class="index">
	<?php
	echo google_analytics($google_analytics);
	echo facebook_plugin($block->language);
	
		
	$block->navbar->navbar00($item, $brand,  $brandCode); //Ex. navba00 ($item, $brand,  $brandCode);		
	//echo $header;
	echo $block->html_divOpen('id="wrapper"','container-fluid','row');
	echo $block->html_aside('left', $aside_left, 0); //$left_right, $col, $content
	echo $block->html_aside('right', $aside_right, 2);
	echo $block->html_main('main', $main, 10);
	echo $block->html_divClose('id="wrapper"','container-fluid','row flex-xl-nowrap');

	//$block->MyRegion->countryHtml();	
	$block->internal->section_footer();

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
		//$('#motion').affix({
		//  offset: {
		//	top: ($('developers').outerHeight(true) + 
		//			40
		//  }
		//});
		
// onScreen jQuery plugin v0.2.1
// (c) 2011-2013 Ben Pickles
//
// http://benpickles.github.io/onScreen
//
// Released under MIT license.
;(function($) {
  $.expr[":"].onScreen = function(elem) {
    var $window = $(window)
    var viewport_top = $window.scrollTop()
    var viewport_height = $window.height()
    var viewport_bottom = viewport_top + viewport_height
    var $elem = $(elem)
    var top = $elem.offset().top
    var height = $elem.height()
    var bottom = top + height

    return (top >= viewport_top && top < viewport_bottom) ||
           (bottom > viewport_top && bottom <= viewport_bottom) ||
           (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
  }
})(jQuery);



$(function() {
  setInterval(function() {
    $("img")                             // get all <h2>s
      .removeClass('motion')     // reset their background colours
      .filter(":onScreen")              // get only <h2>s on screen
      .addClass('motion') // give them a red background
  }, 1000)                              // repeat every second
})
/*
$(function() {
  setInterval(function() {
    $("img")                             // get all <h2>s
      .removeClass('motion')     // reset their background colours
      .filter(":onScreen")              // get only <h2>s on screen
      .addClass('motion') // give them a red background
  }, 1000)                              // repeat every second
})


$(function() {
  setInterval(function() {
    $("img")                             // get all <h2>s
      .css("border-color", "red")      // reset their background colours
      .filter(":onScreen")              // get only <h2>s on screen
      .css("border-color", "blue") // give them a red background
  }, 1000)                              // repeat every second
})

$(function() {
  setInterval(function() {
    $("h2")                             // get all <h2>s
      .css("background-color", "")      // reset their background colours
      .filter(":onScreen")              // get only <h2>s on screen
      .css("background-color", "red") // give them a red background
  }, 1000)                              // repeat every second
})


$(function() {
  setInterval(function() {
    $('#motion')                             // get all <h2>s
     .removeClass('motion')
	     // reset their background colours
      .filter(":onScreen")              // get only <h2>s on screen
      .addClass('motion')  // give them a red background
  }, 1000)                              // repeat every second
})
*/
	</script>
</body>
</html>
<?php

?>
