<?php


/* HOME - VARIABLES*/
	$home = 'http://afiliados.mamapapilla.com/';
	
	$google_analytics = 'UA-147522699-1';
	
/* META - VARIABLES*/	

	// Specifics Metas
	$metaSEO['title']["name"]= "title";
	$metaSEO['title']["property"]= "name";
	$metaSEO['title']["content"]= "BBootstrap";
	
	$metaSEO['dc.title']["name"]= "dc.title";
	$metaSEO['dc.title']["property"]= "name";		
	$metaSEO['dc.title']["content"]= "BBootstrap · Front-end Block System";;

	$metaSEO['keywords']["name"]= "keywords";
	$metaSEO['keywords']["property"]= "name";
	$metaSEO['keywords']["content"]= "Web Design|Front-end|easy and fast|Bootstrap, HTML, CSS, jQuery, Awesome-Icons";

	$metaSEO['subject']["name"]= "subject";
	$metaSEO['subject']["property"]= "name";
	$metaSEO['subject']["content"]= "PHP|Lib";

	// CORPORATION Metas WWW
	$metaSEO['date']["name"]= "date";
	$metaSEO['date']["property"]= "name";
	$metaSEO['date']["content"]= "2019-10-04";
	
	$metaSEO['author']["name"]= "author";
	$metaSEO['author']["property"]= "name";
	$metaSEO['author']["content"]= "Frank Cherry";

	$metaSEO['company']["name"]= "company";
	$metaSEO['company']["property"]= "name";
	$metaSEO['company']["content"]= "BBootstrap";
	
	$metaSEO['copyright']["name"]= "copyright";
	$metaSEO['copyright']["property"]= "name";
	$metaSEO['copyright']["content"]= "Paquinen - BBootstrap - 2019";

	// Robots Metas WWW
	$metaSEO['robots']["name"]= "robots";
	$metaSEO['robots']["property"]= "name";
	$metaSEO['robots']["content"]= "index, follow";
	
	$metaSEO['googlebot']["name"]= "googlebot";
	$metaSEO['googlebot']["property"]= "name";
	$metaSEO['googlebot']["content"]= "index, follow, all";
	
	$metaSEO['revisit-after']["name"]= "revisit-after";
	$metaSEO['revisit-after']["property"]= "name";
	$metaSEO['revisit-after']["content"]= "2 days";
	
	$metaSEO['lang']["name"]= "lang";
	$metaSEO['lang']["property"]= "name";
	$metaSEO['lang']["content"]= "es";
	
	$metaSEO['language']["name"]= "language";
	$metaSEO['language']["property"]= "name";
	$metaSEO['language']["content"]= "es";
	
	// Open Graph Metas
	$metaSEO['og:title']["name"]= "og:title";
	$metaSEO['og:title']["property"]= "property";
	$metaSEO['og:title']["content"]= "BBootstrap · Front-end Block System";

	$metaSEO['og:type']["name"]= "og:type";
	$metaSEO['og:type']["property"]= "property";
	$metaSEO['og:type']["content"]= "website0";

	$metaSEO['og:description']["name"]= "og:description";
	$metaSEO['og:description']["property"]= "property";
	$metaSEO['og:description']["content"]= "website1";

	$metaSEO['og:url']["name"]= "og:url";
	$metaSEO['og:url']["property"]= "property";
	$metaSEO['og:url']["content"]= $home;

	$metaSEO['og:image']["name"]= "og:image";
	$metaSEO['og:image']["property"]= "property";
	$metaSEO['og:image']["content"]= $home."img/logos/og-title-900x400.jpg";
	
	/* BLOCK - HEADER */
	
	$i=0;
	$slides[$i]['imgSRC'] = $home.'img/web/slide00.jpg'; 
	$slides[$i]['imgALT'] = 'First Item'; 
	$slides[$i]['captionTitle'] = 'First Slide'; 
	$slides[$i]['captionText'] = 'Primera Slide del show'; 
	$i++;
	$slides[$i]['imgSRC'] = $home.'img/web/slide01.jpg'; 
	$slides[$i]['imgALT'] = 'Second Item'; 
	$slides[$i]['captionTitle'] = 'Second Slide'; 
	$slides[$i]['captionText'] = 'Segunda Slide del Show'; 
	$i++;
	$slides[$i]['imgSRC'] = $home.'img/web/slide02.jpg'; 
	$slides[$i]['imgALT'] = 'Third Item'; 
	$slides[$i]['captionTitle'] = 'Third Slide'; 
	$slides[$i]['captionText'] = 'Tercera slide del show'; 

?>