<?php

/*---------------------------------------------------------------------------------
# mod_dt_simple_map - Google Map module for Joomla by Detalhar - DetalharWeb.com.br
# ---------------------------------------------------------------------------------
# author    Detalhar http://www.detalharweb.com.br
# Copyright (C) 2015 DetalharWeb.com.br. All Rights Reserved.
# @license - GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
# Website: http://www.detalharweb.com.br
----------------------------------------------------------------------------------*/

defined('_JEXEC') or die ('Restricted Access');
$doc = JFactory::getDocument();
$baseUrl = JUri::base();
$doc->addScript('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');//Add map api script
//Params
$lat 				= $params->get('lat');
$lng 				= $params->get('lng');
$height 			= $params->get('height', 300);
$zoomLevel 			= $params->get('zoomlevel',8);
$mapTypeId 			= $params->get('maptypeId', 'ROADMAP');
$marker 			= $params->get('marker');
$ContentInfo 		= $params->get('infoWindow');
$panControl 		= $params->get('panControl', false);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_dt_simple_map', $params->get('layout','default'));