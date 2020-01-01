<?php
/**             
* @package BBootstrap - bbootstrap.myregion
* @author Frank Cherry
* @copyright (c) 2019 Frank Cherry
* @creationDate 2016.08.30
* @developers 
* @lastRevision 2019.09.02
* @version BBootstrap v.0.0.1
* @license MIT License
**/

class MyRegion extends BBootstrap {  
	
	function languagesList() {
		$path = './img/flags/';
		//echo $path;
		$i=1; $j=1;
		$this->lang[$i][$j]['flag']= 'USA (US)';
		$this->lang[$i][$j]['flagImg']= $path.'US.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=en_US&countryCode=US';
		$j++;
		$this->lang[$i][$j]['flag']= 'English (US)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=en_US&countryCode=US';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'United Kingdom (UK)';
		$this->lang[$i][$j]['flagImg']= $path.'GB.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=en_GB&countryCode=GB';
		$j++;
		$this->lang[$i][$j]['flag']= 'English (UK)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=en_GB&countryCode=GB';
				
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Canada';
		$this->lang[$i][$j]['flagImg']= $path.'CA.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=en_CA&countryCode=CA';
		$j++;
		$this->lang[$i][$j]['flag']= 'English (CA)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=en_CA&countryCode=CA';
		$j++;
		$this->lang[$i][$j]['flag']= 'French (CA)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=fr_CA&countryCode=CA';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Australia (AU)';
		$this->lang[$i][$j]['flagImg']= $path.'AU.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=en_CA&countryCode=AU';
		$j++;
		$this->lang[$i][$j]['flag']= 'English (AU)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=en_AU&countryCode=AU';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Germany';
		$this->lang[$i][$j]['flagImg']= $path.'DE.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=de_DE&countryCode=DE';;		
		$j++;
		$this->lang[$i][$j]['flag']= 'German';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=de_DE&countryCode=DE';
				
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'France';
		$this->lang[$i][$j]['flagImg']= $path.'FR.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=fr_FR&countryCode=FR';		
		$j++;
		$this->lang[$i][$j]['flag']= 'French';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=fr_FR&countryCode=FR';
				
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Spain';
		$this->lang[$i][$j]['flagImg']= $path.'ES.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=es_ES&countryCode=ES';
		$j++;
		$this->lang[$i][$j]['flag']= 'Spanish (ES)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=es_ES&countryCode=ES';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'México';
		$this->lang[$i][$j]['flagImg']= $path.'MX.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=es_MX&countryCode=MX';
		$j++;
		$this->lang[$i][$j]['flag']= 'Spanish (MX)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=es_MX&countryCode=MX';		
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Brazil (BR)';
		$this->lang[$i][$j]['flagImg']= $path.'BR.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=pt_BR&countryCode=BR';
		$j++;
		$this->lang[$i][$j]['flag']= 'Potuguese (BR)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=pt_BR&countryCode=BR';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Portugal (PT)';
		$this->lang[$i][$j]['flagImg']= $path.'PT.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=pt_PT&countryCode=ES';
		$j++;
		$this->lang[$i][$j]['flag']= 'Potuguese (PT)';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=pt_PT&countryCode=ES';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'China';
		$this->lang[$i][$j]['flagImg']= $path.'CN.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=zh_CN&countryCode=CN';
		$j++;
		$this->lang[$i][$j]['flag']= 'Chinese';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=zh_CN&countryCode=CN';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Hong Kong';
		$this->lang[$i][$j]['flagImg']= $path.'HK.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=zh_HK&countryCode=CN';
		$j++;
		$this->lang[$i][$j]['flag']= 'Hong Kong';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=zh_HK&countryCode=CN';
				
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'Japan';
		$this->lang[$i][$j]['flagImg']= $path.'JP.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=ja_JP&countryCode=JP';
		$j++;
		$this->lang[$i][$j]['flag']= 'Japanese';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=ja_JP&countryCode=JP';
		
		$i++; $j=1;
		$this->lang[$i][$j]['flag']= 'India';
		$this->lang[$i][$j]['flagImg']= $path.'IN.jpg';
		$this->lang[$i][$j]['flagLink']= '?language=hi_IN&countryCode=IN';
		$j++;
		$this->lang[$i][$j]['flag']= 'Hindi';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=hi_IN&countryCode=IN';
		$j++;
		$this->lang[$i][$j]['flag']= 'Tamil';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=ta_IN&countryCode=IN';
		$j++;
		$this->lang[$i][$j]['flag']= 'Telugu';
		$this->lang[$i][$j]['flagImg']= false;
		$this->lang[$i][$j]['flagLink']= '?language=te_IN&countryCode=IN';
	}

