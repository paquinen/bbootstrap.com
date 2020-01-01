<?php
/**             
* @package BBootstrap - bbootstrap.content-internal
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2016.08.30
* @developers 
* @lastRevision 2019.09.14
* @version BBootstrap v.0.0.1
* @license MIT License
**/

class content_internal extends BBootstrap {
	
	var $metaAdds = array();

	function section_header() {
	/*	if ($this->language != 'en_GB') {
			$this->metaAdds['title']['name'] = 'title';	
			$this->metaAdds['title']['content'] = 'Bootstrap Block';	
		}  */
		$html = $this->html_tagOpen('header', 'container', 'row');
		$html .= '
                <div class="col-lg-5">
					<div class="intro-text shadow">
                    <img class="img-responsive" src="./img/web/block-bootstrap-lay.png" alt="Block for Bootstrap">
                    </div>
                </div>
				<div class="col-lg-7">
					<div class="text-header shadow">
					    <span class="intro">'.TX_HEADER_TITLE.'</span>
                        <br>
                        <span class="desc">'.TX_HEADER_DESC.'</span>
						<p>&middot; Plug & Play responsive Web Engine</p>
						<p>&middot; Organised in neat Blocks</p>
						<p>&middot; Code labeled for easy understanding</p>
						<p>&middot; Ideal for beginners</p>
							<a href="./bbootstrap-get-started.php" class="btn btn-success btn-lg" role="button"><i class="fa fa-bolt"></i>&nbsp;Get Started</a>
							<a href="#" class="btn btn-primary btn-lg" role="button"><i class="fas fa-download"></i>&nbsp;Download Beta V 0.0.1</a>
						 <span class="intro">Landing Pages &middot; Affiliate Marketing &middot; Reward Form</span>
                    </div>
                </div>	
		';
		$html .= $this->html_tagClose('header', 'container', 'row');
		return $html;
	}
	function block_intro() {		
		$html =  $this->html_sectionOpen('intro', 'container-fluid', 'row');
		$html .= block_svg_super3('st_fire opa7','st_air opa5','st_fire opa3');		
		$html .= $this->html_divClose(false, true, true);
		$html .= $this->html_divOpen(false, 'container', 'row');	
		$html .= '
                <div class="col-lg-6 col-offset-1 text-right">                    
					<img class="img-responsive" src="./img/web/responsive_01.jpg" alt="Block for Bootstrap">
                </div>                
				<div class="col-lg-4 text-right">                    
					<h2><em>Just Plug&Play</em></h2>
					
					<p>'.TX_HEADER_P1.'</p>
                </div>';
		$html .= $this->html_divClose(false, false, true);
		$html .= $this->html_divOpen(false, false, 'row bg1');	
		$html .= '
				<div class="col-lg-6 col-offset-1 text-right">   
					
					<h3><em>Easy to Understand</em></h3>
					<p>'.TX_HEADER_P2.'</p>
                </div>	
				<div class="col-lg-4 text-right">   
					<img class="img-responsive" src="./img/web/bbootstrap-front-end-community.png" alt="Bootstrap the open source community">
                </div>';
				
		$html .= $this->html_divClose(false, false, true);
		$html .= $this->html_divOpen(false, false, 'row');
		$html .= '				
				<div class="col-lg-6 text-right">                    
					<img class="img-responsive" src="./img/web/background_03.jpg" alt="Bootstrap the open source community">
                </div>	
				<div class="col-lg-6 text-right">                    
					<h3>Build in a few hours...<br>
						...your Money Making Machine</h3>
					<p>'.TX_HEADER_P3.'</p>

                </div>	
				
		';
		$html .=  $this->html_sectionClose('intro', 'container', 'row');
		return $html;
	}
	
	function block_about() {
		$html = $this->html_sectionOpen('about', 'container-fluid', 'row');
		$html .= block_svg_top_straight();
		$html .= $this->html_divClose(false, true, true);
		$html .= $this->html_divOpen(false, 'container', 'row');
		$html .= '
                <div class="col-lg-12 shadow text-center">
                    <h3>What is Block Bootstrap?</h3>                    
                </div>	
                <div class="col-lg-5 col-lg-offset-2">
                    <p>This is bootstrap collection integrated in a simple way to give you an easy start to build your websiteS.</p>
					<ul>
						<li>Just a few hours to set up</li>
						<li>Easy to handle MANUALLY</li>
						<li>Excellent source code labelling for good script understanding</li>
						<li>Free OPEN code to be used for whatever you want</li>
						<li>Suitable for beginners</li>
					</ul>
                </div>
                <div class="col-lg-5">
                   <p>Bootstrap Block is a pre-built template that uses Bootstraps configuation 3.4.1</p><p>Now you can build your web site a few hours. Experience the most flexible template to implement a organic growth content site.</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Block
                    </a>
                </div>				
		';
		$html .= $this->html_divClose(false, 'container', 'row');
		$html .= $this->html_divOpen(false, 'container-fluid', 'row');
		$html .= block_svg_01("st_water");
		$html .= $this->html_sectionClose('about', 'container-fluid', 'row');	
		return $html;
	}
	
