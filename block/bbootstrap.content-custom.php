<?php
/**             
* @package BBootstrap - bbootstrap.content-custom.php
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2019.07.31
* @developers 
* @lastRevision 2019.09.14
* @version BBootstrap v.0.0.1
* @license MIT License
**/

class content_custom extends BBootstrap {
   	
	function scrawler($id, $item) {
		$html = '
			<div class="marquee" id="mycrawler2">		
		';
	
		$html .= '
			</div>	
		';		
	}
	
	function block_publicity() { 
		$html = $this->html_sectionOpen('publicity', 'container-fluid', 'row');
		//*** Title the Section Manually
		$html .= '
			<div class="col-xs-12">
				<h2 class="shadowWhite text-left">This template has been built Thanks to:</h2>
			</div>
		';
				$imgPubPath = 'http://afiliados.mamapapilla.com/img/dist/'; // xxx. change this method
		
		//*** Array content
		$i = 0;
		$i++; // Bootstrat
		$client[$i]['title'] ='Bootstrat';
		$client[$i]['img'] = $imgPubPath.'bootstrap.jpg';
		$client[$i]['link'] = 'https://getbootstrap.com/';
		$client[$i]['html'] = ''; 
		
		$i++; // jQuery
		$client[$i]['title'] = 'jQuery';
		$client[$i]['img'] = $imgPubPath.'jquery.jpg';
		$client[$i]['link'] = 'https://jquery.com/';
		$client[$i]['html'] = '';
		
		$i++; // php
		$client[$i]['title'] = 'PHP';
		$client[$i]['img'] = $imgPubPath.'php.png';
		$client[$i]['link'] = 'http://www.php.net';
		$client[$i]['html'] = '';
		
		$i++; // Font-awesome
		$client[$i]['title'] = 'Font-awesome';
		$client[$i]['img'] = $imgPubPath.'font-awesome.jpg';
		$client[$i]['link'] = 'https://fontawesome.com';
		$client[$i]['html'] = '';
	
		$html .= crawler_img('mycrawler01', $client);
		$html .= crawler_MyCrawler01(); // *Copy & Paste to reconfigue to suit your needs block/BBootstrap.dist.php

		$html .= $this->html_sectionClose('publicity', 'container-fluid', 'row');
		return $html;
	}
	
	function block_awesome_icons() { 
		$html = $this->html_sectionOpen('icons', 'container-fluid', 'row');
		//*** Title the Section Manually
		$html .= '
		<div class="col-lg-12">
			<h3 class="shadowWhite text-left">Awesome Icons Super Library...</h3>
		</div>
		';
				$imgPubPath = 'http://www.bbootstrap.com/img/dist/'; // xxx. change this method
		
		//*** Array content
		$i = 0;			
		$i++; // fa-github-square
		$client[$i]['title'] = 'fa-github-square';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fab fa-github-square fa-9x"></i>';
		
		$i++; // fa-github-alt
		$client[$i]['title'] = 'fa-github-alt';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fab fa-github-alt fa-9x"></i>';
		
		$i++; // fa-code-branch
		$client[$i]['title'] = 'fa-code-branch';
		$client[$i]['img'] = ''; 
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-code-branch fa-9x"></i>';
		
		$i++; // fa-plane
		$client[$i]['title'] = 'fa-plane';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-plane fa-9x"></i>';
		
		$i++; // fa-code
		$client[$i]['title'] = 'fa-code';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-code fa-9x"></i>';
		
		$i++; // 
		$client[$i]['title'] = 'fa-laptop-code';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-laptop-code fa-9x"></i>'; 
		
		$i++; // fa-heart
		$client[$i]['title'] = 'fa-heart';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="far fa-heart fa-9x"></i>'; 
		
		$i++; // fa-dove
		$client[$i]['title'] = 'fa-dove';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-dove fa-9x"></i>'; 
		
		$i++; // fa-cloud-su
		$client[$i]['title'] = 'fa-cloud-su';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-cloud-sun fa-9x"></i>'; 
		
		$i++; // fa-user-secret
		$client[$i]['title'] = 'fa-user-secret';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-user-secret fa-9x"></i>';
		
		$i++; // fa-file-code
		$client[$i]['title'] = 'fa-file-code';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="far fa-file-code fa-9x"></i>';
		
		$i++; // fa-code
		$client[$i]['title'] = 'fa-code';
		$client[$i]['img'] = '';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '<i class="fas fa-code fa-9x"></i>';
		
		$html .= '
			<div class="col-lg-12">';
		$html .= crawler_img('mycrawler01', $client);
		$html .= crawler_MyCrawler01(); // *Copy & Paste to reconfigue @block/BBootstrap.dist.php
				$html .= '
			</div>';
		$html .= $this->html_sectionClose('icons', 'container-fluid', 'row');
		return $html;
	}