	function countryHtml() {
		
	//$lista = $this->languagesList();
	$this->languagesList();
	//$this->url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	?>
<!-- MyRegion Section -->
    <section id="amazonArea">
        <div class="container">			
            <div class="row">
				<div class="col-lg-12">
				<h1 class="shadowWhite">My Region</h1>
				</div>
<?	
	for ($i=1; $i<= count($this->lang); $i++) {
		?>
					<div class="col-xs-6 col-md-4 col-lg-3 text-center">
					<?php
					for ($j=1; $j<= count($this->lang[$i]); $j++) {
						//if ($j == count($this->lang[$i])) { echo "<br>";}
						?>
						<a class="shadowWhite"  href="<?php echo $this->lang[$i][$j]['flagLink']; ?>" title="<?php echo $this->lang[$i][$j]['flag']; ?>">
							<?php if ($this->lang[$i][$j]['flagImg'] != false) { ?>
							<img class="img-responsive img-center" title="<?php echo $this->lang[$i][$j]['flag']; ?>" src="<?php echo $this->lang[$i][$j]['flagImg']; ?>" alt="<?php echo $this->lang[$i][$j]['flag']; ?>" ><br>
							<?php 
							} 
							else {
								echo '<span>'.$this->lang[$i][$j]['flag'].'</span>';
							}
							?>
						</a>
					<?php 
						if ($j > 1 and $j < count($this->lang[$i]))	{ echo '<span class="shadowWhite"> &middot; </span>'; }
					} 
					?>
				</div>	
				<?php
	}						
	?>
            </div>
        </div>			
    </section>
<!--// MyRegion Section -->
	<?php

	}	
	
