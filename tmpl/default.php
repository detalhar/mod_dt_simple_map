<?php

/**
*-------------------------------------------------------------------------------
* DT Simple Map - Google Map module for Joomla by Detalhar - DetalharWeb.com.br
*-------------------------------------------------------------------------------
* @package DT Simple Map
* @version 1.0.0
* @author Detalhar http://www.detalharweb.com.br
* @copyright (C) 2015 Detalhar. All Rights Reserved
* @license - GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html or see LICENSE.txt
* @website: http://www.detalharweb.com.br
* mod_dt_simple_map is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
**/

defined('_JEXEC') or die('Restricted Access');

?>
 <?php if($lat && $lng) { ?>
 <script type="text/javascript">
 function initialize(){
 	var map;
 	var myLatlng;
 	var mapOptions;
 	var contentString;
 	var infoWindow;
 	var image;
 	var marker;

 	myLatlng = new google.maps.LatLng(<?php echo $lat?>, <?php echo $lng ?>);
 	mapOptions = {
 		center: myLatlng,
 		panControl: <?php echo $panControl ?>,
 		zoom:<?php echo $zoomLevel ?>,
 		mapTypeId: google.maps.MapTypeId.<?php echo $mapTypeId ?>
 	};	

 	map = new google.maps.Map(document.getElementById('dt-simple-map-canvas'), mapOptions);

	contentString = "<?php echo $ContentInfo ?>";

	infoWindow = new google.maps.InfoWindow({
		content:contentString
	});

	image = '';
	
	<?php if($image!=''){ ?>
		image = "<?php echo $baseUrl .$marker ?>";
	<?php  } ?>

	if (image!='' & typeof(image)!='undefined') {
		marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			icon: image
		});
	}
	else {
		marker = new google.maps.Marker({
			position: myLatlng,
			map: map
		});
	};

	google.maps.event.addListener(marker, 'click', function(){
		infoWindow.open(map,marker);
	});

	    marker.setMap(map);
 }
google.maps.event.addDomListener(window, 'load', initialize);
</script>
 <div class="dt-simple-map<?php echo $moduleclass_sfx; ?>">
 	<div id="dt-simple-map-canvas" style="margin:0; padding:0;width:100%; height:<?php echo $height?>px;"></div>
 </div>
 <?php } else { ?>
 <p style="text-align:center; color:red"><?php echo JTEXT::_('MOD_DT_SIMPLE_MAP_ERROR'); ?></p> 

 <?php } ?>
