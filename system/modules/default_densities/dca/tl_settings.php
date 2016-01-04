<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   default_densities
 * @author    Fritz Michael Gschwantner <https://github.com/fritzmg>
 * @license   LGPL-3.0+
 * @copyright Fritz Michael Gschwantner 2015
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace(',gdMaxImgHeight', ',gdMaxImgHeight,defaultDensities', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['defaultDensities'] = array
(
    'label'       => &$GLOBALS['TL_LANG']['tl_settings']['defaultDensities'],
    'inputType'   => 'text',
    'explanation' => 'imageSizeDensities',
    'eval'        => array('helpwizard'=>true, 'tl_class'=>'w50')
);
