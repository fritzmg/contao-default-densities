<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   default_densities
 * @author    Fritz Michael Gschwantner <https://github.com/fritzmg>
 * @license   GNU/LGPL
 * @copyright Fritz Michael Gschwantner 2015
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'DefaultDensities',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'DefaultDensities\Picture' => 'system/modules/default_densities/classes/Picture.php',
));