	function block_team() { 
		$html =  $this->html_sectionOpen('team', 'container', 'row flex-center');
		$html .= '
                <div class="col-lg-10 col-offset-1 text-center">
						<h2 class="shadowWhite">Best team on Board</h2>
                </div>	
		';
		$html .= '
                <div class="col-lg-3">
					<div class="team-card">
						<i class="fas fa-heartbeat fa-5x shadowWhite"></i>
						<h3 class="shadowWhite">Helen Cerezo</h3>
						<h4><em>(Air)</em></h4>
						<ul>
							<li>Content Edition Supervisor</li>
							<li>Translation Compliance</li>
							<li>International Social Nets Penetration</li>
						</ul>
					</div>	
                </div>	
		';
		$html .= '
                <div class="col-lg-3">
					<div class="team-card">
						<div class="bg-air text-center">							
							<i class="fab fa-free-code-camp fa-5x"></i>
							<h3 class="shadowWhite">Frank Crerry</h3>
							<h4><em>(Fire)</em></h4>
							<ul>
								<li>Direction of Strategy</li>
								<li>Marketing Diffusion</li>
								<li>Content Creation & Management</li>								
								<li>Organic Growth</li>
							</ul>
						</div>
					</div>	
                </div>	
		';	
		$html .= '
                <div class="col-lg-3">
					<div class="team-card">
						<div class="bg-air text-center">	
							<i class="fas fa-gem fa-5x"></i>
							<h3 class="shadowWhite">Pab Ventura</h3>
							<h4><em>(Water)</em></h4>
							<ul>
								<li>Creations Supervisor</li>
								<li>Video & Graphics Editor</li>
								<li>Internet Presence Compliance</li>
							</ul>
						</div>
					</div>
                </div>	
		';	
		$html .=  $this->html_sectionClose('team', 'container', 'row');
		return $html;
	}
	function modal_email() {
		$html ='';
		$html .= $this->html_divOpen('id="exampleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"'
					, 'class="modal-dialog" role="document"'
					, 'modal-content');
		$html .= $this->html_divOpen(false, 'container', 'row');
		$html .= '';
		
		$html .= '
				<div class="col-lg-12">
					<h5 class="shadow white">Quiero recibir noticias de BBootstrap</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>	
				<div class="col-lg-3 offset-2">
					form-group
				</div>
				<div class="col-lg-5">
					
				</div>	
		';
		
		$html .= $this->html_divClose(false, 'container', 'row');
		$html .= $this->html_divClose('id="exampleModal"', 'class="modal-dialog" role="document"', 'modal-content');
		return $html;
		
	}
	function section_footer() { 
		$html = '
<!-- Footer -->
    <footer id="footer">';
		$html .= $this->block_footer01();
		$html .= $this->block_footer02();
		$html .= $this->block_footer03();
		$html .= '
    </footer>
<!--// Footer -->		
		';		
		echo $html;
	}
	
	function block_footer01() {
		$html = $this->html_divOpen('class="footer01"', 'container', 'row'); 
		$html .= '
                    <div class="footer-col col-md-4">
                        <h3>Follow Block Bootstrap</h3>
                        <div class="fb-page" data-href="https://www.fb.me/BlockBootstrap" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                    </div>
                    <div class="footer-col col-md-4">
                        <h4>Be Bootstrap</h4>
						<ul>
							<li>Download</li>
							<li></li>
							<li></li>
							<li></li>
						</ul>                        
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Support our Project</h3>
                       
					</div>
		';
		// <p>We would appreciate a <em>Support Donation of $10</em> <a href="http://block.englishninja.org">Bootstrap Block</a>.</p>
		
		$html .= $this->html_divClose('class="footer01"', true, true);
		return $html;
	}

	
	function block_footer02() {
		$social['github'] = 'http://www.github.com/BBootstrap';
		$social['flickr'] = 'https://www.flickr.com/photos/184400101@N02/';
		$social['twitter'] = 'https://twitter.com/b_bootstrap';
		$social['instagram'] = 'https://www.instagram.com/_bbootstrap/';
		$social['facebook'] = 'http://www.fb.me/BlockBootstrap';
		//$social['skype'] = '';
		//$social['google-plus'] = '';
		//$social['whatsapp'] = '';
		$html = $this->html_divOpen('class="footer02"', 'container', 'row col-lg-12 text-center'); 
		$html .= $this->html_social_list('list-inline', 'fa-3x', $social);
		$html .= $this->html_divClose('class="footer02"', true, true);
		return $html;
	}
	
	function block_footer03(){
		$html = $this->html_divOpen('class="footer03"', 'container', 'row'); 
		$html .= '
                    <div class="col-lg-9">
                        Copyright &copy; Block Bootstrap &middot; 2019
                    </div>
					<div class="col-lg-3 text-right">
                        '.geoplugin_credits().'
                    </div>	
		';
		$html .= $this->html_divClose('class="footer03"', true, true);
		return $html;
	}
	
}
?>

