<?php
/**             
* @package BBootstrap - Distributors Collection - CDN´s
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2019.07.29
* @developers F.Cherry, .. 
* @lastRevision 2019.09.30
* @version BBootstrap v.0.0.1
* @license MIT License
**/

//**************************************//
//*** Bootstrap CDN setting & jQuery ***//
//**************************************//
function BootstrapCDN() {
	// Bootstrap CDN - Versión 3.4.1
	$html = '
	 <!-- Bootstrap core CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	';
	return $html;	
}

function BootstrapCDN_jQuery() {
	// jQuery (necessary for Bootstrap´s JavaScript plugins)
	$html = '
	<!-- jQuery (necessary for Bootstrap´s JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	';
	return $html;
}

//********************************//
//*** Google Analytics & Tools ***//
//********************************//
function google_analytics_TR($trackingID) { 
	// Google Analytics - Tradicional
	$html = '
	<!-- GOOGLE ANILYTICS -->
	<script>
		(function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

		ga(\'create\', \''.$trackingID.'\', \'auto\');
		ga(\'send\', \'pageview\');
	</script>		
	';
	return $html;
} 
function google_analytics($trackingID='UA-67108612-2') { 
	// gTag - Latest Google Standard . Example tracking for Installation control
	$html = '	
	<!-- Google Analytics - Global site tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id='.$trackingID.'"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag("js", new Date());

	  gtag("config", "'.$trackingID.'")
	</script>
	';
	echo $html;
}

//************************//
//*** FACEBOOK Plugins ***//
//************************// 
function facebook_plugin($language) {
	$html = '
<!-- FACEBOOK Social Plugin ... after <BODY> tag -->
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/'.$language.'/sdk.js#xfbml=1&version=v2.5";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, \'script\', \'facebook-jssdk\'));</script>	
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

//***********************************//
//*** IP Geolocation by geoPlugin ***//
//***********************************//
function geoplugin_credits() {
	$html = '<a href="http://www.geoplugin.com/geolocation/" target="new">IP Geolocation</a> by <a href="http://www.geoplugin.com/" target="new">geoPlugin</a>';
	return $html;
}
	
function international_vars($var='') {
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
//*******************************//
//*** Ip Geo Tools - frank cherry ***//
//*******************************//	
function getRealIpAddress(){
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   $ip=$_SERVER['HTTP_CLIENT_IP'];   }   //check ip from share internet
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];    }  //to check ip is pass from proxy
	else {  $ip=$_SERVER['REMOTE_ADDR'];    }
	return $ip;
	}	

//**********************************************//
//*** Text and/or Image Crawler Script v1.53 ***//
//**********************************************//
function crawler_activation() {
	$html = '
	<!-- Crawler Activation -->
	<script src="./js/crawler.js">
		/* Text and/or Image Crawler Script v1.53 (c)2009-2011 John Davenport Scheuer
		   as first seen in http://www.dynamicdrive.com/dynamicindex2/crawler/index.htm
		   username: jscheuer1 - This Notice Must Remain for Legal Use
		*/
	</script>
	';
	return $html;
}

function crawler_img($id, $item, $img_style='width: 320px; height: 175px; border-radius: 12px; margin: 3px; border: 1px solid blue;') { 
	// xxx. short out alt
	// xxx. style must be declare on the very tag else it seems not working
	$html = '
		<div class="marquee" id="'.$id.'">		
	';
			for ($i=1;$i<=count($item);$i++) {
				$title = $linkOpen = $linkClose = $image = ''; 
				if ($item[$i]['link'] !='') {
					if ($item[$i]['title']!='') {$title = 'title="'.$item[$i]['title'].'"';}
					//if ($item[$i]['target'!='']) {$target = '';} else {$target = 'target="blank"';} 
					$target = '';
					
					$linkOpen = '<a '.$title.'  '.$target.' href="'.$item[$i]['link'].'"  >';
					$linkClose = '</a>';
				}
				if ($item[$i]['img'] !='') { 
					if ($img_style) {
						$style='style="'.$img_style.'"';
					} 
					else {
						$style = '';
					}
					//if ($img_style) {$style='style="'.$img_style.'"';} else {$style = '';}
					$image ='<img '.$style.' alt="'.$item[$i]['title'].'" src="'.$item[$i]['img'].'">';
				} 
				$html .='
				<span>
					'
					.$linkOpen
					.$image
					.$item[$i]['html']
					.$linkClose
					.'
				</span>
				';					
			}		
	$html .= '
		</div>	
	';
	return $html;		
}

function crawler_awesomeIcons(){
	// MANUALLY Configured On Needs
	$html = '
			<script>
				marqueeInit({
					uniqueid: \'crawler_awesomeIcons\',
					style: {
						\'padding\': \'2px\',
						\'margin\': \'0px 0px\',
						\'width\': \'100%\',
						\'height\': \'369px\'
					},
					inc: 4, //speed - pixel increment for each iteration of this marquee´s movement
					mouse: \'cursor driven\', //mouseover behavior (\'pause\' \'cursor driven\' or false)
					moveatleast: 1,
					neutral: 150,
					savedirection: true,
					random: true
				});
			</script>
	';
	return $html;
}

function crawler_MyCrawler01(){
	// MANUALLY Configured On Needs
	$html = '
			<script>
				marqueeInit({
					uniqueid: \'mycrawler01\',
					style: {
						\'padding\': \'0px\',
						\'margin\': \'0px 0px\',
						\'width\': \'120px\',
						\'height\': \'120px\'
					},
					inc: 4, //speed - pixel increment for each iteration of this marquee´s movement
					mouse: \'cursor driven\', //mouseover behavior (\'pause\' \'cursor driven\' or false)
					moveatleast: 1,
					neutral: 150,
					savedirection: true,
					random: true
				});
			</script>
	';
	return $html;
}

function crawler_MyCrawler02(){
	// MANUALLY Configured On Needs
	$html = '
			<script>
				marqueeInit({
					uniqueid: \'mycrawler02\',
					style: {
						\'padding\': \'2px\',
						\'margin\': \'0px 0px\',
						\'width\': \'100%\',
						\'height\': \'376px\'
					},
					inc: 4, //speed - pixel increment for each iteration of this marquee´s movement
					mouse: \'cursor driven\', //mouseover behavior (\'pause\' \'cursor driven\' or false)
					moveatleast: 1,
					neutral: 150,
					savedirection: true,
					random: true
				});
			</script>
	';
	return $html;
}

//********************//
//*** Font Awesome ***//
//********************//
function awesome_icon() { 
	// '7ce3cfb730' You should get your own key: https://fontawesome.com/start
	$html = '
	<!-- Fontawesom KIT coder -->
	<script src="https://kit.fontawesome.com/7ce3cfb730.js"></script>
	';
	return $html;
}
function awesomeicon_social() { 
			//*** Awesome Icons - Load Most Common and Free ***//
		$icon['github'] = 'fab fa-github-square';
		$icon['flickr'] = 'fab fa-flickr';
		$icon['twitter'] = 'fab fa-twitter-square';
		$icon['instagram'] = 'fab fa-instagram';
		$icon['facebook'] = 'fab fa-facebook-square';
		$icon['skype'] = 'fab fa-skype';
		$icon['google-plus'] = 'fab fa-google-plus-square';
		$icon['whatsapp'] = 'fab fa-whatsapp-square';
	return $icon;
}
?>