	function internantional() {
		
$reg['DE']['amazon']='DE'; $reg['DE']['fb']='de_DE'; $reg['DE']['countryName']='Germany';
$reg['DJ']['amazon']='US'; $reg['DJ']['fb']='     '; $reg['DJ']['countryName']='Djibouti';
$reg['DK']['amazon']='DE'; $reg['DK']['fb']='da_DK'; $reg['DK']['countryName']='Denmark';
$reg['DM']['amazon']='US'; $reg['DM']['fb']='     '; $reg['DM']['countryName']='Dominica';
$reg['DO']['amazon']='US'; $reg['DO']['fb']='     '; $reg['DO']['countryName']='Dominican Republic';
$reg['DZ']['amazon']='US'; $reg['DZ']['fb']='     '; $reg['DZ']['countryName']='Algeria';
$reg['EC']['amazon']='US'; $reg['EC']['fb']='     '; $reg['EC']['countryName']='Ecuador';
$reg['EE']['amazon']='US'; $reg['EE']['fb']='     '; $reg['EE']['countryName']='Estonia';
$reg['EG']['amazon']='US'; $reg['EG']['fb']='     '; $reg['EG']['countryName']='Egypt';
$reg['EH']['amazon']='US'; $reg['EH']['fb']='     '; $reg['EH']['countryName']='Western Sahara';
$reg['ER']['amazon']='US'; $reg['ER']['fb']='     '; $reg['ER']['countryName']='Eritrea';
$reg['ES']['amazon']='ES'; $reg['ES']['fb']='es_ES'; $reg['ES']['countryName']='Spain';
$reg['ET']['amazon']='US'; $reg['ET']['fb']='     '; $reg['ET']['countryName']='Ethiopia';
$reg['EU']['amazon']='US'; $reg['EU']['fb']='     '; $reg['EU']['countryName']='Europe';
$reg['FI']['amazon']='US'; $reg['FI']['fb']='fi_FI'; $reg['FI']['countryName']='Finland';
$reg['FJ']['amazon']='US'; $reg['FJ']['fb']='     '; $reg['FJ']['countryName']='Fiji';
$reg['FK']['amazon']='US'; $reg['FK']['fb']='     '; $reg['FK']['countryName']='Falkland Islands (Malvinas)';
$reg['FM']['amazon']='US'; $reg['FM']['fb']='     '; $reg['FM']['countryName']='Micronesia, Federated States of';
$reg['FO']['amazon']='US'; $reg['FO']['fb']='     '; $reg['FO']['countryName']='Faroe Islands';
$reg['FR']['amazon']='FR'; $reg['FR']['fb']='fr_FR'; $reg['FR']['countryName']='France';
$reg['GA']['amazon']='US'; $reg['GA']['fb']='     '; $reg['GA']['countryName']='Gabon';
$reg['GB']['amazon']='GB'; $reg['GB']['fb']='en_GB'; $reg['GB']['countryName']='United Kingdom';
$reg['GD']['amazon']='US'; $reg['GD']['fb']='     '; $reg['GD']['countryName']='Grenada';
$reg['GE']['amazon']='US'; $reg['GE']['fb']='     '; $reg['GE']['countryName']='Georgia';
$reg['GF']['amazon']='US'; $reg['GF']['fb']='fr_FR'; $reg['GF']['countryName']='French Guiana';
$reg['GG']['amazon']='US'; $reg['GG']['fb']='     '; $reg['GG']['countryName']='Guernsey';
$reg['GH']['amazon']='US'; $reg['GH']['fb']='     '; $reg['GH']['countryName']='Ghana';
$reg['GI']['amazon']='GB'; $reg['GI']['fb']='en_GB'; $reg['GI']['countryName']='Gibraltar';
$reg['GL']['amazon']='US'; $reg['GL']['fb']='     '; $reg['GL']['countryName']='Greenland';
$reg['GM']['amazon']='US'; $reg['GM']['fb']='     '; $reg['GM']['countryName']='Gambia';
$reg['GN']['amazon']='US'; $reg['GN']['fb']='     '; $reg['GN']['countryName']='Guinea';
$reg['GP']['amazon']='US'; $reg['GP']['fb']='     '; $reg['GP']['countryName']='Guadeloupe';
$reg['GQ']['amazon']='US'; $reg['GQ']['fb']='     '; $reg['GQ']['countryName']='Equatorial Guinea';
$reg['GR']['amazon']='US'; $reg['GR']['fb']='el_GR'; $reg['GR']['countryName']='Greece';
$reg['GS']['amazon']='US'; $reg['GS']['fb']='     '; $reg['GS']['countryName']='South Georgia and the South Sandwich Islands';
$reg['GT']['amazon']='US'; $reg['GT']['fb']='es_ES'; $reg['GT']['countryName']='Guatemala';
$reg['GU']['amazon']='US'; $reg['GU']['fb']='     '; $reg['GU']['countryName']='Guam';
$reg['GW']['amazon']='US'; $reg['GW']['fb']='     '; $reg['GW']['countryName']='Guinea-Bissau';
$reg['GY']['amazon']='US'; $reg['GY']['fb']='fr_FR'; $reg['GY']['countryName']='Guyana';
$reg['HK']['amazon']='CN'; $reg['HK']['fb']='zh_HK'; $reg['HK']['countryName']='Hong Kong';
$reg['HM']['amazon']='US'; $reg['HM']['fb']='     '; $reg['HM']['countryName']='Heard Island and McDonald Islands';
$reg['HN']['amazon']='US'; $reg['HN']['fb']='es_ES'; $reg['HN']['countryName']='Honduras';
$reg['HR']['amazon']='US'; $reg['HR']['fb']='hr_HR'; $reg['HR']['countryName']='Croatia';
$reg['HT']['amazon']='US'; $reg['HT']['fb']='     '; $reg['HT']['countryName']='Haiti';
$reg['HU']['amazon']='DE'; $reg['HU']['fb']='hu_HU'; $reg['HU']['countryName']='Hungary';
$reg['ID']['amazon']='IN'; $reg['ID']['fb']='id_ID'; $reg['ID']['countryName']='Indonesia';
$reg['IE']['amazon']='US'; $reg['IE']['fb']='en_GB'; $reg['IE']['countryName']='Ireland';
$reg['IL']['amazon']='US'; $reg['IL']['fb']='he_IL'; $reg['IL']['countryName']='Israel';
$reg['IM']['amazon']='GB'; $reg['IM']['fb']='     '; $reg['IM']['countryName']='Isle of Man';
$reg['IN']['amazon']='IN'; $reg['IN']['fb']='     '; $reg['IN']['countryName']='India';
$reg['IO']['amazon']='US'; $reg['IO']['fb']='     '; $reg['IO']['countryName']='British Indian Ocean Territory';
$reg['IQ']['amazon']='US'; $reg['IQ']['fb']='     '; $reg['IQ']['countryName']='Iraq';
$reg['IR']['amazon']='US'; $reg['IR']['fb']='     '; $reg['IR']['countryName']='Iran, Islamic Republic of';
$reg['IS']['amazon']='US'; $reg['IS']['fb']='     '; $reg['IS']['countryName']='Iceland';
$reg['IT']['amazon']='IT'; $reg['IT']['fb']='it_IT'; $reg['IT']['countryName']='Italy';
$reg['JE']['amazon']='US'; $reg['JE']['fb']='     '; $reg['JE']['countryName']='Jersey';
$reg['JM']['amazon']='US'; $reg['JM']['fb']='em_GB'; $reg['JM']['countryName']='Jamaica';
$reg['JO']['amazon']='US'; $reg['JO']['fb']='     '; $reg['JO']['countryName']='Jordan';
$reg['JP']['amazon']='US'; $reg['JP']['fb']='jp_JP'; $reg['JP']['countryName']='Japan';
$reg['KE']['amazon']='US'; $reg['KE']['fb']='     '; $reg['KE']['countryName']='Kenya';
$reg['KG']['amazon']='US'; $reg['KG']['fb']='     '; $reg['KG']['countryName']='Kyrgyzstan';
$reg['KH']['amazon']='US'; $reg['KH']['fb']='     '; $reg['KH']['countryName']='Cambodia';
$reg['KI']['amazon']='US'; $reg['KI']['fb']='     '; $reg['KI']['countryName']='Kiribati';
$reg['KM']['amazon']='US'; $reg['KM']['fb']='     '; $reg['KM']['countryName']='Comoros';
$reg['KN']['amazon']='US'; $reg['KN']['fb']='     '; $reg['KN']['countryName']='Saint Kitts and Nevis';
$reg['KP']['amazon']='US'; $reg['KP']['fb']='ko_KR'; $reg['KP']['countryName']='Korea, Democratic People´s Republic of';
$reg['KR']['amazon']='US'; $reg['KR']['fb']='ko_KR'; $reg['KR']['countryName']='Korea, Republic of';
$reg['KW']['amazon']='US'; $reg['KW']['fb']='ar_AR'; $reg['KW']['countryName']='Kuwait';
$reg['KY']['amazon']='US'; $reg['KY']['fb']='     '; $reg['KY']['countryName']='Cayman Islands';
$reg['KZ']['amazon']='US'; $reg['KZ']['fb']='     '; $reg['KZ']['countryName']='Kazakhstan';
$reg['LA']['amazon']='US'; $reg['LA']['fb']='     '; $reg['LA']['countryName']='Lao People´s Democratic Republic';
$reg['LB']['amazon']='US'; $reg['LB']['fb']='     '; $reg['LB']['countryName']='Lebanon';
$reg['LC']['amazon']='US'; $reg['LC']['fb']='     '; $reg['LC']['countryName']='Saint Lucia';
$reg['LI']['amazon']='US'; $reg['LI']['fb']='     '; $reg['LI']['countryName']='Liechtenstein';
$reg['LK']['amazon']='US'; $reg['LK']['fb']='     '; $reg['LK']['countryName']='Sri Lanka';
$reg['LR']['amazon']='US'; $reg['LR']['fb']='     '; $reg['LR']['countryName']='Liberia';
$reg['LS']['amazon']='US'; $reg['LS']['fb']='     '; $reg['LS']['countryName']='Lesotho';
$reg['LT']['amazon']='US'; $reg['LT']['fb']='     '; $reg['LT']['countryName']='Lithuania';
$reg['LU']['amazon']='DE'; $reg['LU']['fb']='     '; $reg['LU']['countryName']='Luxembourg';
$reg['LV']['amazon']='US'; $reg['LV']['fb']='     '; $reg['LV']['countryName']='Latvia';
$reg['LY']['amazon']='US'; $reg['LY']['fb']='ar_AR'; $reg['LY']['countryName']='Libyan Arab Jamahiriya';
$reg['MA']['amazon']='US'; $reg['MA']['fb']='ar_AR'; $reg['MA']['countryName']='Morocco';
$reg['MC']['amazon']='US'; $reg['MC']['fb']='     '; $reg['MC']['countryName']='Monaco';
$reg['MD']['amazon']='US'; $reg['MD']['fb']='     '; $reg['MD']['countryName']='Moldova, Republic of';
$reg['ME']['amazon']='US'; $reg['ME']['fb']='     '; $reg['ME']['countryName']='Montenegro';
$reg['MG']['amazon']='US'; $reg['MG']['fb']='     '; $reg['MG']['countryName']='Madagascar';
$reg['MH']['amazon']='US'; $reg['MH']['fb']='     '; $reg['MH']['countryName']='Marshall Islands';
$reg['MK']['amazon']='US'; $reg['MK']['fb']='     '; $reg['MK']['countryName']='Macedonia';
$reg['ML']['amazon']='US'; $reg['ML']['fb']='     '; $reg['ML']['countryName']='Mali';
$reg['MM']['amazon']='US'; $reg['MM']['fb']='     '; $reg['MM']['countryName']='Myanmar';
$reg['MN']['amazon']='US'; $reg['MN']['fb']='     '; $reg['MN']['countryName']='Mongolia';
$reg['MO']['amazon']='US'; $reg['MO']['fb']='     '; $reg['MO']['countryName']='Macao';
$reg['MP']['amazon']='US'; $reg['MP']['fb']='     '; $reg['MP']['countryName']='Northern Mariana Islands';
$reg['MQ']['amazon']='US'; $reg['MQ']['fb']='     '; $reg['MQ']['countryName']='Martinique';
$reg['MR']['amazon']='US'; $reg['MR']['fb']='     '; $reg['MR']['countryName']='Mauritania';
$reg['MS']['amazon']='US'; $reg['MS']['fb']='     '; $reg['MS']['countryName']='Montserrat';
$reg['MT']['amazon']='US'; $reg['MT']['fb']='     '; $reg['MT']['countryName']='Malta';
$reg['MU']['amazon']='US'; $reg['MU']['fb']='     '; $reg['MU']['countryName']='Mauritius';
$reg['MV']['amazon']='US'; $reg['MV']['fb']='     '; $reg['MV']['countryName']='Maldives';
$reg['MW']['amazon']='US'; $reg['MW']['fb']='     '; $reg['MW']['countryName']='Malawi';
$reg['MX']['amazon']='US'; $reg['MX']['fb']='     '; $reg['MX']['countryName']='Mexico';
$reg['MY']['amazon']='US'; $reg['MY']['fb']='ms_MY'; $reg['MY']['countryName']='Malaysia';
$reg['MZ']['amazon']='US'; $reg['MZ']['fb']='     '; $reg['MZ']['countryName']='Mozambique';
$reg['NA']['amazon']='US'; $reg['NA']['fb']='     '; $reg['NA']['countryName']='Namibia';
$reg['NC']['amazon']='US'; $reg['NC']['fb']='     '; $reg['NC']['countryName']='New Caledonia';
$reg['NE']['amazon']='US'; $reg['NE']['fb']='     '; $reg['NE']['countryName']='Niger';
$reg['NF']['amazon']='US'; $reg['NF']['fb']='     '; $reg['NF']['countryName']='Norfolk Island';
$reg['NG']['amazon']='US'; $reg['NG']['fb']='     '; $reg['NG']['countryName']='Nigeria';
$reg['NI']['amazon']='US'; $reg['NI']['fb']='     '; $reg['NI']['countryName']='Nicaragua';
$reg['NL']['amazon']='DE'; $reg['NL']['fb']='nl_NL'; $reg['NL']['countryName']='Netherlands';
$reg['NO']['amazon']='US'; $reg['NO']['fb']='nb_NO'; $reg['NO']['countryName']='Norway';
$reg['NP']['amazon']='US'; $reg['NP']['fb']='     '; $reg['NP']['countryName']='Nepal';
$reg['NR']['amazon']='US'; $reg['NR']['fb']='     '; $reg['NR']['countryName']='Nauru';
$reg['NU']['amazon']='US'; $reg['NU']['fb']='     '; $reg['NU']['countryName']='Niue';
$reg['NZ']['amazon']='US'; $reg['NZ']['fb']='     '; $reg['NZ']['countryName']='New Zealand';
$reg['OM']['amazon']='US'; $reg['OM']['fb']='     '; $reg['OM']['countryName']='Oman';
$reg['PA']['amazon']='US'; $reg['PA']['fb']='     '; $reg['PA']['countryName']='Panama';
$reg['PE']['amazon']='US'; $reg['PE']['fb']='es_ES'; $reg['PE']['countryName']='Peru';
$reg['PF']['amazon']='US'; $reg['PF']['fb']='     '; $reg['PF']['countryName']='French Polynesia';
$reg['PG']['amazon']='US'; $reg['PG']['fb']='     '; $reg['PG']['countryName']='Papua New Guinea';
$reg['PH']['amazon']='US'; $reg['PH']['fb']='     '; $reg['PH']['countryName']='Philippines';
$reg['PK']['amazon']='US'; $reg['PK']['fb']='     '; $reg['PK']['countryName']='Pakistan';
$reg['PL']['amazon']='US'; $reg['PL']['fb']='pl_PL'; $reg['PL']['countryName']='Poland';
$reg['PM']['amazon']='US'; $reg['PM']['fb']='     '; $reg['PM']['countryName']='Saint Pierre and Miquelon';
$reg['PN']['amazon']='US'; $reg['PN']['fb']='     '; $reg['PN']['countryName']='Pitcairn';
$reg['PR']['amazon']='US'; $reg['PR']['fb']='es_ES'; $reg['PR']['countryName']='Puerto Rico';
$reg['PS']['amazon']='US'; $reg['PS']['fb']='     '; $reg['PS']['countryName']='Palestinian Territory';
$reg['PT']['amazon']='US'; $reg['PT']['fb']='pt_BR'; $reg['PT']['countryName']='Portugal';
$reg['PW']['amazon']='US'; $reg['PW']['fb']='     '; $reg['PW']['countryName']='Palau';
$reg['PY']['amazon']='US'; $reg['PY']['fb']='es_ES'; $reg['PY']['countryName']='Paraguay';
$reg['QA']['amazon']='US'; $reg['QA']['fb']='     '; $reg['QA']['countryName']='Qatar';
$reg['RE']['amazon']='US'; $reg['RE']['fb']='fr_FR'; $reg['RE']['countryName']='Reunion';
$reg['RO']['amazon']='US'; $reg['RO']['fb']='     '; $reg['RO']['countryName']='Romania';
$reg['RS']['amazon']='US'; $reg['RS']['fb']='     '; $reg['RS']['countryName']='Serbia';
$reg['RU']['amazon']='US'; $reg['RU']['fb']='ru_RU'; $reg['RU']['countryName']='Russian Federation';
$reg['RW']['amazon']='US'; $reg['RW']['fb']='     '; $reg['RW']['countryName']='Rwanda';
$reg['SA']['amazon']='US'; $reg['SA']['fb']='ar_AR'; $reg['SA']['countryName']='Saudi Arabia';
$reg['SB']['amazon']='US'; $reg['SB']['fb']='     '; $reg['SB']['countryName']='Solomon Islands';
$reg['SC']['amazon']='US'; $reg['SC']['fb']='     '; $reg['SC']['countryName']='Seychelles';
$reg['SD']['amazon']='US'; $reg['SD']['fb']='     '; $reg['SD']['countryName']='Sudan';
$reg['SE']['amazon']='US'; $reg['SE']['fb']='     '; $reg['SE']['countryName']='Sweden';
$reg['SG']['amazon']='US'; $reg['SG']['fb']='     '; $reg['SG']['countryName']='Singapore';
$reg['SH']['amazon']='US'; $reg['SH']['fb']='     '; $reg['SH']['countryName']='Saint Helena';
$reg['SI']['amazon']='US'; $reg['SI']['fb']='     '; $reg['SI']['countryName']='Slovenia';
$reg['SJ']['amazon']='US'; $reg['SJ']['fb']='     '; $reg['SJ']['countryName']='Svalbard and Jan Mayen';
$reg['SK']['amazon']='US'; $reg['SK']['fb']='     '; $reg['SK']['countryName']='Slovakia';
$reg['SL']['amazon']='US'; $reg['SL']['fb']='     '; $reg['SL']['countryName']='Sierra Leone';
$reg['SM']['amazon']='US'; $reg['SM']['fb']='     '; $reg['SM']['countryName']='San Marino';
$reg['SN']['amazon']='US'; $reg['SN']['fb']='     '; $reg['SN']['countryName']='Senegal';
$reg['SO']['amazon']='US'; $reg['SO']['fb']='     '; $reg['SO']['countryName']='Somalia';
$reg['SR']['amazon']='US'; $reg['SR']['fb']='     '; $reg['SR']['countryName']='Suriname';
$reg['ST']['amazon']='US'; $reg['ST']['fb']='     '; $reg['ST']['countryName']='Sao Tome and Principe';
$reg['SV']['amazon']='US'; $reg['SV']['fb']='es_ES'; $reg['SV']['countryName']='El Salvador';
$reg['SY']['amazon']='US'; $reg['SY']['fb']='     '; $reg['SY']['countryName']='Syrian Arab Republic';
$reg['SZ']['amazon']='US'; $reg['SZ']['fb']='     '; $reg['SZ']['countryName']='Swaziland';
$reg['TC']['amazon']='US'; $reg['TC']['fb']='     '; $reg['TC']['countryName']='Turks and Caicos Islands';
$reg['TD']['amazon']='US'; $reg['TD']['fb']='     '; $reg['TD']['countryName']='Chad';
$reg['TF']['amazon']='US'; $reg['TF']['fb']='     '; $reg['TF']['countryName']='French Southern Territories';
$reg['TG']['amazon']='US'; $reg['TG']['fb']='     '; $reg['TG']['countryName']='Togo';
$reg['TH']['amazon']='US'; $reg['TH']['fb']='     '; $reg['TH']['countryName']='Thailand';
$reg['TJ']['amazon']='US'; $reg['TJ']['fb']='     '; $reg['TJ']['countryName']='Tajikistan';
$reg['TK']['amazon']='US'; $reg['TK']['fb']='     '; $reg['TK']['countryName']='Tokelau';
$reg['TL']['amazon']='US'; $reg['TL']['fb']='     '; $reg['TL']['countryName']='Timor-Leste';
$reg['TM']['amazon']='US'; $reg['TM']['fb']='     '; $reg['TM']['countryName']='Turkmenistan';
$reg['TN']['amazon']='US'; $reg['TN']['fb']='ar_AR'; $reg['TN']['countryName']='Tunisia';
$reg['TO']['amazon']='US'; $reg['TO']['fb']='     '; $reg['TO']['countryName']='Tonga';
$reg['TR']['amazon']='DE'; $reg['TR']['fb']='tr_TR'; $reg['TR']['countryName']='Turkey';
$reg['TT']['amazon']='US'; $reg['TT']['fb']='     '; $reg['TT']['countryName']='Trinidad and Tobago';
$reg['TV']['amazon']='US'; $reg['TV']['fb']='     '; $reg['TV']['countryName']='Tuvalu';
$reg['TW']['amazon']='US'; $reg['TW']['fb']='     '; $reg['TW']['countryName']='Taiwan';
$reg['TZ']['amazon']='US'; $reg['TZ']['fb']='     '; $reg['TZ']['countryName']='Tanzania, United Republic of';
$reg['UA']['amazon']='US'; $reg['UA']['fb']='     '; $reg['UA']['countryName']='Ukraine';
$reg['UG']['amazon']='US'; $reg['UG']['fb']='     '; $reg['UG']['countryName']='Uganda';
$reg['UM']['amazon']='US'; $reg['UM']['fb']='     '; $reg['UM']['countryName']='United States Minor Outlying Islands';
$reg['US']['amazon']='US'; $reg['US']['fb']='     '; $reg['US']['countryName']='United States';
$reg['UY']['amazon']='US'; $reg['UY']['fb']='es_ES'; $reg['UY']['countryName']='Uruguay';
$reg['UZ']['amazon']='US'; $reg['UZ']['fb']='     '; $reg['UZ']['countryName']='Uzbekistan';
$reg['VA']['amazon']='US'; $reg['VA']['fb']='     '; $reg['VA']['countryName']='Holy See (Vatican City State)';
$reg['VC']['amazon']='US'; $reg['VC']['fb']='     '; $reg['VC']['countryName']='Saint Vincent and the Grenadines';
$reg['VE']['amazon']='US'; $reg['VE']['fb']='es_ES'; $reg['VE']['countryName']='Venezuela';
$reg['VG']['amazon']='US'; $reg['VG']['fb']='     '; $reg['VG']['countryName']='Virgin Islands, British';
$reg['VI']['amazon']='US'; $reg['VI']['fb']='     '; $reg['VI']['countryName']='Virgin Islands, U.S.';
$reg['VN']['amazon']='US'; $reg['VN']['fb']='vi_VN'; $reg['VN']['countryName']='Vietnam';
$reg['VU']['amazon']='US'; $reg['VU']['fb']='     '; $reg['VU']['countryName']='Vanuatu';
$reg['WF']['amazon']='US'; $reg['WF']['fb']='     '; $reg['WF']['countryName']='Wallis and Futuna';
$reg['WS']['amazon']='US'; $reg['WS']['fb']='     '; $reg['WS']['countryName']='Samoa';
$reg['YE']['amazon']='US'; $reg['YE']['fb']='     '; $reg['YE']['countryName']='Yemen';
$reg['YT']['amazon']='US'; $reg['YT']['fb']='     '; $reg['YT']['countryName']='Mayotte';
$reg['ZA']['amazon']='US'; $reg['ZA']['fb']='     '; $reg['ZA']['countryName']='South Africa';
$reg['ZM']['amazon']='US'; $reg['ZM']['fb']='     '; $reg['ZM']['countryName']='Zambia';
$reg['ZW']['amazon']='US'; $reg['ZW']['fb']='     '; $reg['ZW']['countryName']='Zimbabwe';		
		}
}
?>