	function block_step_by_step() {
		// Ex. Panel Group
		$i = 0; $i++;
		$panel[$i]['title'] = 'MyDomainCorp.com';
		$panel[$i]['intro'] = '<p>Ideally to operate with BBootstrap, you should have a domain, or a online directory.</p>';
		$panel[$i]['body'] = 'YourDomain.com';
		
		$i++;
		$panel[$i]['title'] = 'Host Your Script';
		$panel[$i]['intro'] = 'BBootstrap is a PHP based, hence the best way to have working nicely is buy hosting the code on an online server ';
		$panel[$i]['body'] = 'Here we give you a quick advice of Internet Service Provides where you can buy your domain and rent hosting space.';
		
		$i++;
		$panel[$i]['title'] = 'Adapt the Template';
		$panel[$i]['intro'] = 'The source code is very simple. If you are already familiar with Bootstrap tools, you will understand your template within a few hours.';
		$panel[$i]['body'] = 'YourDomain.com';
		
		$html =  $this->html_sectionOpen('step_by_step', 'container', 'row');
		$html .= '
                <div class="col-xs-3">
					<div class="text-center">
						<i class="fa fa-spinner fa-spin fa-5x fa-fw fa-flip-both"></i>
						<i class="fa fa-circle-o-notch fa-spin fa-6x fa-fw"></i>
						<i class="fa fa-refresh fa-spin fa-8x fa-fw"></i>
						<i class="fa fa-cog fa-spin fa-5x fa-fw"></i>
						<i class="fa fa-spinner fa-pulse fa-4x fa-fw"></i>
					</div>	
                </div>
				<div class="col-xs-9">
					<div class="text-left">
						<h2>BBootstrap</h2>
						<p>
						BBootstrap will only run on a server. It is constructed in PHP...
						</p>
					</div>
					'.$this->html_panel_group ('MyAcordeon', $panel).'	
                </div>
		';	
		$html .=  $this->html_sectionClose('step_by_step', 'container', 'row');
		return $html;
	}
	
	function block_developers() { 
		$html = $this->html_divOpen(false, 'container-fluid', 'row');	
		$html .= block_svg_wave_nice();
		$html .= $this->html_divClose(false, 'container-fluid', 'row');
		
		$html .=  $this->html_sectionOpen('developers', 'container-fluid', 'row');
		$html .= $this->html_divClose(false, true, true);
		$html .= $this->html_divOpen(false, 'container', 'row');	
		$html .= '
                <div id="motion" class="col-lg-6">
					
					<img alt="are you a developer?" src="img/web/earn-money-online.jpg">
					
                </div>	
		';
		$html .= '
                <div class="col-lg-6 text-center">
					<h2>Are you a Developer?</h2>
                    <i class="fab fa-bootstrap fa-4x"></i>
					<h4><em>BBootstrap is an Open Code project. Maybe you are able to give valuable support to our script</em></h4>
                </div>	
		';	
		$html_ .= '
                <div class="col-lg-12 text-center">
                    <i class="fab fa-font-awesome-flag fa-4x"></i>
					<h4><em>Reading &middot; Speaking &middot; Lisening &middot; Writing</em></h4>
                </div>	
		';	
		$html_ .= '
                <div class="col-lg-10 col-offset-1">
					<img class="img-responsive" title="" alt="" src="img/web/are-you-a-developer.jpg">
					
                </div>	
		';
		$html .=  $this->html_sectionClose('developers', 'container', 'row');
		return $html;
	}
	
