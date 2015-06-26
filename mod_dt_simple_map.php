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

defined('_JEXEC') or die ('Restricted Access');
$doc = JFactory::getDocument();
$baseUrl = JUri::base();
$doc->addScript('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');//Add map api script
//Params
$lat 				= $params->get('lat');
$lng 				= $params->get('lng');
$height 			= (int)$params->get('height', 300);
$zoomLevel 			= $params->get('zoomlevel',8);
$mapTypeId 			= $params->get('maptypeId', 'ROADMAP');
$marker 			= $params->get('marker');
$ContentInfo 		= $params->get('infoWindow');
$panControl 		= $params->get('panControl', false);

$image = trim($marker);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_dt_simple_map', $params->get('layout','default'));
