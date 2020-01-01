<?php
/**             
* @package BBootstrap
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2016.08.30
* @developers 
* @lastRevision 2019.09.14
* @version BBootstrap v.0.0.1
* @license MIT License
**/

class BBootstrap {
	// Variables WEB & SERVER
	var $url;
	var $root;
	var $domain = 'afiliados.mamapapilla.com';
	
	// Variables GEO LOCATION
	var $lang631 ='en';
	var $countryCode ='US';
	var $countryName = 'USA'; // Spain
	var $language = 'en_GB';
	
	var $lang = array(); // MyRegion.BBootstrap
	var $geo = array();
	
	// Variables SITE & TEMPLATE	
	var $view;
	var $meta = array();
	var $test = false;
	
	// Variables CONTENTS
	var $text = array();
	var $spec = array();
	var $specCat = array();
	var $specRow = array();
	var $ref = array();
	
	// Variables OTHERS 
	var $google_analytics = 'UA-147522699-1'; // Installation UA-67108612-2 TRACKING bbootstrap - CHANGE NAME for installation 
	
	public function _constructor() {
		$this->root = $_SERVER["DOCUMENT_ROOT"];
		$this->url = $_SERVER["HTTP_HOST"];
		if (isset($_GET['view'])) {$this->view = $_GET['view'] ;} 
		
		
		//*** Country Code Cookie Setting ***//
		if (!isset($_GET['countryCode']) and !isset($_COOKIE['countryCode'])) {
			$this->internationalGeo();
			if (empty($this->geo['countryCode'])) {
				$this->geo['countryCode'] = 'US';				
			} 
			if (isset($_GET['countryCode'])) { setcookie("countryCode", $_GET['countryCode']); } // expire in 30 days 
		} 
		else {
			if (isset($_GET['countryCode'])) { //
				$this->geo["countryCode"] = $_GET['countryCode'];
				setcookie("countryCode", $this->geo["countryCode"]);  // expire in 30 days 
			} 
			else {
				$this->geo["countryCode"] = $_COOKIE['countryCode'];
			} 
		}
		//*** Language Code Cookie Setting ***/
		if (!isset($_GET['language']) and !isset($_COOKIE['language'])) {
			$this->internationalGeo();
			$this->language = $this->facebookLang($this->geo['countryCode'], 'cc'); // expire in 30 days 
		} 
		else {
			if (isset($_GET['language'])) { //
				$this->language = $_GET['language'];				
			} 
			else {
				$this->language = $_COOKIE['language'];				
			}
		}
		//setcookie("language", $this->language);
		
		//*** Language File Loading for Multilanguage ***/ (file name format: en_GB)
		//$filename = '../lang/'.$this->language.'.php';
		
		$langFile1 = $this->root.'/lang/'.$this->language.'.php';
		$langFile0 = $this->root.'/lang/en_GB.php';
		
		if (file_exists($langFile1)) {
			require_once($langFile1);
		} else {
			require_once($langFile0);	
		}
		//*** Meta Rebuilder for SEO ***//
		//$this->head_metas(); xxx. Metas should be load here
		

	}

function head($title1, $title2='', $title3='') { // $brand, $brandCode, $brandFurther
	$title = $title1;
	if ($title2 != '') { $title .= ' &middot; '.$title2;}
	if ($title3 != '') { $title .= ' &middot; '.$title3;}		
	?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>
	<?php
		$this->meta_builder(); //
		
		echo BootstrapCDN();
		echo awesome_icon();
		echo crawler_activation();
	?>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRaleway:400,700&display=swap" rel="stylesheet">
	<!-- Custom Fonts 
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:4image_crawler()00,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	-->
	
	<!-- TEMPLATE test area
    

	-->
	<?php
	switch ($this->view) {		
		case "bbootstrap":
			echo '<link href="./css/colors-bootstrap.css" rel="stylesheet">';	
		break;
		case "unionJack":
			echo '<link href="./css/colors-unionjack.css" rel="stylesheet">';	
		break;
		case "greenish":
			echo '<link href="./css/colors-greenish.css" rel="stylesheet">';	
		break;
		case "spanishSeaman":
			echo '<link href="./css/colors-spanishseaman.css" rel="stylesheet">';	
		break;
		case "vampire":
			echo '<link href="./css/colors-vampire.css" rel="stylesheet">';	
		break;
		default:
			echo '<link href="./css/colors-bootstrap.css" rel="stylesheet">';	
		break;
	}
	?>
	<link href="./css/bbootstrap.css" rel="stylesheet">	
	<script id="cookieWarn" src="./js/cookie-warn.js" data-debug="true"></script>	
	
</head>	
	<?php }	
	
