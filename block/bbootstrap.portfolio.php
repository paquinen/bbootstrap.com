<?php
/**             
* @package BBootstrap - bbootstrap.portofolio.php
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2019.08.24
* @developers 
* @lastRevision 2019.12.25
* @version BBootstrap v.0.0.1
* @license MIT License
**/

class bbootstrap_portfolio extends BBootstrap {
	
		
	function section_portfolio() { ?>

<!-- Portfolio Grid Section <div class="container"></div> -->
    <section id="portfolio">
        
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 portfolio-item col-sm-offset-2">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/whatsapp.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-1 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/facebook.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-1 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/skype.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-1 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/twitter.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-1 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/pinterest.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-1 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/instagram.png" class="img-responsive" alt="">
                    </a>
                </div>
				
				<div class="col-sm-1 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/flickr.png" class="img-responsive" alt="">
                    </a>
                </div>
				
				<div class="col-sm-1 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/google-plus.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        
    </section>
<!--// Portfolio Grid Section -->

	<?php }
	
	function block_portfolio_item_preview($gridClass='col-md-3', $item='') {
		$path = './img/portfolio/';
		$i=1; // $item['label'] in ORDER of appereance
		$item[$i]['title'] = 'Mama Papilla';
		$item[$i]['link'] = 'http://www.mamapapilla.com/';
		$item[$i]['img'] = $path.'01-official-mamapapilla.com.jpg';
		$item[$i]['imgAlt'] = 'Mama Papilla';
		$item[$i]['desc'] = 'Mama Papilla is a Marketing Funnel that sales an info-product upon the Baby Culture niche';
		
		$i++; 
		$item[$i]['title'] = 'Scooter Bay Info';
		$item[$i]['link'] = 'http://www.scooterbay.info/';
		$item[$i]['img'] = $path.'02-official-scootersbay.com.jpg';
		$item[$i]['imgAlt'] = 'Scooter Bay Info';
		$item[$i]['desc'] = 'Community for Electric Scooter Lovers';
		
		$i++; 
		$item[$i]['title'] = 'English Ninja';
		$item[$i]['link'] = 'http://www.englishninja.org/';
		$item[$i]['img'] = $path.'03-official-englishninja.org.jpg';
		$item[$i]['imgAlt'] = 'English Ninja - Learn English by Yourself';
		$item[$i]['desc'] = 'Community for Electric Scooter Lovers';
		
		$i++; 
		$item[$i]['title'] = 'Rei Das Ervas';
		$item[$i]['link'] = 'http://www.reidaservas.com.br/';
		$item[$i]['img'] = $path.'04-official-reidaserva.com.com.br.jpg';
		$item[$i]['imgAlt'] = 'Rei Das Ervas';
		$item[$i]['desc'] = 'Recepie Book';
		
		$i++; 
		$item[$i]['title'] = 'Viento Solar';
		$item[$i]['link'] = 'http://www.vientosolar.es/';
		$item[$i]['img'] = $path.'05-official-vientosolar.es.jpg';
		$item[$i]['imgAlt'] = 'Viento Solar - Renewable Energy';
		$item[$i]['desc'] = 'Renewable Energy information, guidance and products!';
		
		$i++; 
		$item[$i]['title'] = 'iSTA Breeze Spain (unpublished)';
		$item[$i]['link'] = 'http://ista.pro-df.com/';
		$item[$i]['img'] = $path.'06-unofficial-istabreeze.jpg';
		$item[$i]['imgAlt'] = 'iSTA Breeze Product Distributor Spain';
		$item[$i]['desc'] = 'Home page for wind generator manufacture iSTA Breeze in Spain';
		
		$i++; 
		$item[$i]['title'] = 'Chiringuito - La Esquinita';
		$item[$i]['link'] = 'http://laesquinita.pro-df.com';
		$item[$i]['img'] = $path.'07-official-laesquinita.jpg';
		$item[$i]['imgAlt'] = 'Chiringuito - La Esquinita';
		$item[$i]['desc'] = 'Menu Type for high level catering in Brasilia (Brazil)';
		$i++; 
		$item[$i]['title'] = 'Pro-DF Intelligent Development';
		$item[$i]['link'] = 'http://www.pro-df.com';
		$item[$i]['img'] = $path.'08-official-pro-df.com.jp.jpg';
		$item[$i]['imgAlt'] = 'Pro-DF Intelligent Development';
		$item[$i]['desc'] = 'Internet Servicing for local business area';
		
		$html ='';
		$html .= $this->html_sectionOpen('portofolio', 'container', 'row'); 
		$html .= '
			<div class="col-lg-12">
				<h3>
					Some builts with Block Bootstrap:
				</h3>
			</div>
			';						
		for ($i=1;$i<=count($item);$i++) {
			$html .= '
			<div class="'.$gridClass.'">
				<div class="item-preview">
					<div class="item-preview-title">'.$item[$i]['title'].'</div>
					<a class="item-preview-img box-shadow-lg d-block" href="'.$item[$i]['link'].'" target="_blank">
					<img class="img-fluid" src="'.$item[$i]['img'].'" alt="'.$item[$i]['imgAlt'].'">
					</a>
					<div class="item-preview-description">'.$item[$i]['desc'].'</div>
				</div>
			</div>
			';				
		}
		$html .= $this->html_sectionClose('portofolio', 'container-fluid', 'row'); // ex. $id, 'container-fluid', 'row'
		return $html;
	}
	
