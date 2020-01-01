<?php
/**             
* Content Code
* @package BBootstrap Internal Contents
* @Copyright (C) 2019.08 Frank Cherry  **/

class test extends BBootstrap {
	
	var $metaAdds = array();
/*
	function section_header() {
		$html = $this->html_tagOpen('header', 'container', 'row');
		$html .= '
<!-- aquí -->
                <div class="col-lg-5">
					<div class="intro-text shadow">
                    <img class="img-responsive" src="./img/web/php-block.png" alt="">
                    </div>
                </div>
				<div class="col-lg-7">
					<div class="text-header shadow">
					    <span class="intro">Block Bootstrap</span>
                        <br>
                        <span class="desc">Web Developer - Graphics Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!--// <header> -->		
		';
		return $html;
	}
   */
   	function section_header_NEW() {
		if ($this->language != 'en_GB') {
			$this->metaAdds['title']['name'] = 'title';	
			$this->metaAdds['title']['content'] = TX_Learn_English;	
		}
		$html = '
<!-- Header -->
    <header>
        <div class="container">
            <div class="row" style="border: 0px solid red;">
                <div class="col-lg-5">
					<div class="intro-text shadow">
                    <img class="img-responsive" src="img/english-ninja.png" alt="">
                    </div>
                </div>
				<div class="col-lg-7">
					<div class="intro-text shadow">
					<span class="name">&middot; Start Now &middot; </span>
					
                        <h1 class="name">
						'.TX_Learn_English.'
						</h1>
						<hr class="star-light">
                        <span class="skills">How to Learn - Understand the Basics - Have a Study Strategy - Experience English Command</span>
						<hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>
<!--// Header -->
';		
	return $html;
	}
	

	function section_contact() { ?>
<!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center shadow">
                    <h2>Contact US</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Whatsapp Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!--// Contact Section -->
		
	<?php }


	
	function block_publicity() { 
		$html = $this->html_sectionOpen('publicity', 'container-fluid', 'row');
		//*** Title the Section Manually
		$html .= '
			<h2 class="shadowWhite text-left">This template has been built Thanks to:</h2>
		';
				$imgPubPath = 'http://block.englishninja.org/img/dist/';
		
		//*** Array content
		$i = 0;	
		$i++; // Bootstrat
		$client[$i]['img'] = $imgPubPath.'bootstrap.jpg';
		$client[$i]['link'] = 'https://getbootstrap.com/';
		$client[$i]['html'] = 'Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.'; //franciscov2384ue	
		
		$i++; // jQuery
		$client[$i]['img'] = $imgPubPath.'jquery.jpg';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '';
		
		$i++; // php
		$client[$i]['img'] = $imgPubPath.'php.png';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '';
		
		$i++; // Font-awesome
		$client[$i]['img'] = $imgPubPath.'font-awesome.jpg';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '';
		
		$i++; // GeoPlugin
		$client[$i]['img'] = $imgPubPath.'geoplugin.jpg';
		$client[$i]['link'] = '';
		$client[$i]['html'] = '';
	
		$html .= crawler_img320x175('mycrawler01', $client);
		$html .= crawler_MyCrawler01(); // *Copy & Paste to reconfigue to suit your needs block/bbootstrap.dist.php

		$html .= $this->html_sectionClose('publicity', 'container-fluid', 'row');
		return $html;
	}
	
	
	
}
?>

