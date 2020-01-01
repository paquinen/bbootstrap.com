<?php
/**             
* Content code
* @package BBootstrap
* @Copyright (C) 2016.08.31 Frank Cherry
**/

class bbootstrap_carousel extends BBootstrap {
	
	
	function bootstrap_carousel($id, $slides, $container = true, $controls = true, $indicators = true) { 
		if ($container == true) {
		$html = '
<!-- CAROUSEL '.$id.'-->
	<div class="container">
';			
		} else {$html ='';}

		$html .= '
		<div id="'.$id.'" class="carousel slide" data-ride="carousel">		
		';
		if ($indicators == true) {
			$html .= '
		<!-- carousel-indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#'.$id.'" data-slide-to="0" class="active"></li>
		  <li data-target="#'.$id.'" data-slide-to="1"></li>
		  <li data-target="#'.$id.'" data-slide-to="2"></li>
		</ol>	
		';
		}
		// Carousel Slider		
			$html .= '
		<!-- carousel-slides -->
		<div class="carousel-inner" role="listbox">
		';	
		for ($i=0;$i<count($slides); $i++) {
			if ($i==0) {$active = ' active';} else {$active = '';}
			$html .= '
			<div class="item '.$active.'">
				<img src="'.$slides[$i]['imgSRC'].'" alt="'.$slides[$i]['imgALT'].' - Slide #'.$i.'">
				<div class="carousel-caption">
					<h3>'.$slides[$i]['captionTitle'].'</h3>
					<p>'.$slides[$i]['captionText'].'</p>
				</div>
			</div>
			';				
		}
			$html .= '
		</div>
		';
		if ($controls == true) {
			$html .= '
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#'.$id.'" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#'.$id.'" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>		
		';	
		}	
		$html .= '
		</div>
		';
		if ($container == true) {
		$html .= '
	</div>
<!--// CAROUSEL '.$id.' -->	
';
		}
		echo $html;
	}
}
?>