	function meta_builder_($myMeta) {
		$html = '';	
			foreach ($myMeta as $meta => $item) {
				//Echo '-parapa->'.$items['name'].'<br>';
				$html .= '
	<meta ';					
				$html .= $item['property'].'="'.$item['name'].'" content="'.$item['content'].'"';
				
				foreach ($item as $key => $value) {
					//Echo $key.'--->'.$value.'<br>';
				}	
			$html .= '>';				
				}
			echo $html;	
	}
		
	function meta_builder() {
		$html = '';	
			foreach ($this->meta as $meta => $item) {
				//Echo '-parapa->'.$items['name'].'<br>';
				$html .= '
	<meta ';					
				$html .= $item['property'].'="'.$item['name'].'" content="'.$item['content'].'"';
				
				foreach ($item as $key => $value) {
					//Echo $key.'--->'.$value.'<br>';
				}	
			$html .= '>';				
				}
			echo $html;	
	}

	function meta_adder($add) {		 
		foreach ($add as $meta => $item) {
			$this->meta[$item['name']]['content'] .= '· '.$item['content'];
		}				
	}
	
	public function internationalGeo($var='') {
		//XML RETURNS LIST
		//geoplugin_request= 46.222.191.66 
		//geoplugin_status= 206 
		//geoplugin_delay= 2ms 
		//geoplugin_credit= Some of the returned data includes GeoLite data created by MaxMind, available from http://www.maxmind.com. 
		//geoplugin_city=  
		//geoplugin_region=  
		//geoplugin_regionCode=  
		//geoplugin_regionName=  
		//geoplugin_areaCode=  
		//geoplugin_dmaCode=  
		//geoplugin_countryCode= ES 
		//geoplugin_countryName= Spain 
		//geoplugin_inEU= 1 
		//geoplugin_euVATrate= 21 
		//geoplugin_continentCode= EU 
		//geoplugin_continentName= Europe 
		//geoplugin_latitude= 40.4172 
		//geoplugin_longitude= -3.684 
		//geoplugin_locationAccuracyRadius= 500 
		//geoplugin_timezone=  
		//geoplugin_currencyCode= EUR 
		//geoplugin_currencySymbol= € 
		//geoplugin_currencySymbol_UTF8= € 
		//geoplugin_currencyConverter= 0.8898 

	//$ip = $this->getRealIpAddr();
	$ip = getRealIpAddress();
	// Test IP's //ITALY$ip = '94.80.188.102'; //GERMANY$ip = '47.73.0.129';	//BRAZIL$ip = '189.11.132.117'; //FRANCE$ip ='176.31.84.249'; //USA$ip = '72.229.28.185'; //GB$ip = '185.86.151.11'; //IN$ip = '103.58.115.141'; 
	
	if (simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip)) {
		$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);
		// $xml->geoplugin_countryName;
		foreach ($xml as $key => $value) {
			$index =  substr ( $key , 10);					
			$this->geo[$index] = $value;
		}
		return true;
	}
}

	public function international_vars($var='') {
		$ip = getRealIpAddress();
		if (simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip)) {
			$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);
			if ($var=='') {
				echo "<pre>";
				foreach ($xml as $key => $value)
				{	echo $key , "= " , $value , $xml[$key], " \n" ;	}		
				echo "</pre>";	
			}
			else { return $xml->{$var}; }
		}	
	}
	
	public function international_local() {
		// test function to display geo local data
		function myURL(){
			$myurl =  $_SERVER["HTTP_HOST"];
			return $myurl;
		}
		echo myURL().'<br>';
		echo '$this->url = '.$this->url.'<br>'; 
		echo '$this->root = '.$this->root.'<br>'; 
		echo '__dir__ ='.__dir__ .'<br>';
		echo ' $_SERVER["HTTP_HOST"] ='. $_SERVER["HTTP_HOST"] .'<br>';
		echo ' $_SERVER["SCRIPT_URI"] ='. $_SERVER["SCRIPT_URI"] .'<br>';
			
	}	
	
	function bootstrap_carousel($id, $slides, $container = 'container', $controls = true, $indicators = true) { 
	// $id, $slides, true/class="$container", true/class="$controls", true/class="$indicators"	 )
	//$block->bootstrap_carousel('carouselHome', $slides, 'container', false, false);
		$html = $this->html_divOpen('id="'.$id.'"', $container, false);
		$html .= '
		<div  class="carousel slide" data-ride="carousel">		
		';
		// Carousel Indicators	
		if ($indicators != false) {
			$html .= '
		<!-- carousel-indicators -->
		<ol class="carousel-indicators">
		';
			for ($i=0;$i<count($slides); $i++) {
				if ($i==0) {$active = 'active';} else {$active = '';}
				$html .= '
				<li data-target="#'.$id.'" data-slide-to="'.$i.'" class="'.$active.'"></li>
					';
			}
			$html .= '
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
		// Carousel Controls
		if ($controls != false) {
			$html .= '
		<!-- Left and Right controls -->
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
		$html .= $this->html_divClose('id="'.$id.'"', 'container-fluid', 'row');
		echo $html;
	}
	
	function navbar_default(array $item, $brand, $brandCode='') {
		?>
<!-- Navigation navbar-default -->
    <nav id="mainNav" class="navbar navbar-custom" data-spy="affix">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll col-lg-4">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">					
					<img src="http://www.bbootstrap.com/img/logos/navbar-brand-bbootstrap.png" alt="-">
					<?php echo $brand; ?>
				</a>
				
				<div class="navbar-slogan"><?php echo $brandCode; ?></div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse col-lg-8" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>                                       
					<?php
					for ($n=0; $n < count($item); $n++){ 
						//$title = substr($item[$n]["title"],0);
						//$link =;
						if ( substr($item[$n]["label"],0,5) == "link:") {
							$label = substr($item[$n]["label"],5);
							$target = ' target="_blank"'; 
						}
						else {							
							$label = "#".substr($item[$n]["label"],0);
							$target = '';
						}					
						?>
						<li class="page-scroll">
							<a href="<?php echo $label; ?>"<?php echo $target; ?>><?php echo (substr($item[$n]["title"],0)); ?></a>
						</li>							
					<?php }		
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<!--// Navigation -->				
	<?php }
	
 
	// engined LAYOUT TOOLS	
	function html_social_list($classList, $size, $social) { // Ex. 'list-inline', 'fa-3x', $social(array)
		$awesomeIcon = awesomeicon_social();
		$html = '
                        <ul class="'.$classList.'">		
		';
		foreach ($social as $key => $value) {
			$html .= '
                            <li>
                                <a href="'.$value.'" target="blank" class="btn-social btn-outline"><i class="'.$awesomeIcon[$key].' '.$size.'"></i></a>
                            </li>			
			';			
		}
				$html .= '
                        </ul>		
		';
		return $html;		
	}
	
	function html_goTop($class='') { // Possible classes: hidden-xs hidden-sm hidden-md hidden-lg
		$html = '
	<!-- Go Top Button -xs- Only -->
    <div class="scroll-top page-scroll '.$class.'">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
		';
		return $html;
	}
	
	function goBack() {
		$html ='<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>Volver</button>';
		return $html;		
	}
		
	function html_tagOpen($tag, $container, $row) { // ex. $tag, 'container-fluid', 'row'
		$html = '
<!-- '.$tag.' Section -->
    <'.$tag.'>';	
		if ($container != false) {
			if ($container !='') {$container = ' class="'.$container.'"';} else {$container='';}
			$html .= '
        <div'.$container.'>';			
		}
		if ($row != false) {
			if ($row != '') {$row = ' class="'.$row.'"';} else {$row='';}
			$html .= '
			<div'.$row.'>';			
		}		
		return $html;
	}
	function html_tagClose($id, $container, $row) { // ex. $id, true, true
		$html = '';
		if ($row != false) {
			$html .= '
			</div>';			
		}		
		if ($container != false) {
			$html .= '
        </div>';			
		}
		$html .= '
    </'.$id.'>
<!--// '.$id.' Section -->	
		';		
		return $html;
	}	
	
	function html_sectionOpen($id, $container, $row) { // ex. $id, 'container-fluid', 'row'
		$html = '
<!-- '.$id.' Section -->
    <section id="'.$id.'">';	
		if ($container != false) {
			if ($container !='') {$container = ' class="'.$container.'"';} else {$container='';}
			$html .= '
        <div'.$container.'>';			
		}
		if ($row != false) {			
			if ($row != '') {$row = ' class="'.$row.'"';} else {$row='';}
			$html .= '
			<div'.$row.'>';			
		}		
		return $html;
	}
		
	function html_sectionClose($id, $container, $row) { // ex. $id, true, true
		$html = '';
		if ($row != false) {
			$html .= '
			</div>';			
		}		
		if ($container != false) {
			$html .= '
        </div>';			
		}
		$html .= '
    </section>
<!--// '.$id.' Section -->	
		';		
		return $html;
	}
		
	function html_divOpen($classId, $container, $row) { 
	// ex. variable format ('class/id="footer01"', 'container-fluid', 'row')
	// Declare levels/variables as shown above
	// 3 Levels div/div/div use 'false' to dismiss level 
		$html ='';
		if ($classId != false) {
			preg_match('/"([^"]+)"/', $classId, $label); // filter between double quotes
			$html .= '
	<!-- '.$label[1].' block -->
		<div '.$classId.'>';	
		}
		if ($container != false) {
			preg_match('/"([^"]+)"/', $container, $label); // filter between double quotes
			if ($label[1] == '') {
				$container = ' class="'.$container.'"';
			} 
			$html .= '
			<div '.$container.'>';			
		}
		if ($row != false) {
			preg_match('/"([^"]+)"/', $row, $label); // filter between double quotes
			if ($label[1] == '') {
				$row = ' class="'.$row.'"';	
			}
			$html .= '
				<div '.$row.'>';			
		}		
		return $html;
	}
		
	function html_divClose($classId, $container, $row) { // ex. $id, true, true		
		$html = '';
		if ($row != false) {
			$html .= '
				</div>';			
		}		
		if ($container != false) {
			$html .= '
			</div>';			
		}
		if ($classId != false) {
		preg_match('/"([^"]+)"/', $classId, $label); // return text between double quotes
		$html .= '
		</div>
	<!--// '.$label[1].' block -->	
		';	
		}		
		return $html;
	}
	
	function html_main($id, $content, $col='12') {
		
		$html = '
<!--************-->
<!--*** MAIN ***-->		
	<main id="'.$id.'" class="col-lg-'.$col.' fluid">
		';		
	$html .= $content;	
				$html .= '
	</main>
<!--/// MAIN ***-->
<!--************-->		
		';
		return $html;		
	}
	function html_aside($left_right, $content, $col=0) {
		if ($col > 0) {
		$html = '
<!--******************-->		
<!--*** ASIDE '.$left_right.' ***-->
		<aside class="col-lg-'.$col.' asise-'.$left_right.'">
		';		
		$html .= $content;	
				$html .= '
		</aside>				
<!--/// ASIDE '.$left_right.' -->
<!--******************-->	
		';
		return $html;				
		}	
	}
	
	// html LAYOUTS
	function icon($name, $size) {
		$html = '<i class="'.$this->icon[$name].' '.$size.'"></i>';
	}
	function title() {
		$html= '<h2>'.$this->ref['productTitle'].'</h2>';
		return $html;
	}
	function intro() {
		if ($this->ref['productIntro'] != "") {
			$html = '<p><strong>'.$this->ref['productIntro'].'</strong></p>';			
		}
		else { $html='';}
		return $html;
	}
	function image() {
		$html='
                            <img src="'.$this->ref['productImage'].'" class="img-responsive img-center" alt="'.$this->ref['productTitle'].'">';
		return $html;
	}
	function content() {
		$html= $this->ref['productMain'];
		return $html;
	}
	function spec() {
		//$cat = $this->ref['productSpecCat'];
		//$row = $this->ref['productSpecRow'];
		$html = '<div class="panel panel-primary">';
			for ($i=0;$i < count($this->ref['productSpecCat']); $i++) {
				$html .= '<div class="panel-heading" style="font-variant: small-caps; font-weight: bold;">'.$this->ref['productSpecCat'][$i].'</div>';	
				$html .= '<table class="table">';
				for ($j=0; $j < count($this->ref['productSpecRow'][$i]); $j++) {
						$html .= '<tr><td width="50%" style="text-align: right; font-variant: small-caps">'.$this->ref['productSpecRow'][$i][$j]["label"].'</td><td width="50%" style="text-align: left; font-weight: bold;">'.$this->ref['productSpecRow'][$i][$j]["desc"].'</td></tr>';					
				}
				$html .= '</table>';				
			}
		$html .= '</div>';
		return $html;
	}
	
	function buyProduct1() {
		$html ='<ul class="list-inline item-details">
                                <li>Web:
                                    <strong><a href=""> Comprar Este Artículo</a>
                                    </strong>
                                </li>
                               
                            </ul>';
		return $html;		
	}
	function buyProduct() {
		$html = $this->ref['productPaypal01'];
		return $html;		
	}

	// Product LAYOUTS
	function productFull() {
		$html = $this->title();
		$html .= $this->image();
		$html .= $this->intro();
		$html .= $this->content();
		$html .= $this->spec();
		$html .= $this->buyProduct();
		$html .= $this->goBack();
		return $html;
	}	
		
	// bootstrap HTML 	
	function panel_group_accordion ($name) { // XXX. NEEDS DELETING
		
		// 	$item[0]['title'] = $title; 
		//	$item[0]['intro'] = $intro;
		//	$item[0]['main'] = $main;
		
		$html = 'funciona de perilla: '.$this->ref[0]["title"];
	
		$html = '
<!-- panel-group '.$name.' -->	 			
                    <div class="panel-group" id="'.$name.'">
					';
		for ($i=0; $i < count($this->ref); $i++) {
		//$i = 1;
			$html .='		
						<!-- Collapse'.$i.' - '.$this->ref[$i]["title"].' -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#'.$name.'" href="#collapse'.$i.'">'.$this->ref[$i]["title"].'</a>									
									</h4>
									'.$this->ref[$i]['intro'].'								
								</div>
								<div id="collapse'.$i.'" class="panel-collapse collapse">
									<div class="panel-body">
										'.$this->ref[$i]['main'].'			
									</div>
								</div>
							</div>
						
						<!--// Collapse'.$i.' - '.$this->ref[$i]["title"].' -->
						';		
		}	
		$html .= '	
					</div> 
<!--// panel-group '.$name.' -->			
		';	
	echo $html;
	}	

	function facebookLang($returner='cc') {
		$cc['ZA']='af_ZA';$cl['XX']='Afrikaans(South Africa)';
		$cc['AF']='af_AF';$cl['XX']='Afrikaans';
		$cc['AR']='ar_AR';$cl['XX']='Arabic';
		$cc['IN']='bn_IN';$cl['XX']='Bengali';
		$cc['MM']='my_MM';$cl['XX']='Burmese';
		$cc['CN']='zh_CN';$cl['XX']='Chinese(China)';
		$cc['HK']='zh_HK';$cl['XX']='Chinese(Hong Kong)';
		$cc['TW']='zh_TW';$cl['XX']='Chinese(Taiwan)';
		$cc['HR']='hr_HR';$cl['XX']='Croatian';
		$cc['CZ']='cs_CZ';$cl['XX']='Czech';
		$cc['DK']='da_DK';$cl['XX']='Danish';
		$cc['NL']='nl_NL';$cl['XX']='Dutch';
		$cc['GB']='en_GB';$cl['XX']='English(United Kingdom)';
		$cc['US']='en_US';$cl['XX']='English';
		$cc['FI']='fi_FI';$cl['XX']='Finnish';
		$cc['FR']='fr_FR';$cl['XX']='French';
		$cc['DE']='de_DE';$cl['XX']='German';
		$cc['GR']='el_GR';$cl['XX']='Greek';
		$cc['IN']='gu_IN';$cl['XX']='Gujarati';
		$cc['IL']='he_IL';$cl['XX']='Hebrew';
		$cc['IN']='hi_IN';$cl['XX']='Hindi';
		$cc['HU']='hu_HU';$cl['XX']='Hungarian';
		$cc['ID']='id_ID';$cl['XX']='Indonesian';
		$cc['IT']='it_IT';$cl['XX']='Italian';
		$cc['JP']='ja_JP';$cl['XX']='Japanese';
		$cc['KR']='ko_KR';$cl['XX']='Korean';
		$cc['IQ']='cb_IQ';$cl['XX']='Kurdish(not available on iOS)';
		$cc['MY']='ms_MY';$cl['XX']='Malay';
		$cc['IN']='ml_IN';$cl['XX']='Malayalam';
		$cc['IN']='mr_IN';$cl['XX']='Marathi';
		$cc['NO']='nb_NO';$cl['XX']='Norwegian';
		$cc['PL']='pl_PL';$cl['XX']='Polish';
		$cc['BR']='pt_BR';$cl['XX']='Portuguese(Brazil)';
		$cc['PT']='pt_PT';$cl['XX']='Portuguese';
		$cc['IN']='pa_IN';$cl['XX']='Punjabi';
		$cc['RO']='ro_RO';$cl['XX']='Romanian';
		$cc['RU']='ru_RU';$cl['XX']='Russian';
		$cc['SK']='sk_SK';$cl['XX']='Slovak';
		$cc['LA']='es_LA';$cl['XX']='Spanish(Latin America)';
		$cc['ES']='es_ES';$cl['XX']='Spanish';
		$cc['KE']='sw_KE';$cl['XX']='Swahili';
		$cc['SE']='sv_SE';$cl['XX']='Swedish';
		$cc['PH']='tl_PH';$cl['XX']='Tagalog';
		$cc['IN']='ta_IN';$cl['XX']='Tamil';
		$cc['IN']='te_IN';$cl['XX']='Telugu';
		$cc['TH']='th_TH';$cl['XX']='Thai';
		$cc['TR']='tr_TR';$cl['XX']='Turkish';
		$cc['PK']='ur_PK';$cl['XX']='Urdu';
		$cc['VN']='vi_VN';$cl['XX']='Vietnamese';

		$id = $this->international_vars('geoplugin_countryCode');

		if (isset ($cc["$id"])) {
			return $cc["$id"];
		}
		else {
			return $this->language;
		}
	}
		
	function html_panel_group ($id, $items) {
		$panel = $items;
		$html = '
	<!-- panel-group '.$id.' -->				
                    <div class="panel-group" id="'.$id.'">		
		';
		for ($i=1;$i<=count($items);$i++) {
			$html .='
						<!-- Collapse #'.$i.' -->
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#'.$id.'" href="#collapse'.$i.'">
								'.$panel[$i]['title'].'</a>
							</h4>
								'.$panel[$i]['intro'].'
						  </div>
						  <div id="collapse'.$i.'" class="panel-collapse collapse">
							<div class="panel-body">
								'.$panel[$i]['body'].'					
							</div>
						  </div>
						</div>
						<!--// Collapse #'.$i.' -->
			';
		}		
		$html .= '
				  </div> 
	<!--// panel group accordion -->
		';
	return $html;
	}	
}
?>