	function portofolio_book() { /// modal
	?>	
	<div class="row">
                <div class="col-sm-2 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/portfolio01.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-2 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/portfolio02.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-2 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/portfolio03.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-2 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/portfolio04.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-2 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/portfolio05.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-2 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/portfolio06.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>	
	
	<?php	
	}
   
	function bootstrap_figure() {
		$path = './img/industries/';
		$i=1;
		$ref[$i]['title'] = 'Information';
		$ref[$i]['img'] = $path .'industry-11.jpg';
		$i++;
		$ref[$i]['title'] = 'Comunication';
		$ref[$i]['img'] = $path .'industry-12.jpg';
		$i++;
		$ref[$i]['title'] = 'Distribution';
		$ref[$i]['img'] = $path .'industry-13.jpg';
		$i++;
		$ref[$i]['title'] = 'Production';
		$ref[$i]['img'] = $path .'industry-14.jpg';
		$i++;
		$ref[$i]['title'] = 'Marketing';
		$ref[$i]['img'] = $path .'industry-21.jpg';
		$i++;
		$ref[$i]['title'] = 'Sales';
		$ref[$i]['img'] = $path .'industry-22.jpg';
		$i++;
		$ref[$i]['title'] = 'Logistics';
		$ref[$i]['img'] = $path .'industry-23.jpg';
		$i++;
		$ref[$i]['title'] = 'Division';
		$ref[$i]['img'] = $path .'industry-24.jpg';
		
		$html = '';
		$html .= $this->html_divOpen('class="custom-industries-section"', false, 'class="row custom-industries-image d-flex flex-wrap"');
		$html .= '
			<div class="col-lg-12">
				<h3>
					Easy displayment of Products & Services:
				</h3>
			</div>
			';
		for ($i=1; $i<=count($ref); $i++) {
			$html .='
				<div class="custom-industries-box">
					<div class="custom-industries-overlay">
						<span>'.$ref[$i]['title'].'</span>
					</div>
					<figure>
						<img src="'.$ref[$i]['img'].'" alt="'.$ref[$i]['title'].'">
					</figure>					
				</div>		
			';			
		}
		$html .= $this->html_divClose('class="custom-industries-section"', false, 'class="row custom-industries-image d-flex flex-wrap"');
		return $html;
	}   
}
?>