		function block_tools() { 
		$html =  $this->html_sectionOpen('tools', 'container', 'row');
		$html .= '
                <div class="col-lg-12 text-center">
					<h2>Integration of Web Technology Tools</h2>
					<p class="text-left">
					
					</p>
                </div>	
		';
		$html .= '

                <div class="col-xs-6 col-lg-3 text-center">
                    <i class="fab fa-php fa-6x"></i>
					<h3><em>php</em></h3>
					<p class="text-left">
					PHP is a popular general-purpose scripting language that is especially suited to web development.
					</p>
					<ul class="text-left">
						<li>
							Very comprehensive php block system
						</li>
						<li>
							Main libray with most used Bootstrap coding
						</li>
					</ul>	
                </div>	
		';
		$html .= '
                <div class="col-xs-6 col-lg-3 text-center">
					<i class="fab fa-bootstrap fa-6x"></i>
                    <h3>Bootstrap</h3>
					<p>Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.</p>
                </div>	
		';
			
		$html .= '
                <div class="col-xs-6 col-lg-3 text-center">
					<img alt="jQuery" src="http://www.bbootstrap.com/img/dist/jquery-logo.png"
					style="width: 80px; height: 80px;">
                   
					<h3><em>jQuery</em></h3>
					<p>
					jQuery is a JavaScript library designed to simplify HTML DOM tree traversal and manipulation, as well as event handling, CSS animation, and Ajax.
					</p>
                </div>	
		';	
		$html .= '
                <div class="col-xs-6 col-lg-3 text-center">
                    <i class="fab fa-font-awesome-flag fa-6x"></i>
					<h3>Font Awesome</h3>
					<p>Get vector icons and social logos on your website with Font Awesome, the web´s most popular icon set and toolkit. </p>
                </div>	
		';	
		$html .=  $this->html_sectionClose('tools', 'container-fluid', 'row');
		return $html;
	}
	
	function block_colors() { 
		$html =  $this->html_sectionOpen('colors', 'container', 'row d-inline-flex');
		$html .= '
                <div class="col-lg-12 text-center">
					<h2>Growing family of color schemes:</h2>
					<p class="text-left">
					
					</p>
                </div>	
		';
		$html .= '
                <div class="col-xs-6 col-lg-3">
					<div class="fire-box text-center">
						<i class="fab fa-free-code-camp fa-4x"></i>
						<h2 class="shadowWhite">Fire</h2>
						<h4><em>Fire</em></h4>
					</div>
                </div>	
		';
		$html .= '
                <div class="col-xs-6 col-lg-3">
					<div class="air-box text-center">
						<i class="fas fa-wind fa-4x"></i>
						<h2 class="shadowWhite">Air</h2>
						<h4><em>Air</em></h4>
					</div>	
                </div>	
		';	
		$html .= '
                <div class="col-xs-6 col-lg-3">
					<div class="water-box text-center">
						<i class="fas fa-water fa-4x"></i>
						<h2 class="shadowWhite">Water</h2>
						<h4><em>Water</em></h4>
					</div>
                </div>	
		';	
		$html .= '
                <div class="col-xs-6 col-lg-3">
					<div class="earth-box text-center">
						<i class="fa fa-globe fa-4x"></i>
						<h2 class="shadowWhite">Earth</h2>
						<h4><em>Earth</em></h4>
					</div>
                </div>	
		';
		$html .= '
                <div class="col-lg-12 text-center">
					<h4>Choose your Color Scheme:</h4>
					<ul class="list-inline">
						<li>
							<a href="?view=bbootstrap" class="btn btn-success btn-lg" role="button"><i class="fa fa-bolt"></i>&nbsp;BBootstrap</a>
						</li>
						<li>
							<a href="?view=unionJack" class="btn btn-success btn-lg" role="button"><i class="fa fa-bolt"></i>&nbsp;UnionJack</a>
						</li>
						<li>
							<a href="?view=vampire" class="btn btn-success btn-lg" role="button"><i class="fa fa-bolt"></i>&nbsp;Vampire</a>
						</li>
						<li>
							<a href="?view=greenish" class="btn btn-success btn-lg" role="button"><i class="fa fa-bolt"></i>&nbsp;Greenish</a>
						</li>
						<li>
							<a href="?view=spanishSeaman" class="btn btn-success btn-lg" role="button"><i class="fa fa-bolt"></i>&nbsp;Spanish Seaman</a>
						</li>
						
					</ul>
                </div>	
				';
		$html .= $this->html_divClose(false, 'container', 'row d-inline-flex');
		$html .= $this->html_divOpen(false, 'container-fluid', 'row d-inline-flex');
		$html .= block_svg_cloud();

		$html .=  $this->html_sectionClose('colors', 'container-fluid', 'row d-inline-flex');
		return $html;
	}	
	
	function block_test() { 
		$html =  $this->html_sectionOpen('colors', 'container', 'row d-inline-flex');
		
		$html .= $this->html_divClose(false, 'container', 'row d-inline-flex');
		$html .= $this->html_divOpen(false, 'container-fluid', 'row d-inline-flex');
		$html .= block_svg_cloud();
		$html .= block_svg_top_straight();
		$html .= block_svg_01();
		$html .= block_svg_02();
		$html .= block_svg_cloud();
		$html .= block_svg_04();
		$html .= block_svg_top();
		$html .= block_svg_bottom();

		$html .=  $this->html_sectionClose('colors', 'container-fluid', 'row d-inline-flex');
		return $html;
	}
}
?>



