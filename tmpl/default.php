<?php 
/*---------------------------------------------------------------------------------
# mod_dt_simple_map - Google Map module for Joomla by Detalhar - DetalharWeb.com.br
# ---------------------------------------------------------------------------------
# author    Detalhar http://www.detalharweb.com.br
# Copyright (C) 2015 DetalharWeb.com.br. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: http://www.detalharweb.com.br
----------------------------------------------------------------------------------*/

defined('_JEXEC') or die('Restricted Access');


 ?>

  <div class="dt-simple-map<?php echo $moduleclass_sfx; ?>">
 	<div id="dt-simple-map-canvas" style="margin:0; padding:0;width:100%; height:<?php echo $height?>px;"></div>
 </div>
 <script type="text/javascript">
 function initialize(){
 	var myLatLng = new google.maps.LatLng(<?php echo $lat?>, <?php echo $lng ?>);
 	var mapOptions = {
 		center: myLatLng,
 		panControl: <?php echo $panControl ?>,
 		zoom:<?php echo $zoomLevel ?>,
 		mapTypeId: google.maps.MapTypeId.<?php echo $mapTypeId ?>
 	};	

 	var map = new google.maps.Map(document.getElementById('dt-simple-map-canvas'),
	mapOptions);

	var contentString = "<?php echo $ContentInfo ?>";
	
	var image = "<?php echo $baseUrl .$marker ?>";
	
	var infoWindow = new google.maps.InfoWindow({
		content:contentString,
	});

	var marker = new google.maps.Marker({
		position:myLatLng,
		map:map,
		title: 'Mapa Detalhar',
	});

	google.maps.event.addListener(marker, 'click', function(){
		infoWindow.open(map, marker);
	});

	    marker.setMap(map);
 }
 initialize();
 </script>